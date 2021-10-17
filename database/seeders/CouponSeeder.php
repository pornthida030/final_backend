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
        // type id 1 : ซาลอน
        // service id 1 : สระผม
        // coupon id 1
        $coupon = new Coupon();
        $coupon->type_id = 1;
        $coupon->service_id = 1;
        $coupon->name = "สระผมธรรมดา";
        $coupon->price = 200;
        $coupon->time = 30; 
        $coupon->save();

        // coupon id 2
        $coupon = new Coupon();
        $coupon->type_id = 1;
        $coupon->service_id = 1;
        $coupon->name = "สระผม + ทำทรีตเมนต์";
        $coupon->price = 500;
        $coupon->time = 90; 
        $coupon->save();

        // type id 1 : ซาลอน
        // service id 2 : ตัดผม
        // coupon id 3
        $coupon = new Coupon();
        $coupon->type_id = 1;
        $coupon->service_id = 2;
        $coupon->name = "ตัดผมแบบยูนาบี";
        $coupon->price = 1000;
        $coupon->time = 60; 
        $coupon->save();

        // coupon id 4
        $coupon = new Coupon();
        $coupon->type_id = 1;
        $coupon->service_id = 2;
        $coupon->name = "ตัดผมประบ่า";
        $coupon->price = 200;
        $coupon->time = 30; 
        $coupon->save();

        // type id 1 : ซาลอน
        // service id 3 : ย้อมสีผม
        // coupon id 5
        $coupon = new Coupon();
        $coupon->type_id = 1;
        $coupon->service_id = 3;
        $coupon->name = "ย้อมผม+กัดสีผม";
        $coupon->price = 2000;
        $coupon->time = 150; 
        $coupon->save();

        // coupon id 6
        $coupon = new Coupon();
        $coupon->type_id = 1;
        $coupon->service_id = 3;
        $coupon->name = "ย้อมผม+ทำไฮไลท์";
        $coupon->price = 800;
        $coupon->time = 150; 
        $coupon->save();

        // type id 1 : ซาลอน
        // service id 4 : ดัดผม
        // coupon id 7
        $coupon = new Coupon();
        $coupon->type_id = 1;
        $coupon->service_id = 4;
        $coupon->name = "ดัดผมดิจิตอล";
        $coupon->price = 3500;
        $coupon->time = 140; 
        $coupon->save();

        // type id 1 : ซาลอน
        // service id 5 : ยืดผม 
        // coupon id 8
        $coupon = new Coupon();
        $coupon->type_id = 1;
        $coupon->service_id = 5;
        $coupon->name = "ยืดวอลลุ่ม";
        $coupon->price = 4000;
        $coupon->time = 200; 
        $coupon->save();

        // type id 2 : นวด
        // service id 6 : นวดไทย
        // coupon id 9
        $coupon = new Coupon();
        $coupon->type_id = 2;
        $coupon->service_id = 6;
        $coupon->name = "นวดแผนไทย";
        $coupon->price = 500;
        $coupon->time = 90; 
        $coupon->save();

        // coupon id 10
        $coupon = new Coupon();
        $coupon->type_id = 2;
        $coupon->service_id = 6;
        $coupon->name = "นวดฝ่าเท้าด้วยน้ำมันมวย";
        $coupon->price = 100;
        $coupon->time = 30; 
        $coupon->save();

        // type id 2 : นวด
        // service id 7 : นวดอโรม่า
        // coupon id 11
        $coupon = new Coupon();
        $coupon->type_id = 2;
        $coupon->service_id = 7;
        $coupon->name = "นวดน้ำมันอโรม่า";
        $coupon->price = 1000;
        $coupon->time = 90; 
        $coupon->save();

        // type id 3 : ทำเล็บ
        // service id 8 : ทาเล็บเจล
        // coupon id 12
        $coupon = new Coupon();
        $coupon->type_id = 3;
        $coupon->service_id = 8;
        $coupon->name = "ทาสีเจลมือ";
        $coupon->price = 300;
        $coupon->time = 30; 
        $coupon->save();

        // coupon id 13
        $coupon = new Coupon();
        $coupon->type_id = 3;
        $coupon->service_id = 8;
        $coupon->name = "ทาสีเจลมือ + เท้า";
        $coupon->price = 500;
        $coupon->time = 60; 
        $coupon->save();

        // type id 3 : ทำเล็บ
        // service id 9 : ตัดแต่งเล็บ
        // coupon id 14
        $coupon = new Coupon();
        $coupon->type_id = 3;
        $coupon->service_id = 9;
        $coupon->name = "ตัดแต่งเล็บ";
        $coupon->price = 200;
        $coupon->time = 20; 
        $coupon->save();

        // type id 3 : ทำเล็บ
        // service id 10 : ต่อเล็บ
        // coupon id 15
        $coupon = new Coupon();
        $coupon->type_id = 3;
        $coupon->service_id = 10;
        $coupon->name = "ต่อเล็บอะคริลิค";
        $coupon->price = 1200;
        $coupon->time = 60; 
        $coupon->save();

        // coupon id 16
        $coupon = new Coupon();
        $coupon->type_id = 3;
        $coupon->service_id = 10;
        $coupon->name = "ต่อเล็บ PVC";
        $coupon->price = 1000;
        $coupon->time = 60; 
        $coupon->save();


        // type id 4 : บริการเสริมความงาม
        // service id 11 : โบท็อกซ์
        // coupon id 17
        $coupon = new Coupon();
        $coupon->type_id = 4;
        $coupon->service_id = 11;
        $coupon->name = "โบท็อกซ์ 20 ยูนิต";
        $coupon->price = 2000;
        $coupon->time = 20; 
        $coupon->save();

        // coupon id 18
        $coupon = new Coupon();
        $coupon->type_id = 4;
        $coupon->service_id = 11;
        $coupon->name = "โบท็อกซ์ 100 ยูนิต";
        $coupon->price = 6000;
        $coupon->time = 55; 
        $coupon->save();


        // type id 4 : บริการเสริมความงาม
        // service id 12 : เมโสแฟต
        // coupon id 19
        $coupon = new Coupon();
        $coupon->type_id = 4;
        $coupon->service_id = 12;
        $coupon->name = "เมโสแฟต 10 cc";
        $coupon->price = 990;
        $coupon->time = 30; 
        $coupon->save();

        // coupon id 20
        $coupon = new Coupon();
        $coupon->type_id = 4;
        $coupon->service_id = 12;
        $coupon->name = "เมโสแฟต 20 cc";
        $coupon->price = 2000;
        $coupon->time = 60; 
        $coupon->save();
        
        // type id 4 : บริการเสริมความงาม
        // service id 13 : ฟิลเลอร์
        // coupon id 21
        $coupon = new Coupon();
        $coupon->type_id = 4;
        $coupon->service_id = 13;
        $coupon->name = "ฟิลเลอร์";
        $coupon->price = 2000;
        $coupon->time = 60; 
        $coupon->save();


        // type id 4 : บริการเสริมความงาม
        // service id 14 : ร้อยไหม
        // coupon id 22
        $coupon = new Coupon();
        $coupon->type_id = 4;
        $coupon->service_id = 14;
        $coupon->name = "ร้อยไหมกระชับใบหน้า";
        $coupon->price = 5000;
        $coupon->time = 120; 
        $coupon->save();


        // type id 5 : แว็กซ์
        // service id 15 : แว็กซ์แขน ขา
        // coupon id 23
        $coupon = new Coupon();
        $coupon->type_id = 5;
        $coupon->service_id = 15;
        $coupon->name = "แว็กซ์แขน + ขา";
        $coupon->price = 800;
        $coupon->time = 60; 
        $coupon->save();

        // coupon id 24
        $coupon = new Coupon();
        $coupon->type_id = 5;
        $coupon->service_id = 15;
        $coupon->name = "แว็กซ์แขน";
        $coupon->price = 300;
        $coupon->time = 30; 
        $coupon->save();

        // coupon id 25
        $coupon = new Coupon();
        $coupon->type_id = 5;
        $coupon->service_id = 15;
        $coupon->name = "แว็กซ์ขา";
        $coupon->price = 500;
        $coupon->time = 30; 
        $coupon->save();


        // type id 5 : แว็กซ์
        // service id 16 : แว็กซ์จุดซ่อนเร้น
        // coupon id 26
        $coupon = new Coupon();
        $coupon->type_id = 5;
        $coupon->service_id = 16;
        $coupon->name = "Bikini Line Waxing";
        $coupon->price = 500;
        $coupon->time = 45; 
        $coupon->save();

         // coupon id 27
         $coupon = new Coupon();
         $coupon->type_id = 5;
         $coupon->service_id = 16;
         $coupon->name = "Triangle Waxing";
         $coupon->price = 800;
         $coupon->time = 45; 
         $coupon->save();

         // coupon id 28
         $coupon = new Coupon();
         $coupon->type_id = 5;
         $coupon->service_id = 16;
         $coupon->name = "Brazilian Waxing";
         $coupon->price = 1000;
         $coupon->time = 60; 
         $coupon->save();

        // type id 6 : ทรีทเมนต์ (แก้คำด้วย)
        // service id 17 : มาร์ก
        // coupon id 29
        $coupon = new Coupon();
        $coupon->type_id = 6;
        $coupon->service_id = 17;
        $coupon->name = "มาร์กหน้าด้วยโคลนภูเขาไฟบ้านยาง";
        $coupon->price = 600;
        $coupon->time = 90; 
        $coupon->save();


        // type id 6 : ทรีทเมนต์
        // service id 18 : นวดใบหน้า
        // coupon id 30
        $coupon = new Coupon();
        $coupon->type_id = 6;
        $coupon->service_id = 18;
        $coupon->name = "นวดใบหน้า + ลำคอ";
        $coupon->price = 500;
        $coupon->time = 60; 
        $coupon->save();


        // type id 7 : ศัลยกรรมเฉพาะทาง
        // service id 19 : เสริมจมูก
        // coupon id 31
        $coupon = new Coupon();
        $coupon->type_id = 7;
        $coupon->service_id = 19;
        $coupon->name = "เสริมจมูก ด้วยซิลิโคนเกรด Standard";
        $coupon->price = 18000;
        $coupon->time = 120; 
        $coupon->save();

        // coupon id 32
        $coupon = new Coupon();
        $coupon->type_id = 7;
        $coupon->service_id = 19;
        $coupon->name = "เสริมจมูก ด้วยซิลิโคนเกรด Premium";
        $coupon->price = 20000;
        $coupon->time = 120; 
        $coupon->save();

        // coupon id 33
        $coupon = new Coupon();
        $coupon->type_id = 7;
        $coupon->service_id = 19;
        $coupon->name = "เสริมจมูก ด้วยซิลิโคนเกรด Untra Premium";
        $coupon->price = 25000;
        $coupon->time = 120; 
        $coupon->save();

        // type id 7 : ศัลยกรรมเฉพาะทาง
        // service id 20 : เสริมคาง
        // coupon id 34
        $coupon = new Coupon();
        $coupon->type_id = 7;
        $coupon->service_id = 20;
        $coupon->name = "เสริมคางปรับโหวงเฮ้ง";
        $coupon->price = 25000;
        $coupon->time = 120; 
        $coupon->save();

        // type id 7 : ศัลยกรรมเฉพาะทาง
        // service id 21 : ทำตาสองชั้น
        // coupon id 35
        $coupon = new Coupon();
        $coupon->type_id = 7;
        $coupon->service_id = 21;
        $coupon->name = "ทำตาสองชั้น";
        $coupon->price = 30000;
        $coupon->time = 120; 
        $coupon->save();
    }
}
