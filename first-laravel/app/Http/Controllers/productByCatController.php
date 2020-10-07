<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class productByCatController extends Controller
{
    public function productsData()
    {
        $CategoryId = request('id');
        $categories = Category::all();
        $presentCategory = Category::where('ID', $CategoryId)->get();
        $products = Category::find($CategoryId)->products;

        return view('products', ['categories' => $categories,'category' => $presentCategory, 'products' => $products]);
    } 
}
  