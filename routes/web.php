<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\CookiesController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\SubscriptionController;

Route::get('/', [ HomeController::class, 'home' ])->name('home');
Route::get('/features', [ FeaturesController::class, 'features' ])->name('features');
Route::get('/faq', [ FaqController::class, 'faq' ])->name('faq');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/api', [ApiController::class, 'viewApi'])->name('api');
Route::get('/pricing', [PricingController::class, 'pricing'])->name('pricing');



Route::get('/terms', [TermsController::class, 'terms'])->name('terms');
Route::get('/privacy', [PrivacyController::class, 'privacy'])->name('privacy');
Route::get('/cookies', [CookiesController::class, 'cookies'])->name('cookies');
Route::get('/subscription', [SubscriptionController::class, 'subscription'])->name('subscription');