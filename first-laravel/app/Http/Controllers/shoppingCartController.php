<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\ShoppingCart;
use App\Product;

class shoppingCartController extends Controller
{

    public function showCart()
    {
        $categories = Category::all();
        $cart = new ShoppingCart();
        if ($cart->empty())
        {
            return view('shopping-cart', ['categories' => $categories, 'products' => null]);
        }

        
        return view('shopping-cart', ['categories' => $categories, 'products' => $cart->getProducts(), 'totalPrice' => $cart->getPrice(), 'totalQuantity' => $cart->getQuantity()]);
    }

    public function add($id)
    {

        $qty = request('amount');

        $product = Product::find($id);

        $cart = new ShoppingCart();
        $cart->add($product, $id, $qty, $product->Image_Nr);

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
            $category = Category::find($product->Categorie_ID);
            return redirect()->route('category', ['id' => $category->ID]);
        }
        
    }

    public function remove($id)
    {
        $qty = request('amount');

        $product = Product::find($id);

        $cart = new ShoppingCart();
        $cart->checkQty($product, $id, $qty);
        
        return redirect()->route('shopping-cart');

    }
}
