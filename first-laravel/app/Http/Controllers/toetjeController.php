<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorieModel;
use App\productModel;

class toetjeController extends Controller
{
    public function ToetjeData()
    {
        $categories = categorieModel::all();
        $presentCategory = categorieModel::where('ID', '7')->get();
        $products = productModel::where('Categorie_ID', '7')->get();

        return view('products', ['categories' => $categories,'category' => $presentCategory, 'products' => $products]);
    } 
}
