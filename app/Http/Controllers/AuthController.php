<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // public function login()
    // {
    //     return view('auth.login');
    // }

    // public function authenticate(Request $req){
    //     // $input = $req->all();
    //     // dd($input);
    //     $recaptcha_secret = "6LfHfJUkAAAAAPPwwYr7vkTPj6hSeqr1-0PXMMFe";
    //     $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $recaptcha_secret . "&response=" . $_POST['g-recaptcha-response']);
    //     $response = json_decode($response, true);
    //     $req->validate([
    //         'email' => 'required | email',
    //         'password' => 'required',
    //         'g-recaptcha-response' => 'required',
    //     ]);
    //             if (auth()->attempt($req->only('email', 'password' ))) {
    //             return redirect()->route('about');
    //     }
    //     return redirect()->back()->withErrors('Les identifiants ne sont pas reconnus');
    // }

    // public function logout() {
    //     auth()->logout();
    //     return redirect()->route('home');
        
    // }
    // public function forgot() {
    //     return view('auth.forgotPassword');
        
    // }
}
