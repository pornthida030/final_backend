<?php

namespace Database\Seeders;

use App\Models\UserCoupon;
use Illuminate\Database\Seeder;

class UserCouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // user id 1
        // coupon id 1
        $user_coupon = new UserCoupon();
        $user_coupon->service_id = 1;

        $user_coupon->user_id = 2;
        $user_coupon->employee_id = 3;
        $user_coupon->coupon_id = 1;
        $user_coupon->coupon_status= "used";
        $user_coupon->reviewed = true;
        $user_coupon->save();

        // user id 1
        // coupon id 2
        $user_coupon = new UserCoupon();
        $user_coupon->service_id = 1;

        $user_coupon->user_id = 2;
        $user_coupon->employee_id = 3;
        $user_coupon->coupon_id = 2;
        $user_coupon->coupon_status= "used";
        $user_coupon->reviewed = false;
        $user_coupon->save();

        // user id 1
        // coupon id 3
        $user_coupon = new UserCoupon();
        $user_coupon->service_id = 1;
        $user_coupon->employee_id = 3;
        $user_coupon->user_id = 2;
        $user_coupon->coupon_id = 2;
        $user_coupon->coupon_status= "unuse";
        $user_coupon->reviewed = true;
        $user_coupon->save();

        // user id 2
        // coupon id 4
        $user_coupon = new UserCoupon();
        $user_coupon->service_id = 4;
        $user_coupon->employee_id = 3;
        $user_coupon->user_id = 2;
        $user_coupon->coupon_id = 2;
        $user_coupon->coupon_status= "unuse";
        $user_coupon->reviewed = false;
        $user_coupon->save();

        // user id 2
        // coupon id 5
        $user_coupon = new UserCoupon();
        $user_coupon->service_id = 5;
        $user_coupon->employee_id = 3;
        $user_coupon->user_id = 2;
        $user_coupon->coupon_id = 3;
        $user_coupon->coupon_status= "used";
        $user_coupon->reviewed = false;
        $user_coupon->save();
    }
}
