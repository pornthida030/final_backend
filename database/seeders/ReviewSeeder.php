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
        //coupon id 1

        //review id 1
        $review = new Review();
        $review->service_id= 1;
        $review->name="Shoto";
        $review->coupon_id = 1;
        $review->review_detail = "ช่างทำดีมากค่ะ";
        $review->score = 4;
        $review->save();    

        //coupon id 6
   
        //review id 2
        $review = new Review();
        $review->service_id= 1;
        $review->name="Yokky";
        $review->coupon_id = 6;
        $review->review_detail = "พนักงานบริการดีค่ะ แต่รอนานไปหน่อย";
        $review->score = 3;
        $review->save();  

        //coupon id 3
    
        //review id 3
        $review = new Review();
        $review->service_id= 1;
        $review->name="Salmon";
        $review->coupon_id = 3;
        $review->review_detail = "สีผมโดนใจมากค่ะ บริการดีมากเลยค่ะ";
        $review->score = 5;
        $review->save();  

        //coupon id 5
  
        //review id 4
         
        $review = new Review();
        $review->service_id= 3;
        $review->name="Bhumipol";
        $review->coupon_id = 5;
        $review->review_detail = "นวดสบายมากค่ะ";
        $review->score = 4;
        $review->save();  
    }
}
