<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class ReserveController extends Controller
{
    

    public function index():View{

        $date = ["2024-03-25","2024-03-30"];
        $time = ["13:00:00","12:00:00"];
        $class = ["Boxing","Bodycombat"];
        $teacher = ["บิ๊กโช","ต่า"];
        $status = ["จอง","ยกเลิก"];

       return view('reserve.index',['teacher'=>$teacher,'class'=>$class,'date'=>$date,
       'time'=>$time,'status'=>$status]); 
    }

    
}
