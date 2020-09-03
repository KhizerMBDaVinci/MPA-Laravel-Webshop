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

        $categories = categorieModel::all();
        if (!Session::has('cart'))
        {
            return view('shopping-cart', ['categories' => $categories, 'products' => null]);
        }
        $oldcart = Session::get('cart');
        $cart = new ShoppingCart($oldcart);

        return view('shopping-cart', ['categories' => $categories, 'products' => $cart->products, 'totalPrice' => $cart->price]);
    }

    public function Add(Request $request, $id)
    {

        $product = productModel::where('ID', $id)->get();
        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new ShoppingCart($oldCart);
        $cart->Add($product, $id);
        
        $request->session()->put('cart', $cart); 
        return redirect()->route('home');
    }

    public function Remove()
    {
        
    }
}
