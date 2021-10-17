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
                'name' => "ย้อมผม+กัดสีผม",
                'date' => "11-10-2021"
            ]
        ];
        $payment_record->totalPrice = 2000;
        $payment_record->save();

        // user1, user_id = 3
        $payment_record = new PaymentRecord();
        $payment_record->user_id = 3;
        $payment_record->items = [
            [
                'name' => "ย้อมผม+ทำไฮไลท์",
                'date' => "10-10-2021"
            ],
            [
                'name' => "ย้อมผม+กัดสีผม",
                'date' => "10-10-2021"
            ]
        ];
        $payment_record->totalPrice = 2800;
        $payment_record->save();

        // user2, user_id = 4
        $payment_record = new PaymentRecord();
        $payment_record->user_id = 4;
        $payment_record->items = [
            [
                'name' => "นวดฝ่าเท้าด้วยน้ำมันมวย",
                'date' => "11-10-2021"
            ]
        ];
        $payment_record->totalPrice = 100;
        $payment_record->save();

        // user2, user_id = 4
        $payment_record = new PaymentRecord();
        $payment_record->user_id = 4;
        $payment_record->items = [
            [
                'name' => "นวดแผนไทย",
                'date' => "10-10-2021"
            ],
            [
                'name' => "นวดฝ่าเท้าด้วยน้ำมันมวย",
                'date' => "10-10-2021"
            ]
        ];
        $payment_record->totalPrice = 600;
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
        $payment_record->totalPrice = 500;
        $payment_record->save();

        // user4, user_id = 6
        $payment_record = new PaymentRecord();
        $payment_record->user_id = 6;
        $payment_record->items = [
            [
                'name' => "ย้อมผม+กัดสีผม",
                'date' => "9-10-2021"
            ],
            [
                'name' => "ดัดผมแบบยูนาบี",
                'date' => "9-10-2021"
            ]
        ];
        $payment_record->totalPrice = 3000;
        $payment_record->save();

        // user4, user_id = 6
        $payment_record = new PaymentRecord();
        $payment_record->user_id = 6;
        $payment_record->items = [
            [
                'name' => "นวดแผนไทย",
                'date' => "8-10-2021",

            ]
        ];
        $payment_record->totalPrice = 500;
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
        $payment_record->totalPrice = 4000;
        $payment_record->save();

    }
}
