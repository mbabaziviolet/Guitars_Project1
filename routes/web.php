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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/',[ App\Http\Controllers\FrontendController::class,'index']);

Route::get('/collections',[ App\Http\Controllers\FrontendController::class,'guitars']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('guitars', App\Http\Controllers\GuitarController::class);


Route::resource('guitarImages', App\Http\Controllers\GuitarImageController::class);


// Route::resource('guitarImages', App\Http\Controllers\GuitarImageController::class);
