<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorieModel;
use App\productModel;

class drinkenController extends Controller
{
    public function DrinkenData()
    {
        $categories = categorieModel::all();
        $presentCategory = categorieModel::where('ID', '10')->get();
        $products = productModel::where('Categorie_ID', '10')->get();

        return view('products', ['categories' => $categories,'category' => $presentCategory, 'products' => $products]);
    } 
}
