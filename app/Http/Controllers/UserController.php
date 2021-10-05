<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{


    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users',
            'password' => 'required',
            'name' => 'required'
        ]);

        if($validator->fails()){
            $errors = $validator->errors();
            return [
                'status' => 'error',
                'data' => $errors,
            ];
        }else{
            $user = new User();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->password = $request->password;

            if($user->save()){
                return [
                    'status' => 'success',
                    'data' => $user,
                ];
            }else{
                return [
                    'status' => 'error',
                    'data' => "Can't register",
                ];
            }

        }
    }

}
