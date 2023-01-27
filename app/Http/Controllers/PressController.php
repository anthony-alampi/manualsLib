<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PressController extends Controller
{
    public function press () {
        return view('press');
    }
}
