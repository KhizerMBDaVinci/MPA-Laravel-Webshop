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

        return view('shopping-cart', ['categories' => $categories, 'products' => $cart->GiveProducts(), 'totalPrice' => $cart->GivePrice(), 'totalQuantity' => $cart->GiveQuantity()]);
    }

    public function Add(Request $request, $id)
    {

        $qty = request('amount');
        if($qty == "+")
        {
            $qty = 1;
        }

        if($qty == "Toevoegen")
        {
            $qty = 1;
        }

        if($qty == "ToevoegenC")
        {
            $qty = 1;
        }

        $product = productModel::where('ID', $id)->get();
        $oldCart = Session::has('cart') ? Session::get('cart') : null;

        $cart = new ShoppingCart($oldCart);
        $cart->Add($product, $id, $qty);
        
        $request->session()->put('cart', $cart); 
        
        if(request('amount') == "1")
        {
            return redirect()->route('shopping-cart');
        }

        else if(request('amount') == "Toevoegen")
        {
            return redirect()->route('myhome');
        }

        else if(request('amount') == "+")
        {
            return redirect()->route('shopping-cart');
        }

        else if(request('amount') == "ToevoegenC")
        {
            $category = categorieModel::where('ID', $product[0]->Categorie_ID)->get();
            return redirect()->route('category', ['id' => $category[0]->ID]);
        }
        
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
