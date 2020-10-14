<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\ShoppingCart;
use App\Product;

class shoppingCartController extends Controller
{

    /**
    * Function showCart() returns view displaying the products in the shopping cart.
    */
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

    /**
    * Function add() passes the product to the ShoppingCart.
    */
    public function add($id)
    {

        $qty = request('amount');

        /**
        * Retrieving the product from the database, and adds to the shopping cart.
        */
        $product = Product::find($id);

        $cart = new ShoppingCart();
        $cart->add($product, $id, $qty, $product->image_nr);

        /**
        * Redirecting to the corresponding view.
        */
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
            $category = Category::find($product->category_id);
            return redirect()->route('category', ['id' => $category->id]);
        }
        
    }

    /**
    * Function remove() initiates the removal of a product from the ShoppingCart.
    */
    public function remove($id)
    {
        $qty = request('amount');

        $product = Product::find($id);

        $cart = new ShoppingCart();
        $cart->checkQty($product, $id, $qty);
        
        return redirect()->route('shopping-cart');

    }
}
