<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\UserCoupon;


class ReviewController extends Controller
{
    public function createReview(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'score' => 'required',
                'review_detail' => 'required'
            ]
        );
        if ($validator->fails()) {
            $error = $validator->errors();
            return [
                "status" => "error",
                "error" => $error
            ];
        } else {
            $review = new Review();
            $review->service_id = $request->service_id;
            $review->coupon_id = $request->coupon_id;
            $review->user_id = $request->user_id;
            $review->score = $request->score;
            $review->review_detail = $request->review_detail;

            $user_coupon = UserCoupon::findorFail($request->user_coupon_id);
            $user_coupon->reviewed = true;
            $user_coupon->save();

            if ($review->save()) {
                return $review;
            } else {
                return [
                    "status" => "error",
                    "error" => "สร้างไม่ได้"
                ];
            }
        }
    }
}
