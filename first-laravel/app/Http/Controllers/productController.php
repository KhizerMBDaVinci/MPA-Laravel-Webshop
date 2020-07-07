<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productModel;

class productController extends Controller
{
    public function ShowAll()
    {
        $products = productModel::all();
        return ['products' => $products];
    }
}
