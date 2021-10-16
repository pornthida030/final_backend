<?php

namespace App\Http\Controllers;

use App\Models\PaymentRecord;
use App\Models\UserCoupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaymentRecordController extends Controller
{
    public function getPaymentRecords() {
        $payment_records = PaymentRecord::all();
        foreach ($payment_records as $payment) {
//            $payment['service'] = $payment->service;
//            $payment['coupon'] = $payment->coupon;
            $payment['user'] = $payment->user;

        }
        return $payment_records;
    }

    public function create(Request $request){
        $validator=Validator::make($request->all(),[
            'user_id'=>'required',
            'items'=>'required'
        ]);
        if($validator->fails()){
            $errors=$validator->errors();
            return [
                "status"=>"error",
                "error"=>$errors
            ];
        }
        else{
            $payment_record = new PaymentRecord();
            $payment_record->user_id = $request->user_id;
            $payment_record->items = $request->items;

            if($payment_record->save()){
                return $payment_record;
            }
            else{
                return
                    [
                        "status"=> "error",
                        "error" => "สร้างไม่ได้"
                    ];
            }
        }
    }
}
