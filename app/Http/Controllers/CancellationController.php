<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CancellationController extends Controller
{
    public function cancellation()
    {
        return view('cancellation');
    }
}
