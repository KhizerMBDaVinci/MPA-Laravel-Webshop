<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorieModel;
use App\ShoppingCart;
use App\productModel;

use Session;

class shoppingCartController extends Controller
{



    public function showCart()
    {
        //Session::flush();
        $categories = categorieModel::all();
        if (!Session::has('cart'))
        {
            return view('shopping-cart', ['categories' => $categories, 'products' => null]);
        }
        $oldcart = Session::get('cart');
        $cart = new ShoppingCart($oldcart);

        return view('shopping-cart', ['categories' => $categories, 'products' => $cart->products, 'totalPrice' => $cart->price, 'totalQuantity' => $cart->quantity]);
    }

    public function Add(Request $request, $id)
    {

        $qty = request('amount');
        if($qty == "+")
        {
            $qty = 1;
        }

        $product = productModel::where('ID', $id)->get();
        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new ShoppingCart($oldCart);
        $cart->Add($product, $id, $qty);
        
        $request->session()->put('cart', $cart); 
        return redirect()->route('shopping-cart');
    }

    public function Remove(Request $request, $id)
    {
        $qty = request('amount');
        if($qty == "-")
        {
            $qty = 1;
        }

        if($qty == "X")
        {
            $qty = 0;
        }

        $product = productModel::where('ID', $id)->get();
        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new ShoppingCart($oldCart);
        $cart->Remove($product, $id, $qty);
        
        $request->session()->put('cart', $cart); 
        
        return redirect()->route('shopping-cart');

    }

    
}
