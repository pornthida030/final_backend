<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiscountCoupon;
use Illuminate\Support\Facades\Validator;

class DiscountCouponController extends Controller
{
    // ทำ crate, update, destory 
    // public function check(Request $request){
    //     $validator=Validator::make($request->all(),[
    //         'specific_code'=>'required'
    //     ]);
    //     if($validator->fails()){
    //         $errors=$validator->errors();
    //         return [
    //             "status"=>"error",
    //             "error"=>$errors
    //         ];
    //     }
    //     else{
    //         $discountCoupons = DiscountCoupon::all();
    //         foreach($discountCoupons as $discountCoupon){
    //             if($discountCoupons[$discountCoupon]->specific_code===$request->specific_code){
    //                 return [

    //                 ];
    //             }
    //         }
    //     }
        
        
    // }
    public function create(Request $request){
        $validator=Validator::make($request->all(),[
            'specific_code'=>'required',
            'discount_percent'=>'required',
            'minimum_cost'=>'required',
            'quantity' => 'required'
        ]);
        if($validator->fails()){
            $errors=$validator->errors();
            return [
                "status"=>"error",
                "error"=>$errors
            ];
        }
        else{
            $discountCoupon = new DiscountCoupon();
            $discountCoupon->specific_code=$request->specific_code;
            $discountCoupon->discount_percent=$request->discount_percent;
            $discountCoupon->minimum_cost=$request->minimum_cost;
            $discountCoupon->quantity=$request->quantity;
            if($discountCoupon->save()){
                return $discountCoupon;
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
    
    public function update(Request $request, $id){
        $discountCoupon = DiscountCoupon::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'specific_code' => 'required',
            'discount_percent' => 'required',
            'minimum_cost' => 'required',
            'quantity' => 'required'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            return [
                "status"=> "error", 
                "error" => $errors
            ];
        } else {
            $discountCoupon->specific_code = $request->specific_code;
            $discountCoupon->discount_percent = $request->discount_percent;
            $discountCoupon->minimum_cost = $request->minimum_cost;
            $discountCoupon->quantity=$request->quantity;
            if ($discountCoupon->save()){
                return $discountCoupon;
            }else {
                return
                [
                    "status"=> "error", 
                    "error" => "แก้ไขไม่ได้"
                ];
            }
        }
    }

    public function destory(Request $request,$id){
        $discountCoupon = DiscountCoupon::findOrFail($id);
        if ( $discountCoupon->delete() ) {
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

    public function getDiscountCoupon(){
        $discountCoupon = DiscountCoupon::get();
        return $discountCoupon;
    }
}
