<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;


use App\Http\Controllers\AuthController;

    
Route::middleware('guest')->group(function () {
    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);

    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});
Route::view('/register', 'auth.register')->name('register');

Route::middleware('auth')->group(function () {
    Route::redirect('/','posts');

    Route::resource('posts',PostController::class);

    // Route::view('/', 'posts.index')->name('home');
    Route::view('/about', 'posts.About')->name('about');
    Route::view('/contact', 'Contact.contact')->name('contact'); // Contact page route
    
    Route::view('/pricing', 'posts.pricing')->name('pricing');
    Route::post('/contact', [ContactController::class, 'contacts'])->name('contact.submit'); // Contact form submission
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
  
    Route::view('/message', 'message.message')->name('message'); // Message page route
   });


//    Route::get('/message', function () {
//     return view('message.message');
// })->name('message')->middleware('block-message-page'); // Message page route
