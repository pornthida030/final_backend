<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function getAllServices(){
        $service = Service::all();
        return $service;
    }

    public function getServiceAndCoupons($id){
        $service = Service::find($id);
        $service["coupons"] = $service->coupons;
        $service["reviews"] = $service->reviews;

        foreach ($service['reviews'] as $kaka){
            $kaka['user_name'] = $kaka->user;
            $kaka['coupon_name'] = $kaka->coupon;

        }

        return $service;
    }

    public function createService(Request $request){
        $validator = Validator::make($request->all(), [
            'type_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'service_image_url' => 'required'
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();

            return [
                "status"=> "error", 
                "error" => $errors
            ];
        } else {
            $service = new Service();
            $service->type_id = $request->type_id;
            $service->name = $request->name;
            $service->description = $request->description;
            $service->service_image_url = $request->service_image_url;

            if ($service->save()){
                return $service;
            }else {
                return
                [
                    "status"=> "error", 
                    "error" => "สร้างไม่ได้"
                ];
            }
        }
    }
            public function update(Request $request, $id){
                $service = Service::findOrFail($id);
                $validator = Validator::make($request->all(), [
                    'name' => 'required',
                    'description' => 'required',
                    'service_image_url' => 'required'
                ]);
    
                if ($validator->fails()) {
                    $errors = $validator->errors();
        
                    return [
                        "status"=> "error", 
                        "error" => $errors
                    ];
                } else {
                    $service->name = $request->name;
                    $service->description = $request->description;
                    $service->service_image_url = $request->service_image_url;

                    if ($service->save()){
                        return $service;
                    }else {
                        return
                        [
                            "status"=> "error", 
                            "error" => "แก้ไขไม่ได้"
                        ];
                    }
                }   
            }
    
            public function destroy(Request $request, $id)
            {
                $service = Service::findOrFail($id);
                if ( $service->delete() ) {
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
