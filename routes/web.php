<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ReservationController;


Route::get('testimonials', [LandingController::class, 'testimonials'])->name('landing.testimonials');
Route::get('details/', [LandingController::class, 'details'])->name('landing.details');
Route::resource('/', LandingController::class);

Route::post('/reservasi-submit', [ReservationController::class, 'submit'])->name('reservasi.submit');


