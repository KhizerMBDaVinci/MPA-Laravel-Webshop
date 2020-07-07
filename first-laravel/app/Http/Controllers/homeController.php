<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorieModel;
use App\productModel;

class homeController extends Controller
{
    public function HomeData()
    {
        $categories = categorieModel::all();
        $products = productModel::all();

        return view('home', ['categories' => $categories,'products' => $products]);
    } 
}
