<?php

namespace App\Http\Controllers;

use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    // แสดง Get ทั้งหมด
    public function getAllUsers()
    {
        $user = User::all();
        return $user;
    }

    // get 1 type
    public function getUser($id)
    {
        $user = User::find($id);
        return $user;
    }

    // GET /user/me -- ส่งข้อมูล user ตาม id ใน token
    public function getMe(Request $request)
    {
        $token = $request->header('Authorization');

        $credentials = JWT::decode($token, env('JWT_SECRET'), ['HS256']);

        $user = User::find($credentials->sub); // sub เนื้อหา token จะให้มันเป็น user id เพื่อที่จะได้รู้ว่า token นี้เป็นของใคร
    
        $user['user_coupon'] = $user->user_coupons;
        foreach ($user['user_coupon'] as $zaza){
            $zaza['service'] = $zaza->service;
            $zaza['coupon'] = $zaza->coupon;
            $zaza['employee'] = $zaza->employee;
        }

        return $user;
    }

    // POST Add User -- for admin
    public function addUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users',
            'password' => 'required',
            'name' => 'required',
            'role' => 'required'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return [
                "status" => "error",
                "error" => $errors
            ];
        } else {
            $user = new User();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->password = Hash::make($request->password);
            $user->role = $request->role;

            if ($user->save()) {
                return [
                    'status' => 'success',
                    'data' => $user,
                ];
            } else {
                return [
                    'status' => 'error',
                    'data' => "Can't add user",
                ];
            }
        }
    }

    // PUT /user/{id} -- แก้ไขข้อมูลของ user ตาม parameter ที่ส่งมา โดย จำเป็นต้องมี permission admin เท่านั้น
    public function updateUser(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'role' => 'required'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return [
                "status" => "error",
                "error" => $errors
            ];
        } else {
            $user->name = $request->name;
            if (!empty($request->password)) {
                $user->password = Hash::make($request->password);
            }
            $user->role = $request->role;

            if ($user->save()) {
                return $user;
            } else {
                return
                    [
                        "status" => "error",
                        "error" => "แก้ไขไม่ได้"
                    ];
            }
        }
    }
    // PUT /user/me -- แก้ไขข้อมูลของตัวเอง
    public function updateMe(Request $request)
    {
        $token = $request->header('Authorization');
        $credentials = JWT::decode($token, env('JWT_SECRET'), ['HS256']);
        $user = User::find($credentials->sub);

        $validator = Validator::make($request->all(), [
            'oldpassword' => 'required',
            'newpassword' => 'required'
        ]);


        if ($validator->fails()) {
            $errors = $validator->errors();

            return [
                "status" => "error",
                "error" => $errors
            ];
        } else {
            if (Hash::check($request->oldpassword, $user->password)) {
                $user->password = Hash::make($request->newpassword);
                if ($user->save()) {
                    return $user;
                } else {
                    return
                        [
                            "status" => "error",
                            "error" => "แก้ไขไม่ได้"
                        ];
                }
            } else {
                return
                    [
                        "status" => "error",
                        "error" => "พาสเวิร์ดเก่าไม่ตรง"
                    ];
            }
        }
    }
    // delete
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->reviews()->delete();
        $user->user_coupons()->delete();
        $user->payment_records()->delete();

        if ($user->delete()) {
            return [
                "status" => "success"
            ];
        } else {
            return [
                "status" => "error",
                "error" => "ลบไม่ได้"
            ];
        }
    }

    // login
    public function login(Request $request)
    {
        $user = User::where('username', $request->username)->first();
        if (!empty($user)) {
            if(Hash::check($request->password, $user->password)){
                $token = $this->jwt($user);
                $user["api_token"] = $token;
                return [
                    "user"=>$user,
                    "status"=>"success"
                ];
            }
            else{
                return [
                    "status"=>"error",
                    "error"=>"Password ไม่ถูกต้อง"
                ];
            }
            
        }else {
            return [ 
                "status"=> "error", 
                "error" => "ไม่พบ Username นี้"
            ];
        }
    }

    // register
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users',
            'password' => 'required',
            'name' => 'required'
        ]);

        if($validator->fails()){
            $errors = $validator->errors();
            return [
                'status' => 'error',
                'error' => $errors,
            ];
        }else{
            $user = new User();
            $user->name = $request->name;
            $user->username = $request->username;
            $user->password = Hash::make($request->password);

            if($user->save()){
                $token = $this->jwt($user);
                $user['api_token'] = $token;
                return [
                    'status' => 'success',
                    'user' => $user,
                ];
            }else{
                return [
                    'status' => 'error',
                    'error' => "Can't register",
                ];
            }

        }
    }

    protected function jwt($user)
    {
        $payload = [
            'iss' => "gowasabi-jwt", // Issuer of the token
            'sub' => $user->id, // Subject of the token
            'iat' => time(), // Time when JWT was issued.
            'exp' => time() + env('JWT_EXPIRE_HOUR') * 60 * 60, // Expiration time
        ];
        return JWT::encode($payload, env('JWT_SECRET'));
    }
}

