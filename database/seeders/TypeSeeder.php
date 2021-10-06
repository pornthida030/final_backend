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
        $type->type_image_url = "https://img.icons8.com/ios-glyphs/60/000000/barber-scissors.png";
        $type->save(); 

        //id 2
        $type = new Type();
        $type->name = "นวด";
        $type->type_image_url = "https://img.icons8.com/ios/50/000000/massage.png";
        $type->save(); 

        //id 3
        $type = new Type();
        $type->name = "ทำเล็บ";
        $type->type_image_url = "https://img.icons8.com/external-photo3ideastudio-lineal-photo3ideastudio/64/000000/external-nail-polish-beauty-photo3ideastudio-lineal-photo3ideastudio.png";
        $type->save(); 

        //id 4
        $type = new Type();
        $type->name = "เลเซอร์";
        $type->type_image_url = "https://img.icons8.com/external-wanicon-lineal-wanicon/64/000000/external-laser-surgery-medical-technology-wanicon-lineal-wanicon.png";
        $type->save(); 
    }
}
