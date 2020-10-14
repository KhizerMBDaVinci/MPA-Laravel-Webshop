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

Route::get('/', 'MyHomeController@homeData')->name('myhome');

Route::get("/category/{id}", 'ProductByCatController@productsData')->name('category');

Route::get("/details/{id}", 'DetailsController@details')->name('details');

Route::get("/shopping-cart", 'ShoppingCartController@showCart')->name('shopping-cart');

Route::get("/add-to-cart/{id}", 'ShoppingCartController@add')->name('shoppingcart.add');

Route::get("/remove-from-cart/{id}", 'ShoppingCartController@remove')->name('shoppingcart.remove');

Route::get("/customer-details", 'OrderController@loggedInCheck')->name('ordercontroller.customerform');

Route::post("/processing-order", 'OrderController@processOrder')->name('processOrder');

Route::get('/view-orders', 'HomeController@showOrders')->middleware('auth')->name('view-orders');

Route::get('/delete-order/{id}', 'HomeController@deleteOrder')->middleware('auth')->name('delete-order');


Route::get("/complete-order/{loggedIn}", function($logggedIn) 
{
    $categories = Category::all();
    return view('completeOrder', ['categories' => $categories, 'loggedIn' => $logggedIn]);
    
})->name('complete-order');

Auth::routes();
