<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;

class ForgotPasswordController extends PasswordResetLinkController
{
    public function storePassword(Request $request)
    {
        $recaptcha_secret = "6LfHfJUkAAAAAPPwwYr7vkTPj6hSeqr1-0PXMMFe";
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $recaptcha_secret . "&response=" . $_POST['g-recaptcha-response']);
        $response = json_decode($response, true);

        $request->validate(['g-recaptcha-response' => 'required']);
        $status = $this->broker()->sendResetLink(
            $request->only(Fortify::email())
        );
        return view('home');
    }
}
