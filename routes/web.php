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

Route::get('/guitar/{id}',[ App\Http\Controllers\FrontendController::class,'guitar']);

Route::get('/collections',[ App\Http\Controllers\FrontendController::class,'categories']);

Route::get('/collections/{id}',[ App\Http\Controllers\FrontendController::class,'products']);

Route::get('/shop',[ App\Http\Controllers\FrontendController::class,'shops']);

Route::get('/shop/{id}',[ App\Http\Controllers\FrontendController::class,'shop']);

// Route::get('/collections{guitar_name}',[ App\Http\Controllers\FrontendController::class,'products']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('guitars', App\Http\Controllers\GuitarController::class);


Route::resource('guitarImages', App\Http\Controllers\GuitarImageController::class);


Route::get('/contact-us',[App\Http\Controllers\ContactController::class,'contact']);


Route::post('/send-message',[App\Http\Controllers\ContactController::class,'sendEmail'])->name('contact.send');




