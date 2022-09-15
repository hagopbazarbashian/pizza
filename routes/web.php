<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\UserOrderController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth','admin'] ,function(){
    Route::resource('pizza' ,PizzaController::class);

    // User order
   Route::get('/order-user' , [UserOrderController::class , 'index'])->name('order-user');
   Route::post('change/{id}' ,[UserOrderController::class ,'change'])->name('change');
});
