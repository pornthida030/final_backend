<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Review;


class ReviewController extends Controller
{
    public function getAllReview()
    {
        $reveiws= Review::all();
        return $reveiws;
    }

    public function createReview(Request $request,$id)
    {
        
        $validator = Validator::make($request->all(),
        [
            'name' => 'required',
            'score'=>'required',
            'review_detail'=>'required',
            'coupon_name'=>'required'
        ]);
        if($validator->fails()){
            $error = $validator->errors();
            return [
                "status"=>"error",
                "error"=>$error
            ];
        }else{
            $review = new Review();
            $review->score=$request->score;
            $review->review_detail=$request->review_detail;
            $review->coupon_name=$request->coupon_name;
            $review->name=$request->name;
            if($review->save()){
                return $review;
            }
            else{
                return [
                    "status"=>"error",
                    "error"=>"สร้างไม่ได้"
                ];
            }
        }
    }
}
