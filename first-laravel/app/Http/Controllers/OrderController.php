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

    /**
    *   - Constructor loads in all categories in advance.
    */
    public function __construct()
    {
        $this->categories = Category::all();
    }


    /**
    *   - Function loggedInCheck() checks if a user is logged in, in order to autofill 
    *     the E-mail address.
    */
    public function loggedInCheck()
    {

        if(Auth::check())
        {
            $user = Auth::user();
            $email = $user->email;

            return view('customer_details', ['categories' => $this->categories, 'email' => $email]);
        }
        
        if(!Auth::check())
        {
            return view('customer_details', ['categories' => $this->categories]);
        }

    }

    /**
    *   - Function validateOrder() checks if not a field is left empty.
    */
    public function validateOrder(Request $request)
    {

        $Name = $request->name;
        $Achternaam = $request->last_name;
        $Woonplaats = $request->residence;
        $Street = $request->street;
        $Postcode = $request->postcode;
        $Email = $request->email;
        $Phone = $request->phone;

        /**
        *   - Returns boolean value as validation.
        */
        if($Name == '' || $Achternaam == '' || $Woonplaats == '' || $Street == '' || $Postcode == '' || $Email == '' || $Phone == '')
        {
            return false;
        }

        else
        {
            return true;
        }
    }

    /**
    *   - Function processOrder() validates and stores the order.
    */
    public function processOrder(Request $request)
    {

        /**
        *   - Calls function validateOrder() before storing the order.
        */
        $validated = $this->validateOrder($request);
        if(!$validated)
        {
            $errormsg = "U moet alle velden invullen";
            return view('customer_details', ['categories' => $this->categories, 'Message' => $errormsg]);
        }

        /**
        *   - Calls function storeOrder() after the form is validated.
        */
        $loggedIn = $this->storeOrder($request);

        if($loggedIn == true)
        {
            $loggedIn = "ingelogt";
        }

        if($loggedIn == false)
        {
            $loggedIn = "niet_ingelogt";
        }
        
        $this->emptyCart();
        return redirect()->route('complete-order', ['loggedIn' => $loggedIn]);
    }


    /**
    *   - Function storeOrder() stores the order and the associated information in the database.
    */
    public function storeOrder(Request $request)
    {
        $user = Auth::user();

        $cart = Session::get('cart');
        
        $klant = new Customer();
        $order = new Order();

        $Name = $request->name;
        $Achternaam = $request->last_name;
        $Woonplaats = $request->residence;
        $Street = $request->street;
        $Postcode = $request->postcode;
        $Email = $request->email;
        $Phone = $request->phone;
        
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

        return Auth::check();
    }

    /**
    *   - Function emptyCart() sets the cart members to default values.
    */
    public function emptyCart()
    {
        $cart = Session::get('cart');
    
        $cart->setProducts(null);
        $cart->setPrice(0);
        $cart->setQuantity(0);
    }
}
