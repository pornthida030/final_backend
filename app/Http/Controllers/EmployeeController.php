<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    // เพิ่มพนักงานลง Type
    public function AddEmployeeToType(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type_id' => 'required',
            'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            return [
                "status"=> "error", 
                "error" => $errors
            ];
        } else {
            $employee = new Employee();
            $employee->type_id = $request->type_id;
            $employee->user_id = $request->user_id;

            if ($employee->save()){
                return $employee;
            }else {
                return
                [
                    "status"=> "error", 
                    "error" => "ไม่สามารถเพิ่มพนักงานลงไปในประเภทนี้ได้"
                ];
            }
        }
    }

    // ลบพนักงานออกจาก Type โดย $id คือ id ของตัว Employee
    public function RemoveEmployeeFromType($id)
    {
        $employee = Employee::findOrFail($id);
        if ( $employee->delete() ) {
            return [ 
                "status"=> "success" 
            ];
        } else {
            return [ 
                "status"=> "error", 
                "error" => "ลบไม่ได้"
            ];
        }
    }
}
