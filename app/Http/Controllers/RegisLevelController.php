<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class RegisLevelController extends Controller
{
    //

    function regisLevel()
    {
        $response = Http::get('http://localhost:8096/soa_project_5/rest/services/memberLevel');
        $memberLevelList = $response->object();
        // dd($memberLevelList);
        return view('regisLevel.regisLevel', compact('memberLevelList'));
    }
    function addOrderLevel(Request $request)
    {
        $file = $request->file('file'); 
        dd($request->idMemberLevel);
        $response = Http::attach(
            'file',  // ชื่อ field ของไฟล์ใน API
            file_get_contents($file->path()),  // อ่านเนื้อหาของไฟล์
            $file->getClientOriginalName()  // ชื่อของไฟล์
        )->post('http://localhost:8096/soa_project_5/rest/services/memberLevel/upload');

 
    }
}
