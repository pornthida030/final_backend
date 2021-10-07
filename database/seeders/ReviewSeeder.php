<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $review = new Review();
        $review->user_id = 2;
        $review->coupon_id = 1;
        $review->review_detail = "ช่างทำดีมากค่ะ";
        $review->score = 4;
        $review->save();    

        $review = new Review();
        $review->user_id = 2;
        $review->coupon_id = 6;
        $review->review_detail = "พนักงานบริการดีค่ะ แต่รอนานไปหน่อย";
        $review->score = 3;
        $review->save();  

        $review = new Review();
        $review->user_id = 2;
        $review->coupon_id = 3;
        $review->review_detail = "สีผมโดนใจมากค่ะ บริการดีมากเลยค่ะ";
        $review->score = 5;
        $review->save();  

        $review = new Review();
        $review->user_id = 2;
        $review->coupon_id = 5;
        $review->review_detail = "นวดสบายมากค่ะ";
        $review->score = 4;
        $review->save();  
    }
}
