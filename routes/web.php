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

use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\DashboardAccountController;
use App\Http\Controllers\Auth\DashboardAffiliateController;


/*---------------------------- LIVE SEARCH GET API MANUALS ---------------------------*/

Route::get('/manual/{id}',       [ManualController::class, 'index'])->name('manual.index');
Route::get('/manual/{id}',          [ManualController::class, 'show'])->name('manual.show');
Route::post('/manual/{id}',         [ManualController::class, 'update'])->name('dashboard');

/*----------------------------------USER DASHBOARDS------------------------------------*/
Route::get('/dashboard',            [DashboardController::class, 'show'])->name('dashboard')->middleware('auth');
Route::get('/dashboard-account',    [DashboardAccountController::class, 'show'])->name('dashboardAccount')->middleware('auth');
Route::get('/dashboard-affiliation', [DashboardAffiliateController::class, 'show'])->name('dashboardAffiliation')->middleware('auth');


/*---------------------------------------EMAILS---------------------------------------*/
Route::get('/cancellation',         [CancellationController::class, 'show'])->name('cancellation');
Route::post('/cancellation',        [CancellationController::class, 'submit'])->name('cancellation.submit');
Route::get('/contact',              [ContactController::class, 'show'])->name('contact');
Route::post('/contact',             [ContactController::class, 'submit'])->name('contact.submit'); // This Route send mail to Contact and Carreer form
Route::get('/carreers',             [CarreersController::class, 'show'])->name('carreers');




// Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate'); // permet d'envoyer la requete HTTP plus précisement les données d'AUTH


Route::get('/',                     [HomeController::class, 'home'])->name('home');/*-- Fortify route--- */
Route::get('/home',                 function () { return view('home'); })->name('home');
Route::get('/manuals',              [ManualsController::class, 'manuals'])->name('manuals');
Route::get('/features',             [FeaturesController::class, 'features'])->name('features');
Route::get('/faq',                  [FaqController::class, 'faq'])->name('faq');
Route::get('/about',                [AboutController::class, 'about'])->name('about');
Route::get('/api',                  [ApiController::class, 'viewApi'])->name('api');
Route::get('/pricing',              [PricingController::class, 'pricing'])->name('pricing');
Route::get('/press',                [PressController::class, 'press'])->name('press');
Route::get('/brands',               [BrandsController::class, 'brands'])->name('brands');
Route::get('/brand-details',        [BrandDetailsController::class, 'brandDetails'])->name('brandDetails'); 
Route::get('/terms',                [TermsController::class, 'terms'])->name('terms');
Route::get('/privacy',              [PrivacyController::class, 'privacy'])->name('privacy');
Route::get('/cookies',              [CookiesController::class, 'cookies'])->name('cookies');
Route::get('/subscription',         [SubscriptionController::class, 'subscription'])->name('subscription');
Route::get('/manual',               [ManualController::class, 'getManual'])->name('manual'); /*-- Cette route est chargé d'affiché le manuel rechérché vie les live-search*/



