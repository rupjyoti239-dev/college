<?php

use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;

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




//? FrontEnd side

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/faculties',[HomeController::class,'faculties'])->name('faculties');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');