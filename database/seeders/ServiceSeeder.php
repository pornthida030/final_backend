<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ซาลอน type id : 1


        // Service id 1
        $service = new Service();
        $service->type_id = 1;
        $service->name = "สระผม";
        $service->description = "";
        $service->service_image_url = "image_upload/hair-washhair.jpg";
        $service->save();


        // Service id 2
        $service = new Service();
        $service->type_id = 1;
        $service->name = "ตัดผม";
        $service->description = "";
        $service->service_image_url = "image_upload/hair-haircut.jpg";
        $service->save();

        // Service id 3
        $service = new Service();
        $service->type_id = 1;
        $service->name = "ย้อมสีผม";
        $service->description = "";
        $service->service_image_url = "image_upload/hair-dyehair.jpg";
        $service->save();

        // Service id 4
        $service = new Service();
        $service->type_id = 1;
        $service->name = "ดัดผม";
        $service->description = "";
        $service->service_image_url = "image_upload/hair-curlhair.png";
        $service->save();


        // Service id 5
        $service = new Service();
        $service->type_id = 1;
        $service->name = "ยืดผม";
        $service->description = "";
        $service->service_image_url = "image_upload/hair-straighten.jpg";
        $service->save();

        // บริการนวด type id : 2
        // Service id 6
        $service = new Service();
        $service->type_id = 2;
        $service->name = "บริการนวดไทย";
        $service->description = "";
        $service->service_image_url = "image_upload/massage-thai.jpg";
        $service->save();

        // Service id 7
        $service = new Service();
        $service->type_id = 2;
        $service->name = "บริการนวดอโรม่า";
        $service->description = "";
        $service->service_image_url = "image_upload/massage-aroma.jpg";
        $service->save();

        // ทำเล็บ type id 3

        // Service id 8
        $service = new Service();
        $service->type_id = 3;
        $service->name = "ทาเล็บเจล";
        $service->description = "";
        $service->service_image_url = "image_upload/nail-gel.jpg";
        $service->save();

        // Service id 9
        $service = new Service();
        $service->type_id = 3;
        $service->name = "ตัดแต่งเล็บ";
        $service->description = "";
        $service->service_image_url = "image_upload/nail-cut.jpg";
        $service->save();

        // Service id 10
        $service = new Service();
        $service->type_id = 3;
        $service->name = "ต่อเล็บ";
        $service->description = "";
        $service->service_image_url = "image_upload/nail-extension.jpg";
        $service->save();


        // บริการเสริมความงาม (botox, meso fat, filler) type id 4
        // Service id 11
        $service = new Service();
        $service->type_id = 4;
        $service->name = "โบท็อกซ์";
        $service->description = "";
        $service->service_image_url = "image_upload/botox-botox.jpg";
        $service->save();

        // Service id 12
        $service = new Service();
        $service->type_id = 4;
        $service->name = "เมโสแฟต";
        $service->description = "";
        $service->service_image_url = "image_upload/botox-fat.jpg";
        $service->save();

        // Service id 13
        $service = new Service();
        $service->type_id = 4;
        $service->name = "ฟีลเลอร์";
        $service->description = "";
        $service->service_image_url = "image_upload/botox-filler.jpg";
        $service->save();

        // Service id 14
        $service = new Service();
        $service->type_id = 4;
        $service->name = "ร้อยไหม";
        $service->description = "";
        $service->service_image_url = "image_upload/botox-lifting.jpg";
        $service->save();

        // Waxing type id 5
        // Service id 15
        $service = new Service();
        $service->type_id = 5;
        $service->name = "แว็กซ์ขนแขน ขา";
        $service->description = "";
        $service->service_image_url = "image_upload/wax-waxing.jpg";
        $service->save();

        // Service id 15
        $service = new Service();
        $service->type_id = 5;
        $service->name = "แว็กซ์จุดซ่อนเร้น";
        $service->description = "";
        $service->service_image_url = "image_upload/wax-bikiniwax.jpg";
        $service->save();

        // Treatment type id 6
        // Service id 16
        $service = new Service();
        $service->type_id = 5;
        $service->name = "บริการมาร์ก";
        $service->description = "";
        $service->service_image_url = "image_upload/treatment-mask.jpg";
        $service->save();

        // Service id 17
        $service = new Service();
        $service->type_id = 5;
        $service->name = "บริการนวดใบหน้า";
        $service->description = "";
        $service->service_image_url = "image_upload/treatment-massageface.jpg";
        $service->save();

        // Treatment type id 7
        // Service id 18
        $service = new Service();
        $service->type_id = 5;
        $service->name = "เสริมจมูก";
        $service->description = "";
        $service->service_image_url = "image_upload/surgery-nose.jpg";
        $service->save();

        // Service id 19
        $service = new Service();
        $service->type_id = 5;
        $service->name = "เสริมคาง";
        $service->description = "";
        $service->service_image_url = "image_upload/surgery-chin.jpg";
        $service->save();


        // Service id 20
        $service = new Service();
        $service->type_id = 5;
        $service->name = "ทำตาสองชั้น";
        $service->description = "";
        $service->service_image_url = "image_upload/surgery-chin.jpg";
        $service->save();
    }
}
