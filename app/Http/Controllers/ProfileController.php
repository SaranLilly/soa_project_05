<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

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
}
