<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PressController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CookiesController;
use App\Http\Controllers\ManualsController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\CarreersController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\BrandDetailsController;
use App\Http\Controllers\CancellationController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Auth\DashboardAccountController;
use App\Http\Controllers\Auth\DashboardAffiliateController;

/*--------- LIVE SEARCH GET API MANUALS ----------*/
// Route pour afficher la vue de détails du manuel
Route::get('/manual/{id}', function ($id) {
    // Récupérer les données du manuel à partir de l'API
    $manual = file_get_contents('https://dev3.vanilla.digital/manuals.php?id=' . $id);
    $manual = json_decode($manual);

    // Charger la vue de détails du manuel avec les données
    return view('manual')->with('manual', $manual);
});








Route::get('/', [ HomeController::class, 'home' ])->name('home');
// Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate'); // permet d'envoyer la requete HTTP plus précisement les données d'AUTH

/*-- Fortify route--- */
Route::get('/home', function () {
    return view('home');
})->name('home');   //->middleware('auth')



Route::get('/features',             [FeaturesController::class, 'features'])->name('features');
Route::get('/faq',                  [FaqController::class, 'faq'])->name('faq');
Route::get('/about',                [AboutController::class, 'about'])->name('about');
Route::get('/api',                  [ApiController::class, 'viewApi'])->name('api');
Route::get('/pricing',              [PricingController::class, 'pricing'])->name('pricing');
Route::get('/press',                [PressController::class, 'press'])->name('press');
Route::get('/brands',               [BrandsController::class, 'brands'])->name('brands');
Route::get('/brand-details',        [BrandDetailsController::class, 'brandDetails'])->name('brandDetails'); /*-- Cette route est chargé d'afficher les details par marque choisit*/
Route::get('/terms',                [TermsController::class, 'terms'])->name('terms');
Route::get('/privacy',              [PrivacyController::class, 'privacy'])->name('privacy');
Route::get('/cookies',              [CookiesController::class, 'cookies'])->name('cookies');
Route::get('/subscription',         [SubscriptionController::class, 'subscription'])->name('subscription');
/*---------------------------------------------------API----------------------------------------------------------------------------------*/
Route::get('/manuals',              [ManualsController::class, 'manuals'])->name('manuals');
/*---------------------------- LIVE SEARCH & ID PAGE REDIRECT-------------------------*/
Route::get('/manual',               [ManualController::class, 'getManual'])->name('manual'); /*-- Cette route est chargé d'affiché le manuel rechérché vie les live-search*/

/*--------------------------------------------------EMAILS------------------------------------------------------------------------*/
Route::get('/cancellation',         [CancellationController::class, 'show'])->name('cancellation');
Route::post('/cancellation',        [CancellationController::class, 'submit'])->name('cancellation.submit');
Route::get('/contact',              [ContactController::class, 'show'])->name('contact');
Route::post('/contact',             [ContactController::class, 'submit'])->name('contact.submit'); // This Route send mail to Contact and Carreer form
Route::get('/carreers',             [CarreersController::class, 'show'])->name('carreers');

/*--------------------------------------------------USER DASHBOARDS------------------------------------------------------------------------*/
Route::get('/dashboard-account',    [DashboardAccountController::class, 'show'])->name('dashboardAccount')->middleware('auth');
Route::get('/dashboard-affiliation',[DashboardAffiliateController::class, 'show'])->name('dashboardAffiliation')->middleware('auth');

// Route::view('/auth/affiliation', 'auth.affiliation')->middleware('auth');


