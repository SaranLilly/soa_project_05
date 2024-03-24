<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class ClassTableController extends Controller
{
    public function classtable():View{

        $response = Http::get('http://localhost:8090/soa_project_5/rest/services/users');

        $userList = $response->object();

        $timeS = ["09:00:00","12:00:00"];
        $timeE = ["10:30:00","13:30:00"];
        $class = ["กังฟูไฟติ้ง","เป่า ยิง ฉุข"];
        $trainer = ["ใคร","ไม่รู้"];

       return view('classtable.classtable',['timeS'=>$timeS
                                        ,'timeE'=>$timeE
                                        ,'class'=>$class
                                        ,'trainer'=>$trainer],compact('userList')); 
    }

    function testGet()
    {
        $response = Http::get('http://localhost:8090/soa_project_5/rest/services/users');

        $userList = $response->object();
        // dd($userList);
        // dd(gettype($userList));
        // dd($userList); 
        // foreach($userList as $user){
        //     echo  $user->name."  ".$user->tel."<br>";
        // }
        return view('sdfsdf',compact('userList'));
    }
    function testPost()
    {
        $response = Http::post('http://localhost:8090/soa_project_5/rest/services/users', [
            'name' => 'THar', 'surname' => 'sdfsdfsdf', "tel" => "6666666666",
            "email" => "supitchgmail.com",
            "password" => "poq11xxxx",
            "role" => "adminxxxx"
        ]);
        // dd($response->object());
    }
    function testDelete()
    {

        $id = 14;
        $response = Http::delete('http://localhost:8090/soa_project_5/rest/services/users/' . (string)$id);
        dd($response->body());
    }
    function testPut()
    {
        $response = Http::put('http://localhost:8090/soa_project_5/rest/services/users/15', [
            'name' => 'BBG', 'surname' => 'wwww', "tel" => "6666666666",
            "email" => "supitchgmail.com",
            "password" => "poq11xxxx",
            "role" => "aasd"
        ]);
        dd($response->object());
    }
}
