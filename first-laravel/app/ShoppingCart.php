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

    public function Add($product, $id)
    {

        $storedProduct = ['ID' => $id, 'Name' => $product[0]->Naam, 'Quantity' => 0, 'Price' => 0];

        if($this->products)
        {
            if(array_key_exists($id, $this->products))
            {
                $storedProduct = $this->products[$id];
            }
        }
        $this->products[$id] = $storedProduct;

    }

    public function Remove($product)
    {

    }

    public function GiveProducts()
    {
        return $this->products;
    }

}