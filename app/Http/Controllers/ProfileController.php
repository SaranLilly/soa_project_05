<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;

class ProfileController extends Controller
{
    public function index(): View
    {
        $name = ["สมศรี"];
        $surname = ["มีใจ"];
        $tel = ["0617382378"];
        $email = ["somsri.m@gmail.com"];
        $member_level = ["Premium"];
        $date_order = ["2024-03-23"];
        $date_exp = ["2024-03-30"];
        $note = ["ใช้คิวอาร์ปลอม"];
        //dd([$name, $surname, $tel, $email, $member_level, $date_order, $date_exp, $note]);

        return view('profile.index', ['name' => $name, 'surname' => $surname, 'tel' => $tel, 'email' => $email,
            'member_level' => $member_level, 'date_order' => $date_order, 'date_exp' => $date_exp, 'note' => $note]);
    }
    // public function testGet()
    // {
    //     $response = Http::get('http://localhost:8087/soa_project_5/rest/services/profiles/getProfile');

    //     $profile = $response->object();
    //     //dd($ClassExercise);
    //     // dd(gettype($userList));
    //     // dd($userList);
    //     // foreach($userList as $user){
    //     //     echo  $user->name."  ".$user->tel."<br>";
    //     // }
    //     return view('profile', compact('profile'));
    // }
    public function testGet()
    {
        $response = Http::get('http://localhost:8087/soa_project_5/rest/services/profiles/getProfile');

        $profile = $response->object();
        // dd($profile);
        return view('profile.index', compact('profile'));
    }

    public function testPost()
    {
        $response = Http::post('http://localhost:8096/soa_project_5/rest/services/users', [
            'name' => 'THar', 'surname' => 'sdfsdfsdf', "tel" => "6666666666",
            "email" => "supitchgmail.com",
            "password" => "poq11xxxx",
            "role" => "adminxxxx",
        ]);
        // dd($response->object());
    }
    public function testDelete()
    {

        $id = 29;
        $response = Http::delete('http://localhost:8096/soa_project_5/rest/services/users/' . (string) $id);
        dd($response->body());
    }
    public function testPut()
    {
        $response = Http::put('http://localhost:8096/soa_project_5/rest/services/users/28', [
            'name' => 'THar', 'surname' => 'sdfsdfsdf', "tel" => "6666666666",
            "email" => "supitchgmail.com",
            "password" => "poq11xxxx",
            "role" => "aasd",
        ]);
        dd($response->object());
    }
}
