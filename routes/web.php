<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mvc\HomeConctroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('',[HomeConctroller::class,"index"])->name('home');
Route::get('/about',[HomeConctroller::class,"about"])->name('about');
Route::get('/contact',[HomeConctroller::class,"contact"])->name('contact');
Route::get('/calculator',[HomeConctroller::class,"calculator"])->name('calculator');
Route::post('/calculator',[HomeConctroller::class,"makeCalculator"])->name('calculator');
