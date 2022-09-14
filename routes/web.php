<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return view('pages/welcome');
})->name('welcome');

Route::get('/books', function () {
    return view('pages/books');
})->middleware(['auth', 'verified']);

Route::get('/book/{id}', function () {
    return view('pages/book');
})->middleware(['auth', 'verified']);


Route::get('login', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::get('register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');


Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('/forgot-password', function () {
    return view('auth/forgotPassword');
});


Route::get('/account-confirmation', function () {
    return view('auth/accountConfirmation');
})->name('signed');


Route::get('/change-password', function () {
    return view('auth/changePassword');
});

Route::get('/success-change-password', function () {
    return view('auth/successChangePassword');
});





Route::prefix('/admin')->middleware(['can:admin', 'auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('/authors', AuthorController::class)->except('show')->names('authors');
    Route::resource('/books', BookController::class)->except('show')->names('books');
});

Route::get('/confirmation', function () {
    return view('auth/confirmation');
})->name('verify');

Route::get('/email/verify', function () {
    return redirect()->route('verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {

    $request->user()->sendEmailVerificationNotification();

    return redirect('/');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::get('/forgot-password', [PasswordResetController::class, 'passwordRequest'])->middleware('guest')->name('password.request');
Route::post('/forgot-password', [PasswordResetController::class, 'passwordEmail'])->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}', [PasswordResetController::class, 'passwordReset'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [PasswordResetController::class, 'passwordUpadte'])->middleware('guest')->name('password.update');
