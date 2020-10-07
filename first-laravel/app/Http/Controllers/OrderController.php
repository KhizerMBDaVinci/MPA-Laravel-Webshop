<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use App\Customer;
use App\Order;
use App\OrderDetails;
use Session;

class OrderController extends Controller
{

    private $categories;
    public function __construct()
    {
        $this->categories = Category::all();
    }

    public function customerForm()
    {
        if(Auth::check())
        {
            $user = Auth::user();
            $name = $user->name;
            $email = $user->email;

            return view('customer_details', ['categories' => $this->categories, 'name' => $name, 'email' => $email]);
        }
        
        if(!Auth::check())
        {
            return view('customer_details', ['categories' => $this->categories]);
        }

    }

    public function validateOrder()
    {

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
            return view('customer_details', ['categories' => $this->categories, 'Message' => $errormsg]);
        }

        else
        {
            $this->storeOrder();
            
            $cart = Session::get('cart');
            $cart->setProducts(null);
            $cart->setPrice(0);
            $cart->setQuantity(0);

            return redirect()->route('complete-order');
        }
    }

    public function storeOrder()
    {
        $user = Auth::user();

        $cart = Session::get('cart');
        
        $klant = new Customer();
        $order = new Order();

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

        if(Auth::check() == false)
        {
            $order->Klant_ID = $klant->getKey();
            $order->Totaal_Bedrag = $cart->getPrice();
            $order->username = ' ';
            $order->save();  
        }

        if(Auth::check() == true)
        {
            $order->Klant_ID = $klant->getKey();
            $order->Totaal_Bedrag = $cart->getPrice();
            $order->username = $user->name;
            $order->save();  
        }

        foreach($cart->getProducts() as $product)
        {
            $order_details = new OrderDetails();
            $order_details->Order_ID = $order->getKey();
            $order_details->Product_ID = $product['ID'];
            $order_details->Prijs = $product['Price'];
            $order_details->Aantal = $product['Quantity'];
            $order_details->save();
        }
    }
}
