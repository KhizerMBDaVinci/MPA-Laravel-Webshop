<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorieModel;
use App\productModel;

class productByCatController extends Controller
{
    public function ProductsData()
    {
        $CategoryId = request('id');
        $categories = categorieModel::all();
        $presentCategory = categorieModel::where('ID', $CategoryId)->get();
        $products = categorieModel::find($CategoryId)->Products;

        return view('products', ['categories' => $categories,'category' => $presentCategory, 'products' => $products]);
    } 
}
