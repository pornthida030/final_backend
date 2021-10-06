<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // user id 1
        $user = new User();
        $user->role = "ADMIN";
        $user->name = "Noo rat";
        $user->username = "admin";
        $user->password = Hash::make("password");
        $user->save();

        // user id 2
        $user = new User();
        $user->role = "USER";
        $user->name = "Bankky";
        $user->username = "user";
        $user->password = Hash::make("password");
        $user->save();

    }
}
