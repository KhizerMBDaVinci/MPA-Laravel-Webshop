<?php

namespace App;
use Session;

class ShoppingCart
{
    
    public $products = null;
    public $quantity = 0;
    public $price = 0;


    public function __construct($oldCart)
    {
        if($oldCart)
        {
            $this->products = $oldCart->products;
            $this->quantity = $oldCart->quantity;
            $this->price = $oldCart->price;
        }
    }

    public function Add($product, $id, $qty)
    {

        $storedProduct = ['ID' => $product[0]->ID, 'Name' => $product[0]->Naam, 'Quantity' => $qty, 'Price' => 0];

        if($this->products)
        {
            if(array_key_exists($id, $this->products))
            {
                $storedProduct = $this->products[$id];
            }
        }

        $storedProduct['Quantity'] = $storedProduct['Quantity'] + $qty;
        $storedProduct['Price'] = $product[0]->Prijs * $storedProduct['Quantity'];

        $this->products[$id] = $storedProduct;
        $this->quantity++;
        $this->price += $product[0]->Prijs;
    }

    public function Remove($product)
    {

    }

    public function GiveProducts()
    {
        return $this->products;
    }

}