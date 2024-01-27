<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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

Route::controller(OrderController::class)->group(function () {
    Route::get('/', 'index')->name('order.index');
    Route::get('/order_now/{id}', 'details')->name('order.details');
    Route::post('/order', 'order')->name('order.now');
    Route::get('/order_view', 'order_view')->name('order.view');
});