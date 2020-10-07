<?php

use Illuminate\Support\Facades\Route;
use App\Category;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'MyhomeController@homeData')->name('myhome');

Route::get("/category", 'productByCatController@productsData')->name('category');

Route::get("/details", 'detailsController@productData')->name('details');

Route::get("/shopping-cart", 'shoppingCartController@showCart')->name('shopping-cart');

Route::get("/add-to-cart/{id}", 'shoppingCartController@add')->name('shoppingcart.add');

Route::get("/remove-from-cart/{id}", 'shoppingCartController@remove')->name('shoppingcart.remove');

Route::get("/customer-details", 'OrderController@customerForm')->name('ordercontroller.customerform');

Route::post("/processing-order", 'OrderController@validateOrder')->name('processingorder.validate');

Route::get('/view-orders', 'HomeController@showOrders')->middleware('auth')->name('view-orders');

Route::get('/delete-order', 'HomeController@deleteOrder')->middleware('auth')->name('delete-order');


Route::get("/complete-order", function() 
{
    $categories = Category::all();
    return view('CompleteOrder', ['categories' => $categories]);
    
})->name('complete-order');

Auth::routes();
