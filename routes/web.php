<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PressController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\ManualController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CookiesController;
use App\Http\Controllers\ManualsController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\CarreersController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\CancellationController;
use App\Http\Controllers\SubscriptionController;

Route::get('/', [ HomeController::class, 'home' ])->name('home');
Route::get('/features', [ FeaturesController::class, 'features' ])->name('features');
Route::get('/faq', [ FaqController::class, 'faq' ])->name('faq');
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/api', [ApiController::class, 'viewApi'])->name('api');
Route::get('/pricing', [PricingController::class, 'pricing'])->name('pricing');
Route::get('/press', [PressController::class, 'press'])->name('press');
Route::get('/brands', [BrandsController::class, 'brands'])->name('brands');
Route::get('/manuals', [ManualsController::class, 'manuals'])->name('manuals');

/*------API------*/
Route::get('/manual', [ManualController::class, 'getManual'])->name('manual'); /*-- Cette route est chargé d'affiché le manuel rechérché vie les search bar*/


Route::get('/terms', [TermsController::class, 'terms'])->name('terms');
Route::get('/privacy', [PrivacyController::class, 'privacy'])->name('privacy');
Route::get('/cookies', [CookiesController::class, 'cookies'])->name('cookies');
Route::get('/subscription', [SubscriptionController::class, 'subscription'])->name('subscription');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/cancellation', [CancellationController::class, 'cancellation'])->name('cancellation');
Route::get('/carreers', [CarreersController::class, 'carreers'])->name('carreers');