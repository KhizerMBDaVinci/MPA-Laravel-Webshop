<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorieModel;
use App\productModel;

class detailsController extends Controller
{
    public function ProductData()
    {
        $id = request('id');

        $categories = categorieModel::all();
        $product = productModel::where('ID', $id)->get();

        return view('details', ['product' => $product, 'categories' => $categories]);
    }

}
