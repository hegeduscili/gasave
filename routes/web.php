<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\OnlyGuests;
use App\Http\Middleware\OnlyUsers;
use App\Http\Middleware\SetLang;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => [SetLang::class]], function () {

    Route::group(['middleware' => [OnlyGuests::class], 'prefix' => 'guest'], function () {

        Route::get('/', function () {
            return view('home');
        })->name('home');

        Route::get('/register', function () {
            return view('register');
        })->name('register');

        Route::post('/register', [UserController::class, 'register'])->name('post.register');

        Route::get('/login', function () {
            return view('login');
        })->name('login');

        Route::post('/login', [UserController::class, 'login'])->name('post.login');
    });

    Route::group(['middleware' => [OnlyUsers::class], 'prefix' => 'user'], function () {

        Route::get('/logout', function () {
            Auth::logout();
            return redirect()->route('home');
        })->name('logout');

        Route::get('/profile', function () {
            return view('profile');
        })->name('profile');

        Route::get('/edituser', function () {
            return view('edituser');
        })->name('edituser');

        Route::post('/edituser', [UserController::class, 'profileProcess'])->name('post.profile');
    });
});
