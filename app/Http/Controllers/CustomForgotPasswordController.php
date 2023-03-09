<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Laravel\Fortify\Contracts\FailedPasswordResetLinkRequestResponse;

class CustomForgotPasswordController extends Controller
{
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $response = $this->broker()->sendResetLink(
            $request->only('email')
        );

        if ($response instanceof FailedPasswordResetLinkRequestResponse) {
            return back()->with('status', $response->status());
        }

        return redirect()->route('home')->with('status', trans($response));
    }

    public function broker()
    {
        return Password::broker();
    }
}
