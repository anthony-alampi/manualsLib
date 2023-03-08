<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CancellationMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CancellationRequest;


class CancellationController extends Controller
{
    public function show()
    {
        return view('cancellation');
    }
    public function submit(CancellationRequest $request)
    {
        $validate = $request->validate([
            'email' => "required",
        ]);

        Mail::to('contact@manualslib.com')->send(new CancellationMail($request->email));
        return to_route('cancellation');
    }
}
