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

Route::get('/', 'HomeController@HomeData')->name('home');

Route::get("/category", 'productByCatController@ProductSData');

Route::get("/details", 'detailsController@ProductData');

Route::get("/shopping-cart", 'shoppingCartController@ShowCart')->name('shopping-cart');;

Route::get("/add-to-cart/{id}", 'shoppingCartController@Add')->name('shoppingcart.add');

Route::get("/remove-from-cart/{id}", 'shoppingCartController@Remove')->name('shoppingcart.remove');