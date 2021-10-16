<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\PaymentRecord;

class PaymentRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment_record = new PaymentRecord();
        $payment_record->user_id = 2;
        $payment_record->items = [
            [
                'name' => "ย้อมผม+กัดสีผม 1 รอบ",
                'date' => "10-10-2021"
            ]
        ];
        $payment_record->save();

        $payment_record = new PaymentRecord();
        $payment_record->user_id = 2;
        $payment_record->items = [
            [
                'name' => "ย้อมผม+กัดสีผม ด้วยผลิตภัณฑ์ออแกนิก",
                'date' => "11-10-2021"
            ],
            [
                'name' => "ย้อมผม+กัดสีผม 1 รอบ",
                'date' => "11-10-2021"
            ]
        ];
        $payment_record->save();

//        $payment_record = new PaymentRecord();
//        $payment_record->user_id = 2;
//        $payment_record->service_id = 1;
//        $payment_record->coupon_id = 1;
//        $payment_record->count = 2;
//        $payment_record->save();
//
//        $payment_record = new PaymentRecord();
//        $payment_record->user_id = 2;
//        $payment_record->service_id = 2;
//        $payment_record->coupon_id = 2;
//        $payment_record->count = 1;
//        $payment_record->save();
//
//        $payment_record = new PaymentRecord();
//        $payment_record->user_id = 2;
//        $payment_record->service_id = 1;
//        $payment_record->coupon_id = 3;
//        $payment_record->count = 1;
//        $payment_record->save();
    }
}
