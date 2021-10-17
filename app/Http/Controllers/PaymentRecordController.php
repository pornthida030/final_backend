<?php

namespace App\Http\Controllers;

use Firebase\JWT\JWT;
use App\Models\PaymentRecord;
use App\Models\User;
use App\Models\UserCoupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaymentRecordController extends Controller
{
    public function getPaymentRecords(Request $request)
    {
        $token = $request->header('Authorization');
        $credentials = JWT::decode($token, env('JWT_SECRET'), ['HS256']);
        $user = User::find($credentials->sub);
        $payment_records = PaymentRecord::where('user_id','=',$user->id)->orderByDesc('created_at')->get();

        foreach ($payment_records as $payment) {
            $payment['user'] = $payment->user;
        }

        return $payment_records;
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'items' => 'required'
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return [
                "status" => "error",
                "error" => $errors
            ];
        } else {
            $payment_record = new PaymentRecord();
            $payment_record->user_id = $request->user_id;
            $payment_record->items = $request->items;

            if ($payment_record->save()) {
                return $payment_record;
            } else {
                return
                    [
                        "status" => "error",
                        "error" => "สร้างไม่ได้"
                    ];
            }
        }
    }

    public function makeTransaction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'items' => 'required'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return [
                "status" => "error",
                "error" => $errors
            ];
        } else {
            $token = $request->header('Authorization');
            $credentials = JWT::decode($token, env('JWT_SECRET'), ['HS256']);
            $user = User::find($credentials->sub);

            $items = [];
            $totalPrice = 0.0;

            foreach ($request->items as $value){
                // $value["item"]["service_id"]; same like $value->item but อันนี้ใช้ไม่ได้
                $user_coupon = new UserCoupon();
                $user_coupon->service_id = $value['item']['service_id'];
                $user_coupon->user_id = $user->id;
                $user_coupon->coupon_id = $value['item']['id'];
                $user_coupon->employee_id = $value['employee']['user_id'];
                $user_coupon->save();

                $totalPrice = $totalPrice + $value['item']['price'];

                array_push($items,[
                    'name' => $value['item']['name'],
                    'date' => $value['date']
                ]);
            }

            $payment_record = new PaymentRecord();
            $payment_record->user_id = $user->id;
            $payment_record->items = $items;
            $payment_record->totalPrice = $totalPrice;
            
            if ($payment_record->save()) {
                return $payment_record;
            } else {
                return
                    [
                        "status" => "error",
                        "error" => "ไม่สามารถทำการชำระเงินได้เนื่องจากข้อผิดพลาดบางอย่าง"
                    ];
            }
        }
    }
}
