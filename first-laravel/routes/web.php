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

Route::get('/', 'HomeController@HomeData');

Route::get("/Pizza's", 'pizzaController@PizzaData');

Route::get("/Toetjes", 'toetjeController@ToetjeData');

Route::get("/Burgers", 'burgerController@BurgerData');

Route::get("/Salade", 'saladeController@SaladeData');

Route::get("/Drinken", 'drinkenController@DrinkenData');