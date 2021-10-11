<?php

namespace Database\Seeders;

use App\Models\DiscountCoupon;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypeSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(CouponSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(UserCouponSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PaymentRecordSeeder::class);
        $this->call(DiscountCouponSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
