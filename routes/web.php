<?php

use App\Http\Controllers\UserController;
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

Route::view('/', 'home');

Route::view('/login', 'user.login');

Route::view('/register', 'user.register');

Route::post('/login',[UserController::class,'login']);

Route::get('/login/google',[UserController::class,'logingoogle']);

Route::get('/login/github',[UserController::class,'logingithub']);

Route::get('/login/facebook',[UserController::class,'loginfacebook']);

Route::get('/login/google/redirect',[UserController::class,'logingoogleredirect']);

Route::get('/login/github/redirect',[UserController::class,'logingithubredirect']);

Route::get('/login/facebook/redirect',[UserController::class,'loginfacebookredirect']);

Route::post('/register',[UserController::class,'register']);

Route::get('/logout',[UserController::class,'logout']);

