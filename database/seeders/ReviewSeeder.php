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
        //service id 1
        //review id 1
        $review = new Review();
        $review->service_id= 1;
        $review->user_id = 5;
        $review->coupon_id = 1;
        $review->review_detail = "ช่างทำดีมากค่ะ";
        $review->score = 4;
        $review->save();    

        //coupon id 6
        //service id 1
        //review id 2
        $review = new Review();
        $review->service_id= 1;
        $review->user_id = 4;
        $review->coupon_id = 6;
        $review->review_detail = "พนักงานบริการดีค่ะ แต่รอนานไปหน่อย";
        $review->score = 3;
        $review->save();  

        //coupon id 3
        //service id 1
        //review id 3
        $review = new Review();
        $review->service_id= 1;
        $review->user_id = 3;
        $review->coupon_id = 3;
        $review->review_detail = "สีผมโดนใจมากค่ะ บริการดีมากเลยค่ะ";
        $review->score = 5;
        $review->save();  

        //coupon id 9
        //service id 6
        //review id 4
        $review = new Review();
        $review->service_id= 6;
        $review->user_id = 7;
        $review->coupon_id = 9;
        $review->review_detail = "นวดสบายมากค่ะ";
        $review->score = 4;
        $review->save();  

        //coupon id 22
        //service id 14
        //review id 5
        $review = new Review();
        $review->service_id= 14;
        $review->user_id = 6;
        $review->coupon_id = 22;
        $review->review_detail = "พนักงานทำมือนิ่งมากค่ะ";
        $review->score = 4;
        $review->save();  

        //coupon id 34
        //service id 20
        //review id 6
        $review = new Review();
        $review->service_id= 20;
        $review->user_id = 3;
        $review->coupon_id = 34;
        $review->review_detail = "โหวงเฮ้งดีขึ้นเลยค่ะ";
        $review->score = 5;
        $review->save();  

        //coupon id 18
        //service id 11
        //review id 7
        $review = new Review();
        $review->service_id= 11;
        $review->user_id = 5;
        $review->coupon_id = 18;
        $review->review_detail = "ทำแล้วต้องทำให้สุดค่ะ";
        $review->score = 3;
        $review->save(); 
        
        //coupon id 14
        //service id 9
        //review id 8
        $review = new Review();
        $review->service_id= 9;
        $review->user_id = 6;
        $review->coupon_id = 14;
        $review->review_detail = "เมื่อยแขนสุดๆ";
        $review->score = 2;
        $review->save();  

        //coupon id 23
        //service id 15
        //review id 9
        $review = new Review();
        $review->service_id= 15;
        $review->user_id = 7;
        $review->coupon_id = 23;
        $review->review_detail = "เจ็บมากค่ะ แขนขาระบมไปหมด!!";
        $review->score = 1;
        $review->save();  

        //coupon id 29
        //service id 17
        //review id 10
        $review = new Review();
        $review->service_id= 17;
        $review->user_id = 5;
        $review->coupon_id = 29;
        $review->review_detail = "พนักงานบริการดีค่ะ เหมือนได้ไปอยู่ที่ภูเขาไฟจริงๆเลยค่ะ";
        $review->score = 5;
        $review->save();  

         //coupon id 35
        //service id 21
        //review id 11
        $review = new Review();
        $review->service_id= 21;
        $review->user_id = 6;
        $review->coupon_id = 35;
        $review->review_detail = "บริการดีค่ะ ทำแล้วไม่ค่อยเจ็บค่ะ";
        $review->score = 4;
        $review->save();  

        //coupon id 35
        //service id 21
        //review id 12
        $review = new Review();
        $review->service_id= 15;
        $review->user_id = 5;
        $review->coupon_id = 23;
        $review->review_detail = "ขาแขนเนียนดีค่ะ";
        $review->score = 3;
        $review->save(); 

        //coupon id 15
        //service id 10
        //review id 13
        $review = new Review();
        $review->service_id= 10;
        $review->user_id = 7;
        $review->coupon_id = 15;
        $review->review_detail = "ต่อเนียนดีค่ะ";
        $review->score = 5;
        $review->save(); 

        //coupon id 12
        //service id 8
        //review id 14
        $review = new Review();
        $review->service_id= 8;
        $review->user_id = 5;
        $review->coupon_id = 12;
        $review->review_detail = "ปังไม่ไหวค่ะ!!";
        $review->score = 5;
        $review->save(); 

        //coupon id 12
        //service id 8
        //review id 15
        $review = new Review();
        $review->service_id= 8;
        $review->user_id = 4;
        $review->coupon_id = 12;
        $review->review_detail = "สีสดมากค่ะ พนักงานบริการดีค่ะ";
        $review->score = 5;
        $review->save(); 

        //coupon id 12
        //service id 8
        //review id 16
        $review = new Review();
        $review->service_id= 8;
        $review->user_id = 3;
        $review->coupon_id = 12;
        $review->review_detail = "เห็นรีวิวกันว่าดีเราลองไปทำตามดีจริงค่ะ ซิส~";
        $review->score = 5;
        $review->save(); 

        //coupon id 12
        //service id 8
        //review id 17
        $review = new Review();
        $review->service_id= 8;
        $review->user_id = 7;
        $review->coupon_id = 12;
        $review->review_detail = "สวยสุดใน3ล้านล้านโลก พนักงานใจดีมั่กๆ >_<";
        $review->score = 5;
        $review->save(); 


        //coupon id 3
        //service id 2
        //review id 18
        $review = new Review();
        $review->service_id= 2;
        $review->user_id = 7;
        $review->coupon_id = 3;
        $review->review_detail = "ตัดปุบเดินไปหาเพื่อน เพื่อนคิดว่ายูนาบีเลยค๊าาา~";
        $review->score = 4;
        $review->save(); 

        //coupon id 5
        //service id 3
        //review id 19
        $review = new Review();
        $review->service_id= 3;
        $review->user_id = 6;
        $review->coupon_id = 5;
        $review->review_detail = "แสบแต่สวยค่ะ";
        $review->score = 3;
        $review->save(); 

        //coupon id 19
        //service id 12
        //review id 20
        $review = new Review();
        $review->service_id= 12;
        $review->user_id = 7;
        $review->coupon_id = 19;
        $review->review_detail = "";
        $review->score = 4;
        $review->save();


        //coupon id 30
        //service id 18
        //review id 21
        $review = new Review();
        $review->service_id= 18;
        $review->user_id = 5;
        $review->coupon_id = 30;
        $review->review_detail = "";
        $review->score = 1;
        $review->save();
    }
}
