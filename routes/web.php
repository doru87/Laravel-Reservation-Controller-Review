<?php

use App\Http\Controllers\UserReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('reservation', UserReservationController::class);