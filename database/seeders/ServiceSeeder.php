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
        $service->service_image_url = "https://www.google.com/url?sa=i&url=http%3A%2F%2Fmeme.in.th%2Fmeme%2F2410%2F&psig=AOvVaw2b3WI-jToz_i9l2x5oFsZr&ust=1633639595679000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCNDS2PLTtvMCFQAAAAAdAAAAABAD"; 
        $service->save();

        //ซาลอน type id 1
        // Service id 2
        $service = new Service();
        $service->type_id = 1;
        $service->name = "ตัดผม";
        $service->description = "ตัดผมแบบพี่บอย เจ้าฮะ";
        $service->service_image_url = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fm.facebook.com%2F1900395883525331%2Fposts%2F2690177224547189%2F&psig=AOvVaw1OdQ63bXUJVnJb5lpZHimG&ust=1633639721891000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJDC4q_UtvMCFQAAAAAdAAAAABAD"; 
        $service->save();

        //นวด type id 2
        // Service id 3
        $service = new Service();
        $service->type_id = 2;
        $service->name = "นวดฝ่าเท้า";
        $service->description = "นวดฝ่าเท้าแผนไทย";
        $service->service_image_url = "https://www.google.com/url?sa=i&url=http%3A%2F%2Fwww.liekr.com%2Fpost01166671009032&psig=AOvVaw1OdQ63bXUJVnJb5lpZHimG&ust=1633639721891000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCLCNgNnUtvMCFQAAAAAdAAAAABAJ"; 
        $service->save();

        //นวด type id 2
        // Service id 4
        $service = new Service();
        $service->type_id = 2;
        $service->name = "นวดหน้า";
        $service->description = "นวดหน้าแบบดาราสาวพี่นู๋รัตน์";
        $service->service_image_url = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwebwanwan.com%2F103009&psig=AOvVaw1OdQ63bXUJVnJb5lpZHimG&ust=1633639721891000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCLCNgNnUtvMCFQAAAAAdAAAAABAP"; 
        $service->save();

        //ทำเล็บ type id 3
        // Service id 5
        $service = new Service();
        $service->type_id = 3;
        $service->name = "ทาเล็บเจล";
        $service->description = "ทาเล็บเจลมือเท้า";
        $service->service_image_url = "https://sites.google.com/site/netidol119/hnu-ratn"; 
        $service->save();

        //เลเซอร์ type id 4
        // Service id 6
        $service = new Service();
        $service->type_id = 4;
        $service->name = "เลเซอร์ใต้วงแขน";
        $service->description = "เลเซอร์กำจัดขนแบบถอดรากถอนโคน";
        $service->service_image_url = "https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.dek-d.com%2Fquiz%2Fsupertest%2F76763%2F&psig=AOvVaw1OdQ63bXUJVnJb5lpZHimG&ust=1633639721891000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCLCNgNnUtvMCFQAAAAAdAAAAABAb"; 
        $service->save();
        
    }
}
