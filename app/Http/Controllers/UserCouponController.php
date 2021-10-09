<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\User;
use App\Models\UserCoupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserCouponController extends Controller
{

    public function getUserCoupon()
    {
        $user_coupon = UserCoupon::all();
      
        foreach ($user_coupon as $mama) {
            $mama['service'] = $mama->service;
            $mama['coupon'] = $mama->coupon;
            $mama['user'] = $mama->user;

          }
        return $user_coupon;
    }

    public function addUserCoupon(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_id' => 'required',            
            'user_id' => 'required',
            'coupon_id' => 'required'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return [
                "status" => "error",
                "error" => $errors
            ];
        } else {
            $user_coupon = new UserCoupon();
            $user_coupon->service_id = $request->service_id;
            $user_coupon->user_id = $request->user_id;
            $user_coupon->coupon_id = $request->coupon_id;

            if ($user_coupon->save()) {
                return $user_coupon;
            } else {
                return
                    [
                        "status" => "error",
                        "error" => "ไม่สามารถเพิ่มคูปอง"
                    ];
            }
        }
    }

    public function updateCouponStatus(Request $request, $id)
    {
        $user_coupon = UserCoupon::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'coupon_status' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            return [
                "status" => "error",
                "error" => $errors
            ];
        } else {
            $user_coupon->coupon_status = $request->coupon_status;

            if ($user_coupon->save()) {
                return $user_coupon;
            } else {
                return
                    [
                        "status" => "error",
                        "error" => "แก้ไขไม่ได้"
                    ];
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_coupon = UserCoupon::findOrFail($id);
        if ($user_coupon->delete()) {
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
