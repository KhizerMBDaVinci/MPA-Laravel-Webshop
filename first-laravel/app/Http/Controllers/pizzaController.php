<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorieModel;
use App\productModel;

class pizzaController extends Controller
{
    public function PizzaData()
    {
        $categories = categorieModel::all();
        $presentCategory = categorieModel::where('ID', '6')->get();
        $products = productModel::where('Categorie_ID', '6')->get();

        return view('products', ['categories' => $categories,'category' => $presentCategory, 'products' => $products]);
    } 
}
