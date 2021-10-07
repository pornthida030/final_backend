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
        //ซาลอน type id 1
        // Service id 1
        $service = new Service();
        $service->type_id = 1;
        $service->name = "ย้อมผม";
        $service->description = "ย้อมผมสีสันสดใสด้วยผลิตภัณฑ์ธรรมชาติจากลุ่มแม่น้ำคงคา";
        $service->service_image_url = "https://sudsapda.com/app/uploads/2016/08/grey01.jpg"; 
        $service->save();

        //ซาลอน type id 1
        // Service id 2
        $service = new Service();
        $service->type_id = 1;
        $service->name = "ตัดผม";
        $service->description = "ตัดผมแบบพี่บอย เจ้าฮะ";
        $service->service_image_url = "https://ath2.unileverservices.com/wp-content/uploads/sites/9/2018/10/how-to-get-the-best-haircut-for-you.jpg"; 
        $service->save();

        //นวด type id 2
        // Service id 3
        $service = new Service();
        $service->type_id = 2;
        $service->name = "นวดฝ่าเท้า";
        $service->description = "นวดฝ่าเท้าแผนไทย";
        $service->service_image_url = "https://res.cloudinary.com/dk0z4ums3/image/upload/v1623213008/attached_image_th/2279-foot-massage.jpg"; 
        $service->save();

        //นวด type id 2
        // Service id 4
        $service = new Service();
        $service->type_id = 2;
        $service->name = "นวดหน้า";
        $service->description = "นวดหน้าแบบดาราสาวพี่นู๋รัตน์";
        $service->service_image_url = "https://static.posttoday.com/media/content/2015/10/21/95548CB1DB0D44B59323B49FF41CC759.jpg"; 
        $service->save();

        //ทำเล็บ type id 3
        // Service id 5
        $service = new Service();
        $service->type_id = 3;
        $service->name = "ทาเล็บเจล";
        $service->description = "ทาเล็บเจลมือเท้า";
        $service->service_image_url = "https://s.isanook.com/wo/0/rp/r/w728/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL3dvLzAvdWQvMzIvMTYxNDk3L25haWwuanBn.jpg"; 
        $service->save();

        //เลเซอร์ type id 4
        // Service id 6
        $service = new Service();
        $service->type_id = 4;
        $service->name = "เลเซอร์ใต้วงแขน";
        $service->description = "เลเซอร์กำจัดขนแบบถอดรากถอนโคน";
        $service->service_image_url = "https://www.doctorlifeclinic.com/application/views/uploads/article/20200212135001_img.jpg"; 
        $service->save();
        
    }
}
