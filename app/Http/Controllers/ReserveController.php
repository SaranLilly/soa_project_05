<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class ReserveController extends Controller
{

<<<<<<< HEAD
    public function index(): View
    {
        $response = Http::get('http://localhost:8100/soa_project_5/rest/services/reserves');
        $reserveList = $response->object();
        //dd($reserveList);
        return view('reserve.index', ['reserveList' => $reserveList]);
    }

    public function delete(Request $request)
    {
        //dd($request->reserveList);
        $response = Http::delete('http://localhost:8100/soa_project_5/rest/services/reserves/' . $request->reserveList);
        return redirect(route('reserve.index'));
    }

=======
    public function index():View{
        $response = Http::get('http://localhost:8080/soa_project_5/rest/services/reserves');
        $reserveList = $response->object();
        //dd($reserveList);
        return view('reserve.index',['reserveList'=>$reserveList]);
    }

    public function delete(Request $request){
        //dd($request->reserveList);
        $response = Http::delete('http://localhost:8080/soa_project_5/rest/services/reserves/'.$request->reserveList);
        return redirect(route('reserve.index'));
    }

       

    
>>>>>>> f6c7642afb9dc75607807acc50db419d8de2c1ed
}
