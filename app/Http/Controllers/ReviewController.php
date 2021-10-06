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
            'score'=>'required',
            'review_detail'=>'required'
            
        ]);
        if($validator->fails()){
            $error = $validator->errors();
            return [
                "status"=>"error",
                "error"=>$error
            ];
        }else{
            $reveiw = new Review();
            $reveiw->score=$request->score;
            $reveiw->review_detail=$request->review_detail;
            $reveiw->coupon_id=$id;
            $reveiw->user_id=$request->user_id;
            if($reveiw->save()){
                return $reveiw;
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
