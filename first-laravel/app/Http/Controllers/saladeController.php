<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorieModel;
use App\productModel;

class saladeController extends Controller
{
    public function SaladeData()
    {
        $categories = categorieModel::all();
        $presentCategory = categorieModel::where('ID', '9')->get();
        $products = productModel::where('Categorie_ID', '9')->get();

        return view('products', ['categories' => $categories,'category' => $presentCategory, 'products' => $products]);
    }
}
