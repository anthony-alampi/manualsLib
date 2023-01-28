<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManualsController extends Controller
{
    public function manuals() {
        return view('manuals');
    }
}
