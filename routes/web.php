<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;

    
Route::middleware('guest')->group(function () {
    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});
Route::view('/register', 'auth.register')->name('register');

Route::middleware('auth')->group(function () {
    Route::view('/', 'posts.index')->name('home');
    Route::view('/about', 'posts.About')->name('about');
    Route::view('/contact', 'Contact.contact')->name('contact'); // Contact page route
    Route::view('/pricing', 'posts.pricing')->name('pricing');
    Route::post('/contact', [ContactController::class, 'contacts'])->name('contact.submit'); // Contact form submission
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
