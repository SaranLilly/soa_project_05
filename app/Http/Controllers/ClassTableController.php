<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class ClassTableController extends Controller
{
    public function classtable():View{

        $timeS = ["09:00:00","12:00:00"];
        $timeE = ["10:30:00","13:30:00"];
        $class = ["กังฟูไฟติ้ง","เป่า ยิง ฉุข"];
        $trainer = ["ใคร","ไม่รู้"];

       return view('classtable.classtable',['timeS'=>$timeS
                                        ,'timeE'=>$timeE
                                        ,'class'=>$class
                                        ,'trainer'=>$trainer]); 
    }
}
