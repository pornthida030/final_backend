<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DiscountCoupon;

class DiscountCouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id 1
        $coupon = new DiscountCoupon();
        $coupon->specific_code = "OFF50";
        $coupon->discount_percent = 50;
        $coupon->minimum_cost = 500; 
        $coupon->quantity = 10;
        $coupon->save();

        //id 2
        $coupon = new DiscountCoupon();
        $coupon->specific_code = "OFF20";
        $coupon->discount_percent = 20;
        $coupon->minimum_cost = 200; 
        $coupon->quantity = 5;
        $coupon->save();

        //id 3
        $coupon = new DiscountCoupon();
        $coupon->specific_code = "FIRSTTIME";
        $coupon->discount_percent = 30;
        $coupon->minimum_cost = 300; 
        $coupon->quantity = 4;
        $coupon->save();

        //id 4
        $coupon = new DiscountCoupon();
        $coupon->specific_code = "TENTEN123456";
        $coupon->discount_percent = 10;
        $coupon->minimum_cost = 100; 
        $coupon->quantity = 2;
        $coupon->save();

        //id 5
        $coupon = new DiscountCoupon();
        $coupon->specific_code = "HALLOWEEN";
        $coupon->discount_percent = 10;
        $coupon->minimum_cost = 300; 
        $coupon->quantity = 5;
        $coupon->save();

    }
}
