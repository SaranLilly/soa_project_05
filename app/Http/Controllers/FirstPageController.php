<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class FirstPageController extends Controller
{
    public function FirstPage(Request $request){

        $title = ["BODYPUMP","BODY COMBAT","BODY COMBAT"];
        $detail = ["คลาสออกกำลังกายในรูปแบบของเวทเทรนนิง โดยมีการออกแบบโปรแกรมที่เฉพาะเจาะจงซึ่งช่วยในการเสริมสร้างความฟิต ความแข็งแรงของร่างกายทุกส่วน BODYPUMP จะใช้อุปกรณ์ในการออกกำลังกาย ได้แก่ บาเบล เวทเพลต โดยจะเคลื่อนไหวไปพร้อมกับเสียงดนตรี",
        "คลาสออกกำลังกายที่เน้นในเรื่องของการใช้พละกำลัง และพลังงานในการออกกำลังกาย ซึ่งได้รับแรงบันดาลใจมาจากศิลปะการต่อสู้หลายแขนง ได้แก่ คาราเต้, มวยสากล, เทควันโด, ไทชิ และมวยไทย โดยจะเคลื่อนไหวในรูปแบบแอโรบิค ไปพร้อมกับเสียงดนตรี ด้วยศิลปะการต่อสู้ต่าง ๆ",
        "คลาสการฝึกโยคะสุดพิเศษ ที่เจาะลึก 7 Technique คือ ท่ายืน ท่าทรงตัวตัวมือ ท่าโค้งหลัง ท่าบิดตัว ท่าพับตัว ท่าเปิดสะโพก และ ท่ากลับหัว ที่จะทำให้ทุกคนมีความเข้าใจ มีความสุขและได้ประโยชน์การฝึกโยคะมากขึ้น"];
        //echo "asas";
        //$picture =['../assets/images/amongus.png','cena.png','ku.png'];
        //$imagePath = public_path('\assets\images\amongus.png','\assets\images\cena.png','\assets\images\ku.png');
        $imagePath = public_path('\assets\images\amongus.png');
        $picture = file_get_contents($imagePath);

        $imagePath1 = public_path('\assets\images\cena.png');
        $picture1 = file_get_contents($imagePath1);

        $imagePath2 = public_path('\assets\images\ku.png');
        $picture2 = file_get_contents($imagePath2);
        
        return view('FirstPage',['title'=>$title,'detail'=>$detail,'picture'=>$picture,'picture1'=>$picture1,'picture2'=>$picture2]);
    }
}