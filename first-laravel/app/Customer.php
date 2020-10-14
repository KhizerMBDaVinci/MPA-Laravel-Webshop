<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
    * Table name stated manually.
    * Table ID is set to increment automatically.
    */
    protected $table = 'customers';
    public $incrementing = true;
}
