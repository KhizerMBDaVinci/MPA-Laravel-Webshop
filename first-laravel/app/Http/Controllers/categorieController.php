<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorieModel;

class categorieController extends Controller
{
    public function Show() 
    {
       $categories = categorieModel::all();
        return view('home', ['categories' => $categories]);
    }

    public function  GetAll()
    {

    }
    
}
