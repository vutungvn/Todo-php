<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class AgeController extends Controller
{
    //
    public function Show(Request $request)
    {
        return View('age.age-form');
    }

    public function CheckAge(Request $request)
    {
        $age = $request->input('age');
        return "Bạn đã đủ 18 tuổi! Tuổi của bạn: " . $age;
    }
}
