<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;

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


Route::get('/login',[pageController::class, 'login'])->name('login');
Route::post('/login',[pageController::class, 'checkuser'])->name('login');
Route::get('/register',[pageController::class, 'register'])->name('register');
Route::post('/register',[pageController::class, 'createAccount'])->name('register');
Route::get('/home',[pageController::class, 'home'])->name('home');
Route::get('/team', [pageController::class, 'team'])->name('team');
Route::get('/product', [pageController::class, 'product'])->name('product');