<?php

use Illuminate\Support\Facades\Route;
use App\categorieModel;

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

Route::get("/customer-details", 'OrderController@CustomerForm')->name('ordercontroller.customerform');

Route::post("/processing-order", 'OrderController@ValidateOrder')->name('processingorder.validate');

Route::get("/complete-order", function() 
{

    $categories = categorieModel::all();
    return view('CompleteOrder', ['categories' => $categories]);
    
})->name('complete-order');