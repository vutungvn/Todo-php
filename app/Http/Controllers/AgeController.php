<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class AgeController extends Controller
{
    //
    public function CheckAge(Request $request)
    {
        return View('age.age-form');
    }
}
