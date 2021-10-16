<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //id 1
        $type = new Type();
        $type->name = "ซาลอน";
        $type->type_image_url = "image_upload/icon-salon.png";
        $type->save(); 

        //id 2
        $type = new Type();
        $type->name = "บริการนวด";
        $type->type_image_url = "image_upload/icon-massage.png";
        $type->save(); 

        //id 3
        $type = new Type();
        $type->name = "ทำเล็บ";
        $type->type_image_url = "image_upload/icon-nail-polish.png";
        $type->save(); 

        //id 4
        $type = new Type();
        $type->name = "บริการเสริมความงาม";
        $type->type_image_url = "image_upload/icon-botox.png";
        $type->save(); 

        // id 5
        $type = new Type();
        $type->name = "แว็กซ์";
        $type->type_image_url = "image_upload/icon-waxing.png";
        $type->save(); 

        // id 6
        $type = new Type();
        $type->name = "ทรีทเมนท์";
        $type->type_image_url = "image_upload/icon-treatment.png";
        $type->save(); 

        // id 7
        $type = new Type();
        $type->name = "ศัลยกรรมเฉพาะทาง";
        $type->type_image_url = "image_upload/icon-surgery.png";
        $type->save(); 
    }
}
