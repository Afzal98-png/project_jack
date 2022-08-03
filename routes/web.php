<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/index', function () {
    return Inertia::render('Index');
});

Route::get('/signin', function () {
    return Inertia::render('SignIn');
})->name('signin');

Route::get('/forgot-password', function () {
    return Inertia::render('ForgotPassword');
})->name('forgotpassword');

Route::get('/password-verification', function () {
    return Inertia::render('PasswordVerification');
})->name('passwordverification');

Route::get('/new-password', function () {
    return Inertia::render('NewPassword');
})->name('newpassword');

Route::get('/signup', function () {
    return Inertia::render('Signup');
})->name('signup');

Route::get('/home', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/request', function () {
    return Inertia::render('Request');
})->name('request');

Route::get('/providers-profile', function () {
    return Inertia::render('ProvidersProfile');
})->name('providers-profile');

Route::get('/wallet', function () {
    return Inertia::render('Wallet');
})->name('wallet');

Route::get('/profile', function () {
    return Inertia::render('Profile');
})->name('profile');

Route::get('/chat', function () {
    return Inertia::render('Chat');
})->name('chat');

Route::get('/your-orders', function () {
    return Inertia::render('YourOrders');
})->name('your-orders');

Route::get('/sell-car', function () {
    return Inertia::render('SellCars');
})->name('sell-car');

Route::get('/all-services', function () {
    return Inertia::render('AllServices');
})->name('allServices');

// Requests

Route::get('/request-Service-1', function () {
    return Inertia::render('RequestService1');
})->name('requestService1');

Route::get('/request-Service-2', function () {
    return Inertia::render('RequestService2');
})->name('requestService2');

Route::get('/request-Service-3', function () {
    return Inertia::render('RequestService3');
})->name('requestService3');

Route::get('/request-Service-4,5', function () {
    return Inertia::render('RequestService4,5');
})->name('requestService4,5');

Route::get('/request-Service-6', function () {
    return Inertia::render('RequestService6');
})->name('requestService6');

Route::get('/request-Service-7', function () {
    return Inertia::render('RequestService7');
})->name('requestService7');

Route::get('/practice', function () {
    return Inertia::render('Practice');
})->name('practice');

require __DIR__ . '/auth.php';
