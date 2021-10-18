<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiscountCoupon;
use Illuminate\Support\Facades\Validator;

class DiscountCouponController extends Controller
{
    // ทำ crate, update, destory 
    public function create(Request $request){
        $validator=Validator::make($request->all(),[
            'specific_code'=>'required|unique:discount_coupons',
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
            'quantity' => 'required'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            return [
                "status"=> "error", 
                "error" => $errors
            ];
        } else {
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

    public function checkDiscountCoupon($discount){
        $discountCoupon = DiscountCoupon::where('specific_code','=', $discount)->where('quantity','>','0')->first();

        if($discountCoupon){
            return $discountCoupon;
        }else{
            return [
                "status"=> "error", 
                "error" => "ไม่พบคูปองที่ท่านต้องการ หรือ คูปองอาจจะหมดแล้ว"
            ];
        }
    }
    
    public function useDiscountCoupon(Request $request,$id){
        $discountCoupon = DiscountCoupon::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'quantity' => 'required'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            return [
                "status"=> "error", 
                "error" => $errors
            ];
        } else {
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

    public function getAll(){
        $discountCoupon= DiscountCoupon::get();
        return $discountCoupon;
    }
}
