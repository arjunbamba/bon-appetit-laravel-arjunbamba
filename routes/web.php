<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\URL;


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
    // return view('welcome');
    return view('home');
})->name('home.index');

Route::get('/login', [AuthController::class, 'loginForm'])->name('auth.loginForm'); // LECTURE 03/01/21
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');    // LECTURE 03/01/21
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/register', [RegistrationController::class, 'index'])->name('registration.index');
Route::post('/register', [RegistrationController::class, 'register'])->name('registration.create');


if (env('APP_ENV') !== 'local') {
    URL::forceScheme('https');
}