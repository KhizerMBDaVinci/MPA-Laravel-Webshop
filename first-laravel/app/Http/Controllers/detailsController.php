<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class detailsController extends Controller
{
    /**
    * Function details() retrieves all the details of a product.
    */
    public function details($id)
    {
        $categories = Category::all();
        $product = Product::find($id);

        return view('details', ['product' => $product, 'categories' => $categories]);
    }

}
