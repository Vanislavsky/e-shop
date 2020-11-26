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



//Route::get('/', function () {
  //  return view('index');
//});

Route::get('/', 'App\Http\Controllers\MainController@main')->name('main');
Route::get('/categories', 'App\Http\Controllers\MainController@categories');

Route::get('/basket', 'App\Http\Controllers\BasketController@basket')->name('basket');
Route::get('/basket/place', 'App\Http\Controllers\BasketController@basketPlace') ->name('order');
Route::post('/basket/add/{id}', 'App\Http\Controllers\BasketController@basketAdd')->name('basket_add');
Route::post('/basket/remove/{id}', 'App\Http\Controllers\BasketController@basketRemove')->name('basket_remove');
Route::post('/basket/place', 'App\Http\Controllers\BasketController@basketConfirm') ->name('basket_confirm');

Route::get('/categories/{category}', 'App\Http\Controllers\MainController@category') ->name('categ');
Route::get('/products', 'App\Http\Controllers\MainController@products');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
