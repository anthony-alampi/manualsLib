<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(ContactRequest $request){
        $recaptcha_secret = "6LfHfJUkAAAAAPPwwYr7vkTPj6hSeqr1-0PXMMFe";
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $recaptcha_secret . "&response=" . $_POST['g-recaptcha-response']);
        $response = json_decode($response, true);

        $validate = $request->validate([
        'g-recaptcha-response' => "required",
        ]);

        Mail::to('contact@manualslib.com')->send(new ContactMail($request->lastName, $request->firstName, $request->email, $request->message));
        return to_route('contact')->with('message', 'Message sent successfully');
    }
}
