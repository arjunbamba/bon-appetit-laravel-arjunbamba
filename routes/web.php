<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EloquentRecipeController;

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

Route::get('/aboutus', function() {
    return view('aboutus');
})->name('aboutus.index');

Route::get('/register', [RegistrationController::class, 'index'])->name('registration.index');
Route::post('/register', [RegistrationController::class, 'register'])->name('registration.create');

Route::get('/login', [AuthController::class, 'loginForm'])->name('auth.loginForm'); // LECTURE 03/01/21
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');    // LECTURE 03/01/21
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index'); // Lecture 03/01

// Route::get('/browse', function() {
//     return view('aboutus');
// })->name('browse.index');

// Route::get('/createRecipe', function() {
//     return view('aboutus');
// })->name('createRecipe.index');

Route::get('/eloquent/recipes/create', [EloquentRecipeController::class, 'create'])->name('eloquent_recipe.create');
Route::get('/eloquent/recipes/{id}/edit', [EloquentRecipeController::class, 'edit'])->name('eloquent_recipe.edit');

Route::get('/eloquent/recipes', [EloquentRecipeController::class, 'index'])->name('eloquent_recipe.index');
Route::get('/eloquent/recipes/view/{id}', [EloquentRecipeController::class, 'view'])->name('eloquent_recipe.view');
Route::post('/eloquent/recipes', [EloquentRecipeController::class, 'store'])->name('eloquent_recipe.store');
Route::post('/eloquent/recipes/{id}', [EloquentRecipeController::class, 'update'])->name('eloquent_recipe.update');

Route::post('/eloquent/recipes/bookmark/{id}', [EloquentRecipeController::class, 'bookmark'])->name('eloquent_recipe.bookmark');
Route::delete('/eloquent/recipes/bookmark/{id}', [ProfileController::class, 'removeBookmark'])->name('eloquent_recipe.removeBookmark');

Route::delete('/eloquent/recipes/{id}', [EloquentRecipeController::class, 'destroy'])->name('eloquent_recipe.delete');



if (env('APP_ENV') !== 'local') {
    URL::forceScheme('https');
}