<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorieModel;
use App\productModel;

class MyhomeController extends Controller
{
    public function HomeData()
    {
        $categories = categorieModel::all();
        $products = productModel::all();

        return view('Myhome', ['categories' => $categories,'products' => $products]);
    } 
}
