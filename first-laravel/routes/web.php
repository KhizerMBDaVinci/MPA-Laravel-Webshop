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

// Route::get('/login', 'HomeController@Login')->name('login');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'MyhomeController@HomeData')->name('myhome');

Route::get("/category", 'productByCatController@ProductSData')->name('category');

Route::get("/details", 'detailsController@ProductData')->name('details');

Route::get("/shopping-cart", 'shoppingCartController@ShowCart')->name('shopping-cart');

Route::get("/add-to-cart/{id}", 'shoppingCartController@Add')->name('shoppingcart.add');

Route::get("/remove-from-cart/{id}", 'shoppingCartController@Remove')->name('shoppingcart.remove');

Route::get("/customer-details", 'OrderController@CustomerForm')->name('ordercontroller.customerform');

Route::post("/processing-order", 'OrderController@ValidateOrder')->name('processingorder.validate');

Route::get('/view-orders', 'HomeController@ShowOrders')->middleware('auth')->name('view-orders');

Route::get('/delete-order', 'HomeController@DeleteOrder')->middleware('auth')->name('delete-order');


Route::get("/complete-order", function() 
{
    $categories = categorieModel::all();
    return view('CompleteOrder', ['categories' => $categories]);
    
})->name('complete-order');

Auth::routes();



