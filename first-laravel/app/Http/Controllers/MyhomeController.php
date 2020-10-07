<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class MyhomeController extends Controller
{
    public function homeData()
    {
        $categories = Category::all();
        $products = Product::all();

        return view('Myhome', ['categories' => $categories,'products' => $products]);
    } 
}
