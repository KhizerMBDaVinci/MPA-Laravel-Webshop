<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    /**
    *   - Table stated manually.
    *   - Timestamps will be added automatically to this table.
    */
    protected $table = 'order_details';

    public $timestamps = false;
}
