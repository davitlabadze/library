<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
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
Route::get('/forgot-password', function () {
    return view('auth/forgotPassword');
});

Route::get('/confirmation', function () {
    return view('auth/confirmation');
});

Route::get('/change-password', function () {
    return view('auth/changePassword');
});


Route::prefix('/admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('/authors', AuthorController::class)->except('show')->names('authors');
    Route::resource('/books', BookController::class)->except('show')->names('books');
});
