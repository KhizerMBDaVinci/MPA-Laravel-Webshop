<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
    *   - Table stated manually.
    *   - Table ID is set to increment automatically.
    */
    protected $table = 'orders';
    public $incrementing = true;
}
