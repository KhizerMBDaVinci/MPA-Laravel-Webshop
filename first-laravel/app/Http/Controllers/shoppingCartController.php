<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorieModel;
use App\ShoppingCart;
use App\productModel;

class shoppingCartController extends Controller
{

    public function showCart()
    {
        $categories = categorieModel::all();
        $cart = new ShoppingCart();
        if ($cart->empty())
        {
            return view('shopping-cart', ['categories' => $categories, 'products' => null]);
        }

        
        return view('shopping-cart', ['categories' => $categories, 'products' => $cart->GiveProducts(), 'totalPrice' => $cart->GivePrice(), 'totalQuantity' => $cart->GiveQuantity()]);
    }

    public function Add($id)
    {

        $qty = request('amount');

        $product = productModel::where('ID', $id)->get();

        $cart = new ShoppingCart();
        $cart->Add($product, $id, $qty);

        if(request('type') == "toCart")
        {
            return redirect()->route('shopping-cart');
        }

        else if(request('type') == "Toevoegen")
        {
            return redirect()->route('myhome');
        }

        else if(request('type') == "ToevoegenC")
        {
            $category = categorieModel::where('ID', $product[0]->Categorie_ID)->get();
            return redirect()->route('category', ['id' => $category[0]->ID]);
        }
        
    }

    public function Remove($id)
    {
        $qty = request('amount');

        $product = productModel::where('ID', $id)->get();

        $cart = new ShoppingCart();
        $cart->Remove($product, $id, $qty);
        
        return redirect()->route('shopping-cart');

    }
}
