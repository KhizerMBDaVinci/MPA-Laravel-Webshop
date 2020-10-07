<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class detailsController extends Controller
{
    public function productData()
    {
        $id = request('id');

        $categories = Category::all();
        $product = Product::where('ID', $id)->get();

        return view('details', ['product' => $product, 'categories' => $categories]);
    }

}
