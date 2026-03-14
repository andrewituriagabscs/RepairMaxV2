<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

//Landing Page
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/repairs', function () {
    return view('repairs');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/legal-policy', function () {
    return view('legal-policy');
});

// Auth Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// API Auth Routes
Route::post('/api/login', [AuthController::class, 'login']);
Route::post('/api/register', [AuthController::class, 'register']);
