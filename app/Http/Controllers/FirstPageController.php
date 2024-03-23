<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class FirstPageController extends Controller
{
    public function index():View{

        $title = ["ฺBODYPUMP","BODY COMBAT","BODY COMBAT"];
        
        return view('FirstPage',['title'=>$title]);
    }
}