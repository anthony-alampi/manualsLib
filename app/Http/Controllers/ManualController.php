<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManualController extends Controller
{
    public function getManual() {
        return view('manual') ;
    }
}
