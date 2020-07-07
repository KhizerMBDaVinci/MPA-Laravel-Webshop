<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorieModel;

class categorieController extends Controller
{
    public function ShowAll() 
    {
       $categories = categorieModel::all();
        return ['categories' => $categories];
    }
    
}
