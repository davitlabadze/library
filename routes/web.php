<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
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
});

Route::get('/books', function () {
    return view('pages/books');
});

Route::get('/book/{id}', function () {
    return view('pages/book');
});

Route::get('/sign-in', function () {
    return view('auth/signin');
});

Route::get('/sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/sign-up', [RegisterController::class, 'store'])->middleware('guest');


Route::post('sign-out', [SessionsController::class, 'destroy'])->middleware('auth')->name('signout');

Route::get('/forgot-password', function () {
    return view('auth/forgotPassword');
});

Route::get('/confirmation', function () {
    return view('auth/confirmation');
});

Route::get('/account-confirmation', function () {
    return view('auth/accountConfirmation');
});


Route::get('/change-password', function () {
    return view('auth/changePassword');
});

Route::get('/success-change-password', function () {
    return view('auth/successChangePassword');
});





Route::prefix('/admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('/authors', AuthorController::class)->except('show')->names('authors');
    Route::resource('/books', BookController::class)->except('show')->names('books');
});
