<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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
//the index route
Route::get('/',[ App\Http\Controllers\FrontendController::class,'index']);



Route::get('/cart', [App\Http\Controllers\CartController::class, 'cartList'])->name('cart.list');
Route::post('/cart', [App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.store');
Route::post('/update-cart', [App\Http\Controllers\CartController::class, 'updateCart'])->name('cart.update');
Route::post('/remove', [App\Http\Controllers\CartController::class, 'removeCart'])->name('cart.remove');
Route::post('/clear', [App\Http\Controllers\CartController::class, 'clearAllCart'])->name('cart.clear');



Route::get('/guitar/{id}',[ App\Http\Controllers\FrontendController::class,'guitar']);

//the categories route
Route::get('/collections',[ App\Http\Controllers\FrontendController::class,'categories']);

Route::get('/collections/{id}',[ App\Http\Controllers\FrontendController::class,'category']);
 //the products route
Route::get('/our-products',[ App\Http\Controllers\FrontendController::class,'products']);

//product route id
Route::get('/our-products/{id}',[ App\Http\Controllers\FrontendController::class,'product']);


//add to cart
// Route::post("add_to_cart",[ProductController::class,'addToCart']);

//shop route
Route::get('/shop',[ App\Http\Controllers\FrontendController::class,'shops']);

Route::get('/shop/{id}',[ App\Http\Controllers\FrontendController::class,'shop']);

// Route::get('/collections{guitar_name}',[ App\Http\Controllers\FrontendController::class,'products']);

// Route::prefix('')->middleware(['auth','isAdmin'])->group(function (){

//     Route::get('guitars',[App\Http\Controllers\Admin\DashboardController::class, 'index']);
    

// });
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('guitars', App\Http\Controllers\GuitarController::class);


Route::resource('guitarImages', App\Http\Controllers\GuitarImageController::class);


Route::get('/contact-us',[App\Http\Controllers\ContactController::class,'contact']);


Route::post('/send-message',[App\Http\Controllers\ContactController::class,'sendEmail'])->name('contact.send');




Route::resource('products', App\Http\Controllers\ProductController::class);


Route::resource('categories', App\Http\Controllers\CategoryController::class);






Route::resource('permissions', App\Http\Controllers\PermissionController::class);


Route::resource('roles', App\Http\Controllers\RoleController::class);


Route::resource('users', App\Http\Controllers\UserController::class);
