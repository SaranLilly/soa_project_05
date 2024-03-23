<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class ProfileController extends Controller
{
    public function index(): View
    {
        $name = ["สมศรี มีใจ"];

        return view('profile.index', ['name' => $name]);
    }
}
