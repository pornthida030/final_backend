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
        $service->description = "บริการสระผมแบบพรีเมียมด้วยน้ำนมวัวนำเข้าจากนิวซีแลนด์ และบำรุงเส้นผมด้วยผลิตภัณฑ์ออแกนิก";
        $service->service_image_url = "image_upload/hair-washhair.jpg";
        $service->save();


        // Service id 2
        $service = new Service();
        $service->type_id = 1;
        $service->name = "ตัดผม";
        $service->description = "บริการตัดผมโดยช่างมือ 1 ของตำบลบ้านยาง การันตีฝีมือการตัดโดยรางวัลประกวดตัดผมประจำตำบล 4 ปีซ้อน";
        $service->service_image_url = "image_upload/hair-haircut.jpg";
        $service->save();

        // Service id 3
        $service = new Service();
        $service->type_id = 1;
        $service->name = "ย้อมสีผม";
        $service->description = "บริการย้อมผม โดยใช้ยาย้อมผมที่อ่อนโยนต่อหนังศรีษะและเส้นผม ผมจะไม่แห้งและไม่เสียถึง 99.99%";
        $service->service_image_url = "image_upload/hair-dyehair.jpg";
        $service->save();

        // Service id 4
        $service = new Service();
        $service->type_id = 1;
        $service->name = "ดัดผม";
        $service->description = "บริการดัดผม ใช้เครื่องลอนผมนำเข้าจากสหรัฐอเมริกา ผมจะไม่ชี้ ไม่ฟู และไม่ดีด พร้อมทั้งทำทรีทเมนต์นมแกะและสามารถกำหนดความลอนของผมได้ตามที่ต้องการ";
        $service->service_image_url = "image_upload/hair-curlhair.png";
        $service->save();


        // Service id 5
        $service = new Service();
        $service->type_id = 1;
        $service->name = "ยืดผม";
        $service->description = "ยืดผมถาวรอยู่ได้นานถึง 1 ปี โดยใช้น้ำยาออแกนิกสูตรพิเศษจากทางร้าน ทำให้ผมของท่านตรงและเงางามได้ตลอดทั้งปี";
        $service->service_image_url = "image_upload/hair-straighten.jpg";
        $service->save();

        // บริการนวด type id : 2
        // Service id 6
        $service = new Service();
        $service->type_id = 2;
        $service->name = "บริการนวดไทย";
        $service->description = "นวดแผนไทยโดยหมอนวดเฉพาะทาง จบหลักสูตรการนวดแผนไทยจากวัดโพธิ์โดยตรง สามารถนวดกดจุดช่วยบรรเทาอาการปวดตามบริเวณต่างๆได้อย่างแม่นยำ";
        $service->service_image_url = "image_upload/massage-thai.jpg";
        $service->save();

        // Service id 7
        $service = new Service();
        $service->type_id = 2;
        $service->name = "บริการนวดอโรม่า";
        $service->description = "นวดอโรม่าด้วยน้ำมันหอมระเหย Aromatherapy จากแบรนด์ Jo Malone ช่วยบรรเทาอาการเหนื่อย และทำให้ผ่อนคลายมากขึ้น ลดอาการอ่อนล้า อ่อนเพลียของกล้ามเนื้อได้ดีเยี่ยม";
        $service->service_image_url = "image_upload/massage-aroma.jpg";
        $service->save();

        // ทำเล็บ type id 3

        // Service id 8
        $service = new Service();
        $service->type_id = 3;
        $service->name = "ทาเล็บเจล";
        $service->description = "บริการทาเล็บเจลสามารถเลือกสีได้ไม่จำกัดด้วยผลิตภัณฑ์คุณภาพที่ได้รับการรับรอง โดยมีสีให้เลือกมากกว่า 100 สี และสามารถเพ้นต์เล็บได้มากกว่า 500 รูปแบบ";
        $service->service_image_url = "image_upload/nail-gel.jpg";
        $service->save();

        // Service id 9
        $service = new Service();
        $service->type_id = 3;
        $service->name = "ตัดแต่งเล็บ";
        $service->description = "บริการตัดแต่งเล็บด้วยช่างมากฝีมือและชำนาญการ ช่วยดีไซน์ตัดแต่งทั้งเล็บมือและเล็บเท้าให้เข้ากับบุคลิก เสริมสร้างภาพลักษณ์ที่ดี";
        $service->service_image_url = "image_upload/nail-cut.jpg";
        $service->save();

        // Service id 10
        $service = new Service();
        $service->type_id = 3;
        $service->name = "ต่อเล็บ";
        $service->description = "บริการต่อเล็บทุกประเภทไม่ว่าจะเป็น PVC, สำเร็จรูป, อะคริลิคหรือแบบเจล โดยสามารถเลือกความยาวเล็บได้ตามใจชอบ ไม่จำกัดความยาวและรูปทรงของเล็บ";
        $service->service_image_url = "image_upload/nail-extension.jpg";
        $service->save();


        // บริการเสริมความงาม (botox, meso fat, filler) type id 4
        // Service id 11
        $service = new Service();
        $service->type_id = 4;
        $service->name = "โบท็อกซ์";
        $service->description = "โบท็อกซ์นำเข้าจากเกาหลี เกรดพรีเมียมได้รับการรับรองมาตราฐานจากสหรัฐอเมริกา เห็นผลตั้งแต่ครั้งแรกที่ฉีด ช่วยลดรอยย่นต่างๆได้อย่างเป็นธรรมชาติ";
        $service->service_image_url = "image_upload/botox-botox.jpg";
        $service->save();

        // Service id 12
        $service = new Service();
        $service->type_id = 4;
        $service->name = "เมโสแฟต";
        $service->description = "สลายไขมันด้วยเมโสคุณภาพตัวยานำเข้าจากประเทศเกาหลี ได้รับการรับรองจากอย. ปลอดภัย 100% เห็นผลภายใน 5 วัน";
        $service->service_image_url = "image_upload/botox-fat.jpg";
        $service->save();

        // Service id 13
        $service = new Service();
        $service->type_id = 4;
        $service->name = "ฟีลเลอร์";
        $service->description = "บริการฉีดฟีลเลอร์ ช่วยเติมเต็มส่วนที่มีริ้วรอยให้กลับมากระชับเป็นธรรมชาติ โดยทีมแพทย์เฉพาะทางมือหนึ่งของตำบลบ้านยาง";
        $service->service_image_url = "image_upload/botox-filler.jpg";
        $service->save();

        // Service id 14
        $service = new Service();
        $service->type_id = 4;
        $service->name = "ร้อยไหม";
        $service->description = "บริการร้อยไหม โดยใช้ไหมละลายนำเข้า เกรดพรีเมียม ยกกระชับผิวที่เหี่ยวย่น ให้กลับมาเต่งตึงเหมือนสาวแรกแย้ม";
        $service->service_image_url = "image_upload/botox-lifting.jpg";
        $service->save();

        // Waxing type id 5
        // Service id 15
        $service = new Service();
        $service->type_id = 5;
        $service->name = "แว็กซ์ขนแขน ขา";
        $service->description = "แว็กซ์ขนแขน ขาด้วยตัวแว็กซ์เกรดพรีเมียม ไม่ระคายเคืองผิวหนัง ไม่เป็นขนคุดพร้อมทั้งประคบเย็นและทาเจลว่านหางจระเข้ให้หลังบริการเพื่อลดอาการระคายเคือง";
        $service->service_image_url = "image_upload/wax-waxing.jpg";
        $service->save();

        // Service id 16
        $service = new Service();
        $service->type_id = 5;
        $service->name = "แว็กซ์จุดซ่อนเร้น";
        $service->description = "แว็กซ์จุดซ่อนเร้นด้วยแว็กซ์น้ำผึ้งเดือน 5 แท้จากป่าอะเมซอน ช่วยลดการอักเสบ ไม่ระคายเคือง อ่อนโยนต่อจุดซ่อนเร้น พร้อมทั้งบริการประคบเย็นและทาว่านหางจระเข้ฟรี";
        $service->service_image_url = "image_upload/wax-bikiniwax.jpg";
        $service->save();

        // Treatment type id 6
        // Service id 17
        $service = new Service();
        $service->type_id = 6;
        $service->name = "บริการมาร์ก";
        $service->description = "บริการมาร์กหน้าด้วยโคลนภูเขาไฟจากตำบลบ้านยางคุณภาพเทียบเท่ากับโคลนจากเทือกเขาไฟเกาหลี ช่วยฟื้นฟูผิวหนังให้สม่ำเสมอและกระจ่างใส ทำให้ผิวดูอ่อนเยาว์เหมือนเด็กแรกเกิด";
        $service->service_image_url = "image_upload/treatment-mask.jpg";
        $service->save();

        // Service id 18
        $service = new Service();
        $service->type_id = 6;
        $service->name = "บริการนวดใบหน้า";
        $service->description = "บริการนวดใบหน้าด้วยหินกัวซาจากแบรนด์ดัง ทำให้หน้าเรียว ยกกระชับเต่งตึง ทำให้ระบบหมุนเวียนเลือดดีขึ้นและทำให้ลูกค้ารู้สึกผ่อนคลาย";
        $service->service_image_url = "image_upload/treatment-massageface.jpeg";
        $service->save();

        // ศัลยกรรม type id 7
        // Service id 19
        $service = new Service();
        $service->type_id = 7;
        $service->name = "เสริมจมูก";
        $service->description = "เสริมจมูกโดยศัลยแพทย์ชั้นนำมือ 1 ของตำบล การันตีการเสริมจมูกกว่า 100 แท่ง คุณหมอเหลาซิลิโคนเองทุกเคสเพื่อให้เข้ากับรูปหน้าแต่ละคน เนียนเหมือนธรรมชาติ";
        $service->service_image_url = "image_upload/surgery-nose.jpg";
        $service->save();

        // Service id 20
        $service = new Service();
        $service->type_id = 7;
        $service->name = "เสริมคาง";
        $service->description = "เสริมคางปรับแก้โหวงเฮ้งให้เข้ากับรูปหน้าและช่วยเสริมดวง โดยคุณหมอจะวิเคราะห์หาทรงคางที่ดีที่สุดที่เสริมโหวงเฮ้งใบหน้า ดูดีพร้อมกับดวงดีหาได้ที่นี่เท่านั้น";
        $service->service_image_url = "image_upload/surgery-chin.jpg";
        $service->save();


        // Service id 21
        $service = new Service();
        $service->type_id = 7;
        $service->name = "ทำตาสองชั้น";
        $service->description = "ทำตาสองชั้น ช่วยเพิ่มความมั่นใจให้กับลูกค้าทุกท่าน ไม่ว่าจะเป็นสองชั้นธรรมดาหรือตาทรง Foxy eyes ก็สามารถทำได้เนียนอย่างเป็นธรรมชาติ ปรับเปลี่ยนให้ดูดียิ่งขึ้นเหมือนแม่ให้มา";
        $service->service_image_url = "image_upload/surgery-chin.jpg";
        $service->save();
    }
}
