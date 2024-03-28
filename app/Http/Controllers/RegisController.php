<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Client\Request;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegisController extends Controller
{
    public function index()
    {
        return view('regis.index');
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
        //return redirect(route('login.index'));
        return redirect('/login.index');
    }

    // public function testPost()
    // {
    //     $response = Http::post('http://localhost:8087/soa_project_5/rest/services/users', [

    //         'name' => 'THar',
    //         'surname' => 'sdfsdfsdf',
    //         'tel' => '6666666666',
    //         'email' => 'supitchgmail.com',
    //         'password' => 'poq11xxxx',
    //         'role' => 'adminxxxx',

    //     ]);
    //     // dd($response->objpublic function listofname(Request $request)
    //     $responseData = $response->json();
    //     dd($responseData);

    // }
    // public function testPost(Request $request)
    // {
    //     $response = Http::post('http://localhost:8087/soa_project_5/rest/services/users', [
    //         'name' => $request->input('name'),
    //         'surname' => $request->input('surname'),
    //         'tel' => $request->input('tel'),
    //         'email' => $request->input('email'),
    //         'password' => $request->input('password'),
    //         'role' => $request->input('role'),
    //     ]);

    //     $responseData = $response->json();
    //     dd($responseData);
    // }

    // public function listofname(Request $request)
    // {
    //     $data = $request->validate([
    //         'name' => 'required',
    //         'surname' => 'required',
    //         'tel' => 'required',
    //         'email' => 'required',
    //         'password' => 'required',
    //         'role' => 'required',

    //     ]);

    //     $newUsers = User::testPost($data);

    //     return redirect(route('login.index'));
    //     // return view('login.index');
    // }
}
