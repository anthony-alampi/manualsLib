<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ManualsController;
use App\Http\Controllers\CarreersController;
use App\Http\Controllers\CancellationController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\DashboardAccountController;
use App\Http\Controllers\Auth\DashboardAffiliateController;
use App\Http\Controllers\ForgotPasswordController;

/*---------------------------- LIVE SEARCH GET API MANUALS ---------------------------*/
Route::get('/manuals'               ,[ManualsController::class, 'manuals'])->name('manuals');
Route::get('/manual'                ,[ManualController::class, 'getManual'])->name('manual'); /*-- Cette route est chargé d'affiché le manuel rechérché via les lives-searchs*/
Route::get('/manual/{id}'           ,[ManualController::class, 'index'])->name('manual.index');
Route::get('/manual/{id}'           ,[ManualController::class, 'show'])->name('manual.show');
Route::post('/manual/{id}'          ,[ManualController::class, 'update'])->name('dashboard');
/*----------------------------------USER DASHBOARD------------------------------------*/
Route::get('/dashboard'             ,[DashboardController::class, 'show'])->name('dashboard')->middleware('auth');
Route::get('/dashboard-account'     ,[DashboardAccountController::class, 'show'])->name('dashboardAccount')->middleware('auth');
Route::get('/dashboard-affiliation' ,[DashboardAffiliateController::class, 'show'])->name('dashboardAffiliation')->middleware('auth');
/*---------------------------------------EMAILS---------------------------------------*/
Route::get('/cancellation'          ,[CancellationController::class, 'show'])->name('cancellation');
Route::post('/cancellation'         ,[CancellationController::class, 'submit'])->name('cancellation.submit');
Route::get('/contact'               ,[ContactController::class, 'show'])->name('contact');
Route::post('/contact'              ,[ContactController::class, 'submit'])->name('contact.submit'); // This Route send mail to Contact and Carreer form
Route::get('/carreers'              ,[CarreersController::class, 'show'])->name('carreers');
Route::post('/forgot-password'      ,[ForgotPasswordController::class, 'storePassword'])->name('password.email');
/*-------------------------------------------------------------------------------------*/

Route::get('/'              , function() { return view('home'); })->name('home');
Route::get('/brands'        , function() { return view('brands'); });
Route::get('/about'         , function() { return view('about'); });
Route::get('/features'      , function() { return view('features'); });
Route::get('/pricing'       , function() { return view('pricing'); });
Route::get('/press'         , function() { return view('press'); });
Route::get('/faq'           , function() { return view('faq'); });
Route::get('/api'           , function() { return view('api'); });
Route::get('/subscription'  , function() { return view('subscription'); });
Route::get('/terms'         , function() { return view('terms'); });
Route::get('/privacy'       , function() { return view('privacy'); });
Route::get('/cookies'       , function() { return view('cookies'); });
/* ** */
Route::get('/brand-details'     , function() { return view('brandDetails'); }); /* Example page for brand list*/
/*BRAND PAGE ROUTING x15  */
Route::get('/brand/panasonic'   , function () { return view('brandDetails'); });
Route::get('/brand/sony'        , function () { return view('brandDetails'); });
Route::get('/brand/samsung'     , function () { return view('brandDetails'); });
Route::get('/brand/apple'       , function () { return view('brandDetails'); });
Route::get('/brand/philips'     , function () { return view('brandDetails'); });
Route::get('/brand/lg'          , function () { return view('brandDetails'); });
Route::get('/brand/valberg'     , function () { return view('brandDetails'); });
Route::get('/brand/marshall'    , function () { return view('brandDetails'); });
Route::get('/brand/xiaomi'      , function () { return view('brandDetails'); });
Route::get('/brand/toshiba'     , function () { return view('brandDetails'); });
Route::get('/brand/bosch'       , function () { return view('brandDetails'); });
Route::get('/brand/jbl'         , function () { return view('brandDetails'); });
Route::get('/brand/bose'        , function () { return view('brandDetails'); });
Route::get('/brand/gopro'       , function () { return view('brandDetails'); });
Route::get('/brand/dyson'       , function () { return view('brandDetails'); });