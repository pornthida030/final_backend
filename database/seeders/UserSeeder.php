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
        // Admin for test
        // user id 1
        $user = new User();
        $user->role = "ADMIN";
        $user->name = "Admin1";
        $user->username = "admin";
        $user->password = Hash::make("password");
        $user->save();

        // user id 2
        $user = new User();
        $user->role = "ADMIN";
        $user->name = "Admin1";
        $user->username = "admin";
        $user->password = Hash::make("password");
        $user->save();

        // User for test
        // user id 3
        $user = new User();
        $user->role = "USER";
        $user->name = "User1";
        $user->username = "user1";
        $user->password = Hash::make("password");
        $user->save();

        // user id 4
        $user = new User();
        $user->role = "USER";
        $user->name = "User2";
        $user->username = "user2";
        $user->password = Hash::make("password");
        $user->save();

        // user id 5
        $user = new User();
        $user->role = "USER";
        $user->name = "User3";
        $user->username = "user3";
        $user->password = Hash::make("password");
        $user->save();

        // user id 6
        $user = new User();
        $user->role = "USER";
        $user->name = "User4";
        $user->username = "user4";
        $user->password = Hash::make("password");
        $user->save();

        // user id 7
        $user = new User();
        $user->role = "USER";
        $user->name = "User5";
        $user->username = "user5";
        $user->password = Hash::make("password");
        $user->save();

        // Employee for test
        // user id 8
        $user = new User();
        $user->role = "EMPLOYEE";
        $user->name = "ช่างมะนาว";
        $user->username = "employee1";
        $user->password = Hash::make("password");
        $user->save();

        // user id 9
        $user = new User();
        $user->role = "EMPLOYEE";
        $user->name = "ช่างหยก";
        $user->username = "employee2";
        $user->password = Hash::make("password");
        $user->save();


        // user id 10
        $user = new User();
        $user->role = "EMPLOYEE";
        $user->name = "ช่างเฟิร์ส";
        $user->username = "employee3";
        $user->password = Hash::make("password");
        $user->save();


        // user id 11
        $user = new User();
        $user->role = "EMPLOYEE";
        $user->name = "ช่างตาต้า";
        $user->username = "employee4";
        $user->password = Hash::make("password");
        $user->save();


        // user id 12
        $user = new User();
        $user->role = "EMPLOYEE";
        $user->name = "ช่างมุก";
        $user->username = "employee5";
        $user->password = Hash::make("password");
        $user->save();
    }
}
