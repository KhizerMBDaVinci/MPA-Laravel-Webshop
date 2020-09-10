<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorieModel;
use App\klantenModel;
use App\ordersModel;
use App\order_detailsModel;
use Session;

class OrderController extends Controller
{

    private $loggedIn = false;

    public function CustomerForm()
    {
        $categories = categorieModel::all();

        return view('customer_details', ['categories' => $categories]);
    }

    public function ValidateOrder()
    {

        $categories = categorieModel::all();

        $errormsg = "U moet alle velden invullen";

        $Name = $_POST['name'];
        $Achternaam = $_POST['last-name'];
        $Woonplaats = $_POST['residence'];
        $Street = $_POST['street'];
        $Postcode = $_POST['postcode'];
        $Email = $_POST['email'];
        $Phone = $_POST['phone'];

        if($Name == '' || $Achternaam == '' || $Woonplaats == '' || $Street == '' || $Postcode == '' || $Email == '' || $Phone == '')
        {
            return view('customer_details', ['categories' => $categories, 'Message' => $errormsg]);
        }

        else
        {
           $this->StoreOrder();
           Session::flush();
           return redirect()->route('complete-order');
        }
    }

    public function StoreOrder()
    {
        $cart = Session::get('cart');
        
        $klant = new klantenModel();
        $order = new ordersModel();

        $Name = $_POST['name'];
        $Achternaam = $_POST['last-name'];
        $Woonplaats = $_POST['residence'];
        $Street = $_POST['street'];
        $Postcode = $_POST['postcode'];
        $Email = $_POST['email'];
        $Phone = $_POST['phone'];
        
        $klant->Naam = $Name;
        $klant->Achternaam = $Achternaam;
        $klant->Woonplaats = $Woonplaats;
        $klant->Straat = $Street;
        $klant->Postcode = $Postcode;
        $klant->Emailadres = $Email;
        $klant->Telefoonnummer = $Phone;
        $klant->save();

        if($this->loggedIn == false)
        {
            $order->Klant_ID = $klant->getKey();
            $order->Totaal_Bedrag = $cart->GivePrice();
            $order->username = ' ';
            $order->save();  
        }

        foreach($cart->GiveProducts() as $product)
        {
            $order_details = new order_detailsModel();
            $order_details->Order_ID = $order->getKey();
            $order_details->Product_ID = $product['ID'];
            $order_details->Prijs = $product['Price'];
            $order_details->Aantal = $product['Quantity'];
            $order_details->save();
        }
    }
}
