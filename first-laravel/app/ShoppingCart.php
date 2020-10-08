<?php

namespace App;
use Session;

class ShoppingCart
{
    
    private $products = null;
    private $quantity = 0;
    private $price = 0;


    public function __construct()
    {
    
        if(Session::has('cart'))
        {
            $oldCart = Session::get('cart');
            $this->products = $oldCart->products;
            $this->quantity = $oldCart->quantity;
            $this->price = $oldCart->price;
        }
    }

    public function add($product, $id, $qty, $imgNr)
    {

        $storedProduct = ['ID' => $product->ID, 'Name' => $product->Naam, 'Quantity' => 0, 'Price' => 0, 'Image_Nr' => $imgNr];

        if($this->products)
        {
            if(array_key_exists($id, $this->products))
            {
                $storedProduct = $this->products[$id];
            }
        }

        $storedProduct['Quantity'] += $qty;
        $storedProduct['Price'] = $product->Prijs * $storedProduct['Quantity'];

        $this->products[$id] = $storedProduct;
        $this->quantity+=$qty;
        $this->price += $product->Prijs * $qty;

        Session::put('cart', $this);
    }

    public function checkQty($product, $id, $qty)
    {
        if($qty == 1)
        {
            $this->removeOne($product, $id, $qty);
        }

        if($qty == 0)
        {
            $this->removeProductGroup($product, $id, $qty);
        }
    }

    public function removeOne($product, $id, $qty)
    {
        
        if($this->products[$id]['Quantity'] > 1)
        {
            $this->products[$id]['Quantity'] -= $qty;
            $this->products[$id]['Price'] -= $product->Prijs;
    
            $this->quantity -= $qty;
            $this->price -= $product->Prijs * $qty;
        }

        else
        {
            $this->quantity -= $qty;
            $this->price -= $this->products[$id]['Price'];
            unset($this->products[$id]);
        }

        Session::put('cart', $this);
    }

    public function removeProductGroup($product, $id, $qty)
    {
        $this->quantity -= $this->products[$id]['Quantity'];
        $this->price -= $product->Prijs * $this->products[$id]['Quantity'];
        unset($this->products[$id]);

        Session::put('cart', $this);
    }

    public function empty()
    {
        return !Session::has('cart');
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setProducts($newProducts)
    {
        $this->products = $newProducts;
    }

    public function setPrice($newPrice)
    {
        $this->price = $newPrice;
    }

    public function setQuantity($newQty)
    {
        $this->quantity = $newQty;
    }

}