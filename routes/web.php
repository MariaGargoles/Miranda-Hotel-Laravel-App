<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RoomController;

// Ruta para la página de inicio
Route::get('/', function () {
    return view('home');
})->name('home');

// Ruta para la página about
Route::get('/about', function () {
    return view('about');
})->name('about');

// Ruta para el controlador de Contact
Route::resource('contacts', ContactController::class);

// Rutas para el controlador de Booking
Route::resource('bookings', BookingController::class);

// Rutas para el controlador de Room
Route::resource('rooms', RoomController::class);

