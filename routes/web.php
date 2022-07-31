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

Route::get('/forgotpassword', function () {
    return Inertia::render('ForgotPassword');
})->name('forgotpassword');

Route::get('/passwordverification', function () {
    return Inertia::render('PasswordVerification');
})->name('passwordverification');

Route::get('/newpassword', function () {
    return Inertia::render('NewPassword');
})->name('newpassword');

Route::get('/signup', function () {
    return Inertia::render('Signup');
})->name('signup');

Route::get('/home', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/allServices', function () {
    return Inertia::render('AllServices');
})->name('allServices');

Route::get('/requestService1', function () {
    return Inertia::render('RequestService1');
})->name('requestService1');

Route::get('/practice', function () {
    return Inertia::render('Practice');
})->name('practice');

require __DIR__ . '/auth.php';
