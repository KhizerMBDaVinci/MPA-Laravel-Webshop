<?php

namespace App;
use Session;

class ShoppingCart
{
    
    private $products = null;
    private $quantity = 0;
    private $price = 0;

    /**
    *   - Constructor replaces the ShoppingCart with the previous one stored in the session
    *     each time a new is made.
    */
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

    /**
    *   - Function add() stores a product passed from the controller in the shopping cart.
    */
    public function add($product, $id, $qty, $imgNr)
    {

        /**
        *   - The product temporarily stored in an associative array $storedProduct[].
        */
        $storedProduct = ['ID' => $product->ID, 'Name' => $product->Naam, 'Quantity' => 0, 'Price' => 0, 'Image_Nr' => $imgNr];

        /**
        *   - Checks if the index already exists that consists out the product ID.
        */
        if($this->products)
        {
            if(array_key_exists($id, $this->products))
            {
                /**
                *   - Updates the $storedProduct[] with the index of the existing product group matching its own ID.
                */
                $storedProduct = $this->products[$id];
            }
        }

        /**
        *   - Updating the price and quantity of $storedProduct[].
        */
        $storedProduct['Quantity'] += $qty;
        $storedProduct['Price'] = $product->Prijs * $storedProduct['Quantity'];

        /**
        *   - Overwriting the index in $this->products[] with the $storedProduct[].
        *   - Updating $this->price and $this->quantity.
        */
        $this->products[$id] = $storedProduct;
        $this->quantity+=$qty;
        $this->price += $product->Prijs * $qty;

        Session::put('cart', $this);
    }

    /**
    *   - Function checkQty() checks what value $qty received from the controller.
    */
    public function checkQty($product, $id, $qty)
    {
        /**
        *   - Decrements the quantity of the product by 1 if $qty is 1.
        */
        if($qty == 1)
        {
            $this->removeOne($product, $id, $qty);
        }

        /**
        *   - Removes the productGroup if $qty is 0.
        */
        if($qty == 0)
        {
            $this->removeProductGroup($product, $id, $qty);
        }
    }

    /**
    *   - Function removeOne() removes 1 product from the product group.
    */
    public function removeOne($product, $id, $qty)
    {
        /**
        *   - Decrements the quantity and price of the product by its own if the
        *     quantity is higher that 1.
        *   - Updates the $this->quantity and $this->price.
        */
        if($this->products[$id]['Quantity'] > 1)
        {
            $this->products[$id]['Quantity'] -= $qty;
            $this->products[$id]['Price'] -= $product->Prijs;
    
            $this->quantity -= $qty;
            $this->price -= $product->Prijs * $qty;
        }

        /**
        *   - Updates the $this->quantity and $this->price and deletes the index containing
        *     the product.
        */
        else
        {
            $this->quantity -= $qty;
            $this->price -= $this->products[$id]['Price'];
            unset($this->products[$id]);
        }

        Session::put('cart', $this);
    }

    /**
    *   - Function removeProductGroup() removes a product group.
    */
    public function removeProductGroup($product, $id, $qty)
    {
        /**
        *   - Updates the $this->quantity and $this->price and deletes the index containing
        *     the product.
        */
        $this->quantity -= $this->products[$id]['Quantity'];
        $this->price -= $product->Prijs * $this->products[$id]['Quantity'];
        unset($this->products[$id]);

        Session::put('cart', $this);
    }

    /**
    *   - Function empty() returns a condition regarding the presence of the
    *     ShoppingCart in the session.
    */
    public function empty()
    {
        return !Session::has('cart');
    }

    /**
    *   - The following functions are the getters and setters of the ShoppingCart class.
    */
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