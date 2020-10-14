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
    * Constructor loads in all categories in advance.
    */
    public function __construct()
    {
        $this->categories = Category::all();
    }


    /**
    * Function loggedInCheck() checks if a user is logged in, in order to autofill 
    * the E-mail address.
    */
    public function loggedInCheck()
    {

        if(Auth::check())
        {
            $user = Auth::user();
            $email = $user->email;

            return view('customer-details', ['categories' => $this->categories, 'email' => $email]);
        }
        
        if(!Auth::check())
        {
            return view('customer-details', ['categories' => $this->categories]);
        }

    }

    /**
    * Function validateOrder() checks if not a field is left empty.
    */
    public function validateOrder(Request $request)
    {

        $name = $request->name;
        $lastName = $request->last_name;
        $residence = $request->residence;
        $street = $request->street;
        $postalCode = $request->postal_code;
        $email = $request->email;
        $phoneNr = $request->phone_nr;

        /**
        * Returns boolean value as validation.
        */
        if($name == '' || $lastName == '' || $residence == '' || $street == '' || $postalCode == '' || $email == '' || $phoneNr == '')
        {
            return false;
        }

        else
        {
            return true;
        }
    }

    /**
    * Function processOrder() validates and stores the order.
    */
    public function processOrder(Request $request)
    {

        /**
        * Calls function validateOrder() before storing the order.
        */
        $validated = $this->validateOrder($request);
        if(!$validated)
        {
            $errormsg = "U moet alle velden invullen";
            return view('customer-details', ['categories' => $this->categories, 'message' => $errormsg]);
        }

        /**
        * Calls function storeOrder() after the form is validated.
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
    * Function storeOrder() stores the order and the associated information in the database.
    */
    public function storeOrder(Request $request)
    {
        $user = Auth::user();

        $cart = Session::get('cart');
        
        $customer = new Customer();
        $order = new Order();

        $name = $request->name;
        $lastName = $request->last_name;
        $residence = $request->residence;
        $street = $request->street;
        $postalCode = $request->postal_code;
        $email = $request->email;
        $phoneNr = $request->phone_nr;
        
        $customer->name = $name;
        $customer->last_name = $lastName;
        $customer->residence = $residence;
        $customer->street = $street;
        $customer->postal_code = $postalCode;
        $customer->email = $email;
        $customer->phone_nr = $phoneNr;
        $customer->save();

        if(Auth::check() == false)
        {
            $order->customer_id = $klant->getKey();
            $order->total_amount = $cart->getPrice();
            $order->username = ' ';
            $order->save();  
        }

        if(Auth::check() == true)
        {
            $order->customer_id = $customer->getKey();
            $order->total_amount = $cart->getPrice();
            $order->username = $user->name;
            $order->save();  
        }

        foreach($cart->getProducts() as $product)
        {
            $order_details = new OrderDetails();
            $order_details->order_id = $order->getKey();
            $order_details->product_id = $product['id'];
            $order_details->price = $product['price'];
            $order_details->amount = $product['quantity'];
            $order_details->save();
        }

        return Auth::check();
    }

    /**
    * Function emptyCart() sets the cart members to default values.
    */
    public function emptyCart()
    {
        $cart = Session::get('cart');
    
        $cart->setProducts(null);
        $cart->setPrice(0);
        $cart->setQuantity(0);
    }
}
