<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coupon;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ย้อมผม service id 1
        // coupon id 1
        $coupon = new Coupon();
        $coupon->type_id = 1;
        $coupon->service_id = 1;
        $coupon->name = "ย้อมผม+กัดสีผม 1 รอบ";
        $coupon->price = 500;
        $coupon->time = 100; 
        $coupon->save();

        // ย้อมผม service id 1
        // coupon id 2
        $coupon = new Coupon();
        $coupon->type_id = 1;
        $coupon->service_id = 1;
        $coupon->name = "ย้อมผม+กัดสีผม ด้วยผลิตภัณฑ์ออแกนิก";
        $coupon->price = 2000;
        $coupon->time = 190; 
        $coupon->save();

        // ย้อมผม service id 1
        // coupon id 3
        $coupon = new Coupon();
        $coupon->type_id = 1;
        $coupon->service_id = 1;
        $coupon->name = "ย้อมผม+ทำไฮไลท์";
        $coupon->price = 800;
        $coupon->time = 190; 
        $coupon->save();

        // ตัดผม service id 2
        // coupon id 4
        $coupon = new Coupon();
        $coupon->type_id = 1;
        $coupon->service_id = 2;
        $coupon->name = "ตัดผมประบ่า";
        $coupon->price = 200;
        $coupon->time = 30; 
        $coupon->save();

        // นวดฝ่าเท้า service id 3
        // coupon id 5
        $coupon = new Coupon();
        $coupon->type_id = 2;
        $coupon->service_id = 3;
        $coupon->name = "นวดฝ่าเท้าด้วยน้ำมันมวย";
        $coupon->price = 100;
        $coupon->time = 15; 
        $coupon->save();

        // นวดหน้า service id 4
        // coupon id 6
        $coupon = new Coupon();
        $coupon->type_id = 2;
        $coupon->service_id = 4;
        $coupon->name = "นวดหน้าด้วยน้ำมันมะพร้าว";
        $coupon->price = 900;
        $coupon->time = 45; 
        $coupon->save();

        $coupon = new Coupon();
        $coupon->type_id = 1;
        $coupon->service_id = 1;
        $coupon->name = "ย้อมผม+กัดสีผม 1 รอบ";
        $coupon->price = 500;
        $coupon->time = 100; 
        $coupon->save();

        $coupon = new Coupon();
        $coupon->type_id = 1;
        $coupon->service_id = 1;
        $coupon->name = "ย้อมผม+กัดสีผม 1 รอบ";
        $coupon->price = 500;
        $coupon->time = 100; 
        $coupon->save();

        $coupon = new Coupon();
        $coupon->type_id = 1;
        $coupon->service_id = 1;
        $coupon->name = "ย้อมผม+กัดสีผม 1 รอบ";
        $coupon->price = 500;
        $coupon->time = 100; 
        $coupon->save();

        



        


    }
}
