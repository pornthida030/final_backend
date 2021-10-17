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
        // user1, user_id = 3
        $payment_record = new PaymentRecord();
        $payment_record->user_id = 3;
        $payment_record->items = [
            [
                'name' => "ย้อมผม+กัดสีผม 1 รอบ",
                'date' => "10-10-2021"
            ]
        ];
        $payment_record->save();

        // user1, user_id = 3
        $payment_record = new PaymentRecord();
        $payment_record->user_id = 3;
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

        // user2, user_id = 4
        $payment_record = new PaymentRecord();
        $payment_record->user_id = 4;
        $payment_record->items = [
            [
                'name' => "ย้อมผม+กัดสีผม ด้วยผลิตภัณฑ์ออแกนิก",
                'date' => "9-10-2021"
            ],
            [
                'name' => "ย้อมผม+กัดสีผม 1 รอบ",
                'date' => "9-10-2021"
            ]
        ];
        $payment_record->save();

        // user2, user_id = 4
        $payment_record = new PaymentRecord();
        $payment_record->user_id = 4;
        $payment_record->items = [
            [
                'name' => "นวดแผนไทย",
                'date' => "11-10-2021"
            ],
            [
                'name' => "นวดฝ่าเท้าด้วยน้ำมันมวย",
                'date' => "11-10-2021"
            ]
        ];
        $payment_record->save();

        // user3, user_id = 5
        $payment_record = new PaymentRecord();
        $payment_record->user_id = 5;
        $payment_record->items = [
            [
                'name' => "นวดแผนไทย",
                'date' => "8-10-2021"
            ]
        ];
        $payment_record->save();

        // user4, user_id = 6
        $payment_record = new PaymentRecord();
        $payment_record->user_id = 6;
        $payment_record->items = [
            [
                'name' => "ย้อมผม+กัดสีผม",
                'date' => "8-10-2021"
            ],
            [
                'name' => "ดัดผมดิจิตอล",
                'date' => "8-10-2021"
            ]
        ];
        $payment_record->save();

        // user4, user_id = 6
        $payment_record = new PaymentRecord();
        $payment_record->user_id = 6;
        $payment_record->items = [
            [
                'name' => "นวดแผนไทย",
                'date' => "9-10-2021"
            ]
        ];
        $payment_record->save();

        // user5, user_id = 7
        $payment_record = new PaymentRecord();
        $payment_record->user_id = 7;
        $payment_record->items = [
            [
                'name' => "ยืดวอลลุ่ม",
                'date' => "9-10-2021"
            ]
        ];
        $payment_record->save();

    }
}
