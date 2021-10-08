<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\User;
use App\Models\UserCoupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserCouponController extends Controller
{

    public function getUserCoupon() {
//        $user_coupon = UserCoupon::get();
        $user_coupon = UserCoupon::all();
        $user_coupon["coupon"] = $user_coupon->coupon;
        $user_coupon["service"] = $user_coupon->service;
        return $user_coupon;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addUserCoupon(Request $request, $id, User $user)
    {
        $validator = Validator::make($request->all(), [
        
            'price' => 'required',
            'time' => 'required',
        ]);

        $user_coupon = UserCoupon::findOrFail($id);
        $user_coupon->coupon_owner = $user->name;
        $user_coupon->coupon_owner = $user->name;

        if ($validator->fails()) {
            $errors = $validator->errors();
            return [
                "status"=> "error",
                "error" => $errors
            ];
        }
        else {
            $user_coupon = new UserCoupon();
            $user_coupon->name = $request->name;
            $user_coupon->price = $request->price;
            $user_coupon->time = $request->time;

            if ($user_coupon->save()){
                return $user_coupon;
            }
            else {
                return
                    [
                        "status"=> "error",
                        "error" => "สร้างไม่ได้"
                    ];
            }
        }
    }

    public function update(Request $request, $id){
        $user_coupon = UserCoupon::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'type' => 'required',
            'coupon_status' => 'required',
            'reviewed' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            return [
                "status"=> "error",
                "error" => $errors
            ];
        }
        else {
            $user_coupon->name = $request->type;
            $user_coupon->price = $request->coupon_status;
            $user_coupon->time = $request->reviewed;

            if ($user_coupon->save()){
                return $user_coupon;
            }
            else {
                return
                    [
                        "status"=> "error",
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
        if ( $user_coupon->delete() ) {
            return [
                "status"=> "success"
            ];
        } else {
            return [
                "status"=> "error",
                "error" => "ลบไม่ได้"
            ];
        }
    }
}
