<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])-> name ('home');

Route::get('/login', [AuthController::class, 'login'])-> name('login');

Route::get('/register', [AuthController::class, 'register'])-> name('register');

Route::post('/register', [AuthController::class, 'registerStore'])-> name('registerPost');

Route::post('/login', [AuthController::class, 'loginEvent'])->name('loginPst');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');