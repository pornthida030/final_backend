<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    // เพิ่มพนักงานลง Type
    public function AddEmployeeToType(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type_id' => 'required',
            'username' => 'required',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            return [
                "status"=> "error", 
                "error" => $errors
            ];
        } else {

            $user = User::where('username', '=', $request->username)->first();

            if (empty($user)){
                return
                [
                    "status"=> "error", 
                    "error" => "ไม่พบท่านนี้ในระบบ"
                ];
            }

            if(Employee::where('type_id', '=', $request->type_id)->where('user_id', '=', $user['id'])->first()){
                return
                [
                    "status"=> "error", 
                    "error" => "มีพนักงานท่านนี้อยู่แล้ว"
                ];
            }

            if ($user['role'] == "USER" || $user['role'] == "ADMIN") {
                return
                [
                    "status"=> "error", 
                    "error" => "ท่านนี้ไม่ใช่พนักงาน"
                ];
            }
            
            $employee = new Employee();
            $employee->type_id = $request->type_id;
            $employee->user_id = $user['id'];

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
