<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class FirstPageController extends Controller
{
    // public function FirstPage(Request $request){

    //     $title = ["BODYPUMP","BODY COMBAT","BODY COMBAT"];
    //     $detail = ["คลาสออกกำลังกายในรูปแบบของเวทเทรนนิง โดยมีการออกแบบโปรแกรมที่เฉพาะเจาะจงซึ่งช่วยในการเสริมสร้างความฟิต ความแข็งแรงของร่างกายทุกส่วน BODYPUMP จะใช้อุปกรณ์ในการออกกำลังกาย ได้แก่ บาเบล เวทเพลต โดยจะเคลื่อนไหวไปพร้อมกับเสียงดนตรี",
    //     "คลาสออกกำลังกายที่เน้นในเรื่องของการใช้พละกำลัง และพลังงานในการออกกำลังกาย ซึ่งได้รับแรงบันดาลใจมาจากศิลปะการต่อสู้หลายแขนง ได้แก่ คาราเต้, มวยสากล, เทควันโด, ไทชิ และมวยไทย โดยจะเคลื่อนไหวในรูปแบบแอโรบิค ไปพร้อมกับเสียงดนตรี ด้วยศิลปะการต่อสู้ต่าง ๆ",
    //     "คลาสการฝึกโยคะสุดพิเศษ ที่เจาะลึก 7 Technique คือ ท่ายืน ท่าทรงตัวตัวมือ ท่าโค้งหลัง ท่าบิดตัว ท่าพับตัว ท่าเปิดสะโพก และ ท่ากลับหัว ที่จะทำให้ทุกคนมีความเข้าใจ มีความสุขและได้ประโยชน์การฝึกโยคะมากขึ้น"];
    //     //echo "asas";
    //     //$picture =['../assets/images/amongus.png','cena.png','ku.png'];
    //     //$imagePath = public_path('\assets\images\amongus.png','\assets\images\cena.png','\assets\images\ku.png');
    //     // $imagePath = public_path('\assets\images\amongus.png');
    //     // $picture = file_get_contents($imagePath);

    //     // $imagePath1 = public_path('\assets\images\cena.png');
    //     // $picture1 = file_get_contents($imagePath1);

    //     // $imagePath2 = public_path('\assets\images\ku.png');
    //     // $picture2 = file_get_contents($imagePath2);
    //     $imagePaths = [
    //         public_path('\assets\images\amongus.png'),
    //         public_path('\assets\images\cena.png'),
    //         public_path('\assets\images\ku.png')
    //     ];

    //     $picture = [];
    //     foreach ($imagePaths as $path) {
    //         $picture[] = file_get_contents($path);
    //     }

    //     return view('FirstPage',['title'=>$title,'detail'=>$detail,'picture'=>$picture]);
    //     //return view('FirstPage',['title'=>$title,'detail'=>$detail,'picture'=>$picture,'picture1'=>$picture1,'picture2'=>$picture2]);
    // }

    public function testGet()
    {
        $response = Http::get('http://localhost:8100/soa_project_5/rest/services/homepage');

        $ClassExercise = $response->object();
        //dd($ClassExercise);
        // dd(gettype($userList));
        // dd($userList);
        //   foreach($ClassExercise as $classex){
        //     echo  $classex->name."  ".$classex->detailClass."<br>";
        //  }
        return view('FirstPage', compact('ClassExercise'));
    }
    public function testPost()
    {
        $response = Http::post('http://localhost:8080/soa_project_5/rest/services/classex', [
            'name' => 'rushing',
            "detailClass" => "1212",
        ]);
        // dd($response->object());
    }
    public function testDelete()
    {

        $id = 29;
        $response = Http::delete('http://localhost:8096/soa_project_5/rest/services/classex/' . (string) $id);
        dd($response->body());
    }
    public function testPut()
    {
        $response = Http::put('http://localhost:8096/soa_project_5/rest/services/classex/28', [
            'name' => 'Rusher',
            "detailClass" => "s434",

        ]);
        dd($response->object());
    }
}
