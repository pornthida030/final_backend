<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{

    public function getAllServices()
    {
        $service = Service::all();

        foreach ($service as $hehe) {
            $hehe['service_image_url'] = env('APP_URL', false) . Storage::url($hehe['service_image_url']);
        }
        return $service;
    }

    public function getServiceAndCoupons($id)
    {
        $service = Service::find($id);
        $service["coupons"] = $service->coupons;
        $service["reviews"] = $service->reviews;

        $service["service_image_url"] = env('APP_URL', false) . Storage::url($service["service_image_url"]);

        foreach ($service['reviews'] as $kaka) {
            $kaka['user_name'] = $kaka->user;
            $kaka['coupon_name'] = $kaka->coupon;
        }

        return $service;
    }

    public function createService(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'type_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'service_image_url' => 'required|image',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            return [
                "status" => "error",
                "error" => $errors
            ];
        } else {
            $service = new Service();
            $service->type_id = $request->type_id;
            $service->name = $request->name;
            $service->description = $request->description;

            $service->service_image_url = 'image_upload/' . $request->service_image_url->hashName();

            $request->service_image_url->store('image_upload', 'public');

            if ($service->save()) {
                $service["service_image_url"] = env('APP_URL', false) . Storage::url('image_upload/' . $request->service_image_url->hashName());

                return $service;
            } else {
                return
                    [
                        "status" => "error",
                        "error" => "สร้างไม่ได้"
                    ];
            }
        }
    }
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'service_image_url' => 'image'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            return [
                "status" => "error",
                "error" => $errors
            ];
        } else {
            $service->name = $request->name;
            $service->description = $request->description;
            if (!empty($request->service_image_url)) {
                $service->service_image_url = 'image_upload/' . $request->service_image_url->hashName();
                $request->service_image_url->store('image_upload', 'public');
            }

            if ($service->save()) {

                if (!empty($request->service_image_url)) {
                    $service["service_image_url"] = env('APP_URL', false) . Storage::url('image_upload/' . $request->service_image_url->hashName());
                } else {
                    $service["service_image_url"] = env('APP_URL', false) . Storage::url($service["service_image_url"]);
                }
                return $service;
            } else {
                return
                    [
                        "status" => "error",
                        "error" => "แก้ไขไม่ได้"
                    ];
            }
        }
    }

    public function destroy(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->coupons()->delete();
        if ($service->delete()) {
            Storage::disk('public')->delete($service['service_image_url']);


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
