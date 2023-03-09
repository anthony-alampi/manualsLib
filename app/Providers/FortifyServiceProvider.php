<?php

namespace App\Providers;

use App\Models\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\Hash;
use App\Actions\Fortify\CreateNewUser;
use Illuminate\Support\ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use App\Actions\Fortify\UpdateUserProfileInformation;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        Fortify::loginView( function(){
            return view('home');
        });

        Fortify::registerView( function(){
            return view('home');
            
        });

        Fortify::requestPasswordResetLinkView(function(){ //MODAL
            return view('home');
            // $recaptcha_secret = "6LfHfJUkAAAAAPPwwYr7vkTPj6hSeqr1-0PXMMFe";
            // $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $recaptcha_secret . "&response=" . $_POST['g-recaptcha-response']);
            // $response = json_decode($response, true);

            // $request->validate([Fortify::email() => 'required|email', 'g-recaptcha-response' => 'required']);
            // return view('home', ['request' => $request]);
        });

        Fortify::resetPasswordView(function (Request $request){ // vue envoyé par email pour new password
            
            $request->validate([Fortify::email() => 'required|email']);

            return view('auth.reset-password', ['request' => $request]);
        });

        Fortify::authenticateUsing(function (Request $request) {

            $client = new Client();

            $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
                'form_params' => [
                    'secret' => env('CAPTCHA_SECRET'),
                    'response' => $request->input('g-recaptcha-response'),
                    'remoteip' => $request->ip(),
                ],
                'curl' => [
                    CURLOPT_SSL_VERIFYPEER => false,
                ],
            ]);

            $responseData = json_decode($response->getBody(), true);

            if (!$responseData['success']) {
                throw ValidationException::withMessages(['g-recaptcha-response' => 'reCAPTCHA validation failed.']);
            }

            $user = User::where('email', $request->email)->first();

            if (
                $user &&
                Hash::check($request->password, $user->password)
            ) {
                return $user;
            }
        });

        RateLimiter::for('login', function (Request $request) {
            $email = (string) $request->email;

            return Limit::perMinute(115)->by($email . $request->ip());
        });

    }

}
