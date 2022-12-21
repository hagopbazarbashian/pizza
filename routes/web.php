<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\UserOrderController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\FeedBackController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/' , [FrontController::class ,'index'])->name('filter');
Route::get('pizza/{id}/my_pizza' , [FrontController::class , 'show'])->name('pizza');
Route::post('pizza/order',[FrontController::class , 'store'])->name('order');
Route::get('/user_order', [FrontController::class , 'user_order'])->name('user_order');
Route::post('ContactUs' , [FeedBackController::class , 'sendus'])->name('contactus');

Route::group(['prefix'=>'admin','middleware'=>'auth','admin'] ,function(){
    Route::resource('pizza' ,PizzaController::class);
    // User order
   Route::get('/order-user' , [UserOrderController::class , 'index'])->name('order-user');
   Route::post('change/{id}' ,[UserOrderController::class ,'change'])->name('change');
   Route::get('/customers' , [UserOrderController::class ,'customers'])->name('customer');
});
