<?php

namespace App\Http\Controllers;

use App\Models\Coupon;

use App\Models\UserCoupon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    // create coupon
    public function createCoupon(Request $request)
    {
        // validator
        $validator = Validator::make($request->all(), [
            'type_id' => 'required',
            'service_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'time' => 'required',


        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            return [
                "status" => "error",
                "error" => $errors
            ];
        } else {
            $coupon = new Coupon();
            $coupon->type_id = $request->type_id;
            $coupon->service_id = $request->service_id;
            $coupon->name = $request->name;
            $coupon->price = $request->price;
            $coupon->time = $request->time;

            if ($coupon->save()) {
                return $coupon;
            } else {
                return
                    [
                        "status" => "error",
                        "error" => "สร้างไม่ได้"
                    ];
            }
        }
    }

    // update, แก้ไข
    public function update(Request $request, $id)
    {
        $coupon = Coupon::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'time' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            return [
                "status" => "error",
                "error" => $errors
            ];
        } else {
            $coupon->name = $request->name;
            $coupon->price = $request->price;
            $coupon->time = $request->time;

            if ($coupon->save()) {
                return $coupon;
            } else {
                return
                    [
                        "status" => "error",
                        "error" => "แก้ไขไม่ได้"
                    ];
            }
        }
    }

    // delete
    public function destroy(Request $request, $id)
    {
        $user_coupon = UserCoupon::where('coupon_id', '=', $id)->where('coupon_status', '=', 'unuse')->get();

        if (count($user_coupon) > 0) {
            return [
                "status" => "error",
                "error" => "ไม่สามารถลบได้ เพราะ มีลูกค้าซื้อคูปองไปแล้วยังไม่ได้ใช้งาน"
            ];
        } else {
            $coupon = Coupon::findOrFail($id);
            $coupon->user_coupons()->delete();
            if ($coupon->delete()) {
                return [
                    "status" => "success"
                ];
            } else {
                return [
                    "status" => "error",
                    "error" => "ลบไม่ได้"
                ];
            }
        }
    }

    // random function for Home page
    public function random()
    {
        $coupon = Coupon::all()->random(4);
        foreach ($coupon as $ponpon) {
            //pon pon wei wei wei pon pon wei pon wei pon pon
            $ponpon['employee'] = $ponpon->type->employees($ponpon['type_id'])->get();
            foreach ($ponpon['employee'] as $employee) {
                $employee["name"] = $employee->user()->value('name');
            }
        }
        return $coupon;
    }
}
