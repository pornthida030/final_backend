<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CouponController extends Controller
{
     // create coupon
    public function createCoupon(Request $request){
        // validator
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'time' => 'required',


        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            return [
                "status"=> "error", 
                "error" => $errors
            ];
        } else {
            $coupon = new Coupon();
            $coupon->name = $request->name;
            $coupon->price = $request->price;
            $coupon->time = $request->time;

            if ($coupon->save()){
                return $coupon;
            }else {
                return
                [
                    "status"=> "error", 
                    "error" => "สร้างไม่ได้"
                ];
            }
        }
    }

    // update, แก้ไข
    public function update(Request $request, $id){
        $coupon = Coupon::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'time' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            return [
                "status"=> "error", 
                "error" => $errors
            ];
        } else {
            $coupon->name = $request->name;
            $coupon->price = $request->price;
            $coupon->time = $request->time;

            if ($coupon->save()){
                return $coupon;
            }else {
                return
                [
                    "status"=> "error", 
                    "error" => "แก้ไขไม่ได้"
                ];
            }
        }
        


    }

    // delete
    public function destroy(Request $request, $id)
    {
        $coupon = Coupon::findOrFail($id);
        if ( $coupon->delete() ) {
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
