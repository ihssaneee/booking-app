<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternauteController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\HotelController;

Route::get('/', function () {
    return view('layouts.app');
});
Route::resource('internautes', InternauteController::class);
Route::resource('reservations', ReservationController::class);
Route::resource('hotels', HotelController::class);

