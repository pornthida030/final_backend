<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // type 1
        // employee 1
        $employee = new Employee();
        $employee->type_id = 1;
        $employee->user_id = 1;
        $employee->save();

        // employee 2
        $employee = new Employee();
        $employee->type_id = 1;
        $employee->user_id = 8;
        $employee->save();

        // employee 3
        $employee = new Employee();
        $employee->type_id = 1;
        $employee->user_id = 9;
        $employee->save();

        // employee 4
        $employee = new Employee();
        $employee->type_id = 1;
        $employee->user_id = 10;
        $employee->save();

        // type 2
        // employee 5
        $employee = new Employee();
        $employee->type_id = 2;
        $employee->user_id = 11;
        $employee->save();

        // employee 6
        $employee = new Employee();
        $employee->type_id = 2;
        $employee->user_id = 12;
        $employee->save();

        // type 3
        // employee 7
        $employee = new Employee();
        $employee->type_id = 3;
        $employee->user_id = 12;
        $employee->save();

        // type 4
        // employee 8
        $employee = new Employee();
        $employee->type_id = 4;
        $employee->user_id = 8;
        $employee->save();

        // type 5
        // employee 9
        $employee = new Employee();
        $employee->type_id = 5;
        $employee->user_id = 10;
        $employee->save();

        // employee 10
        $employee = new Employee();
        $employee->type_id = 5;
        $employee->user_id = 11;
        $employee->save();

        // type 6
        // employee 11
        $employee = new Employee();
        $employee->type_id = 6;
        $employee->user_id = 8;
        $employee->save();

        // employee 12
        $employee = new Employee();
        $employee->type_id = 6;
        $employee->user_id = 12;
        $employee->save();

        // type 7
        // employee 13
        $employee = new Employee();
        $employee->type_id = 7;
        $employee->user_id = 11;
        $employee->save();
    }
}
