<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class productByCatController extends Controller
{
    public function productsData($id)
    {
        $categories = Category::all();
        $presentCategory = Category::find($id);
        $products = Category::find($id)->products;

        return view('products', ['categories' => $categories,'category' => $presentCategory, 'products' => $products]);
    } 
}
  