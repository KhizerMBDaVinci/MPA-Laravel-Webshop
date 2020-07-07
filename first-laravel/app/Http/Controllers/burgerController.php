<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorieModel;
use App\productModel;

class burgerController extends Controller
{
    public function BurgerData()
    {
        $categories = categorieModel::all();
        $presentCategory = categorieModel::where('ID', '8')->get();
        $products = productModel::where('Categorie_ID', '8')->get();

        return view('products', ['categories' => $categories,'category' => $presentCategory, 'products' => $products]);
    } 
}
