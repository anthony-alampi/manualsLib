<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeaturesController;

Route::get('/', [ HomeController::class, 'home' ])->name('home');
Route::get('/features', [ FeaturesController::class, 'features' ])->name('features');
