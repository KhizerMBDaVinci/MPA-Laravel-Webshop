<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
    * Table name stated manually.
    */
    protected $table = 'categories';

    /**
    * Function products() declares a one to many relationship between models
    * 'Category' and 'Product'.
    */
    public function products()
    {
        return $this->hasMany('App\Product', 'category_id', 'id');
    }
}
