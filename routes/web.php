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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/subscription/create', ['as'=>'home', App\Http\Controllers\SubscriptionController::class, 'index'])->name('subscription.create');
Route::post('order-post', ['as'=>'order-post', App\Http\Controllers\SubscriptionController::class, 'orderPost'])->name('order-post');
