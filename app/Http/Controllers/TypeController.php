<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Type;
use Illuminate\Support\Facades\Storage;

class TypeController extends Controller
{
    // แสดง Type ทั้งหมด
    public function getAllTypes()
    {
        $type = Type::all();

        foreach ($type as $papa) {
            $papa['service_count'] = $papa->services()->count();
            $papa['coupon_count'] = $papa->coupons()->count();

            $papa["type_image_url"] = env('APP_URL', false).Storage::url($papa["type_image_url"]);

            $papa['employees'] = $papa->employees($papa['id'])->get();
            foreach ($papa['employees'] as $employ) {
                $employ['name'] = $employ->user()->value('name');
                $employ['username'] = $employ->user()->value('username');
            }
        }
        return $type;
    }

    // get 1 type
    public function getTypeAndService($id)
    {
        $type = Type::find($id);
        $type["services"] = $type->services;
        $type["employees"] = $type->employees($id)->get();

        foreach ($type["employees"] as $employee) {
            $employee["name"] = $employee->user()->value('name');
        }

        foreach ($type["services"] as $yaya){
            $yaya["coupon_count"] = $yaya->coupons()->count();
        }
        return $type;
    }

    // create type
    public function createType(Request $request)
    {
        // validator
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'type_image_url' => 'required|image',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            return [
                "status" => "error",
                "error" => $errors
            ];
        } else {
            $type = new Type();
            $type->name = $request->name;

            // บันทึก path รูปภาพลง database type
            $type->type_image_url = 'image_upload/'.$request->type_image_url->hashName();

            // บันทึกรูปภาพลง storage/image_upload
            $request->type_image_url->store('image_upload','public');

            if ($type->save()) {
                $type["type_image_url"] = env('APP_URL', false).Storage::url('image_upload/'.$request->type_image_url->hashName());
                return $type;
            } else {
                return
                    [
                        "status" => "error",
                        "error" => "สร้างไม่ได้"
                    ];
            }
        }
    }

    // update, แก้ไข
    public function update(Request $request, $id)
    {
        $type = Type::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'type_image_url' => 'image',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            return [
                "status" => "error",
                "error" => $errors
            ];
        } else {
            $type->name = $request->name;

            if(!empty($request->type_image_url)){
                $type->type_image_url = 'image_upload/'.$request->type_image_url->hashName();
                $request->type_image_url->store('image_upload','public');
            }

            if ($type->save()) {
                $type['service_count'] = $type->services()->count();
                $type['coupon_count'] = $type->coupons()->count();

                if(!empty($request->type_image_url)){
                    $type["type_image_url"] = env('APP_URL', false).Storage::url('image_upload/'.$request->type_image_url->hashName());
                }else{
                    $type["type_image_url"] = env('APP_URL', false).Storage::url($type["type_image_url"]);
                }

                return $type;
            } else {
                return
                    [
                        "status" => "error",
                        "error" => "แก้ไขไม่ได้"
                    ];
            }
        }
    }

    // delete
    public function destroy($id)
    {
        $type = Type::findOrFail($id);
        $type->services()->delete();
        $type->coupons()->delete();

        if ($type->delete()) {
            Storage::disk('public')->delete($type['type_image_url']);
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
}
