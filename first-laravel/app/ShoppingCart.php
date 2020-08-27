<?php

namespace App;
use Session;

class ShoppingCart
{
    
    public $products;
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
        array_push($this->products, $product[0]);
    

    }

    public function Remove($product)
    {

    }

    public function GiveProducts()
    {
        return $this->products;
    }

}