<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandDetailsController extends Controller
{
    public function brandDetails () {
        return view('brandDetails');
    }
}
