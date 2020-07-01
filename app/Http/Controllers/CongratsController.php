<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CongratsController extends Controller
{
    public function congrats()
    {
        return view('/congrats');
    }
}
