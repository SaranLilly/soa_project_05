<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function listofname(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $response = Http::post('http://localhost:8100/soa_project_5/rest/services/users', [
            'name' => $data['name'],
            'surname' => $data['surname'],
            'tel' => $data['tel'],
            'email' => $data['email'],
            'password' => $data['password'],
            'role' => $data['role'],
        ]);

        $responseData = $response->json();
        //dd($responseData);
        return redirect('/home');
    }
}
