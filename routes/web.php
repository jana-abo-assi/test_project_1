<?php

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
    return view('welcome');
});

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/register', [App\Http\Controllers\RegistrationController::class, 'create']);

Route::post('/register', [App\Http\Controllers\RegistrationController::class, 'store']);



Route::get('/login', [App\Http\Controllers\SessionsController::class, 'create']);

Route::post('/login', [App\Http\Controllers\SessionsController::class, 'store']);

Route::get('/logout', [App\Http\Controllers\SessionsController::class, 'destroy']);
