<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorieModel;

class OrderController extends Controller
{
    public function CustomerForm()
    {
        $categories = categorieModel::all();

        return view('customer_details', ['categories' => $categories]);
    }

    public function ValidateOrder()
    {
        $categories = categorieModel::all();

        $Name = $_POST['name'];
        $Achternaam = $_POST['last-name'];
        $Woonplaats = $_POST['residence'];
        $Street = $_POST['street'];
        $Postcode = $_POST['postcode'];
        $Email = $_POST['email'];
        $phone = $_POST['phone'];

        $errormsg = "U moet alle velden invullen";

        if(empty($Name) || empty($Achternaam) || empty($Woonplaats) || empty($Street) || empty($Postcode) || empty($Email) || empty($Phone))
        {
            $this->CustomerForm();
        }

        else
        {
            return view('home');
        }
    }
}
