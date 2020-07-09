<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorieModel;
use App\productModel;

class productByCatController extends Controller
{
    public function ProductsData()
    {
        $id = request('id');

        $categories = categorieModel::all();
        $presentCategory = categorieModel::where('ID', $id)->get();
        $products = productModel::where('Categorie_ID', $id)->get();

        return view('products', ['categories' => $categories,'category' => $presentCategory, 'products' => $products]);
    } 
}
