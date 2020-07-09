<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\ShoppingCartClass;

class shoppingCartModel extends Model
{
    public $cart = new ShoppingCart();
}
