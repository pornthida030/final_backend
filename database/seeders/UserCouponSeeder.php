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
        // user1
        $user_coupon = new UserCoupon();
        $user_coupon->service_id = 3;

        $user_coupon->user_id = 3;
        $user_coupon->employee_id = 8;
        $user_coupon->coupon_id = 6;
        $user_coupon->coupon_status= "unuse";
        $user_coupon->reviewed = false;
        $user_coupon->save();


        $user_coupon = new UserCoupon();
        $user_coupon->service_id = 3;

        $user_coupon->user_id = 3;
        $user_coupon->employee_id = 8;
        $user_coupon->coupon_id = 5;
        $user_coupon->coupon_status= "used";
        $user_coupon->reviewed = false;
        $user_coupon->save();


        $user_coupon = new UserCoupon();
        $user_coupon->service_id = 3;

        $user_coupon->user_id = 3;
        $user_coupon->employee_id = 9;
        $user_coupon->coupon_id = 6;
        $user_coupon->coupon_status= "unuse";
        $user_coupon->reviewed = false;
        $user_coupon->save();


        // user2
        $user_coupon = new UserCoupon();
        $user_coupon->service_id = 6;

        $user_coupon->employee_id = 11;
        $user_coupon->user_id = 4;
        $user_coupon->coupon_id = 9;
        $user_coupon->coupon_status= "used";
        $user_coupon->reviewed = false;
        $user_coupon->save();


        $user_coupon = new UserCoupon();
        $user_coupon->service_id = 6;

        $user_coupon->employee_id = 11;
        $user_coupon->user_id = 4;
        $user_coupon->coupon_id = 10;
        $user_coupon->coupon_status= "unuse";
        $user_coupon->reviewed = false;
        $user_coupon->save();


        $user_coupon = new UserCoupon();
        $user_coupon->service_id = 6;

        $user_coupon->employee_id = 12;
        $user_coupon->user_id = 4;
        $user_coupon->coupon_id = 10;
        $user_coupon->coupon_status= "used";
        $user_coupon->reviewed = false;
        $user_coupon->save();


        // user3
        $user_coupon = new UserCoupon();
        $user_coupon->service_id = 6;

        $user_coupon->employee_id = 11;
        $user_coupon->user_id = 5;
        $user_coupon->coupon_id = 9;
        $user_coupon->coupon_status= "used";
        $user_coupon->reviewed = false;
        $user_coupon->save();


        // user4
        $user_coupon = new UserCoupon();
        $user_coupon->service_id = 6;

        $user_coupon->employee_id = 12;
        $user_coupon->user_id = 6;
        $user_coupon->coupon_id = 9;
        $user_coupon->coupon_status= "unuse";
        $user_coupon->reviewed = false;
        $user_coupon->save();

        $user_coupon = new UserCoupon();
        $user_coupon->service_id = 3;

        $user_coupon->employee_id = 10;
        $user_coupon->user_id = 6;
        $user_coupon->coupon_id = 5;
        $user_coupon->coupon_status= "unuse";
        $user_coupon->reviewed = false;
        $user_coupon->save();

        $user_coupon = new UserCoupon();
        $user_coupon->service_id = 2;

        $user_coupon->employee_id = 9;
        $user_coupon->user_id = 6;
        $user_coupon->coupon_id = 3;
        $user_coupon->coupon_status= "used";
        $user_coupon->reviewed = false;
        $user_coupon->save();


        // user5
        $user_coupon = new UserCoupon();
        $user_coupon->service_id = 5;

        $user_coupon->employee_id = 8;
        $user_coupon->user_id = 7;
        $user_coupon->coupon_id = 8;
        $user_coupon->coupon_status= "unuse";
        $user_coupon->reviewed = false;
        $user_coupon->save();
    }
}
