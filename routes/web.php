<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about-us',[AboutController::class,'index'])->name('about');
Route::get('/services1',[ServicesController::class,'index'])->name('services1');
Route::get('/services2',[ServicesController::class,'services2'])->name('services2');
Route::get('/services3',[ServicesController::class,'services3'])->name('services3');
Route::get('/services4',[ServicesController::class,'services4'])->name('services4');

Route::get('/contact-us',[ContactController::class,'index'])->name('contact');

//services
//Route::get('/services 1',[ContactController::class,'index'])->name('contact');

