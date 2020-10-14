<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
    *   - Table stated manually.
    *   - Table ID is set to increment automatically.
    */
    protected $table = 'customer';
    public $incrementing = true;
}
