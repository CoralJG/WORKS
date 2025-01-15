<?php

use App\Http\Controllers\MisionController;
use App\Http\Controllers\TripulanteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('welcome');
})->name('welcome');

Route::resource('misiones', MisionController::class);
Route::resource('tripulantes', TripulanteController::class);