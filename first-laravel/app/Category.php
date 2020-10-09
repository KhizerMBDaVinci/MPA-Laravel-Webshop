<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
    *   - Table stated manually.
    */
    protected $table = 'categorieen';

    /**
    *   - Function products() declares a one to many relationship between models
    *     'Category' and 'Product'.
    */
    public function products()
    {
        return $this->hasMany('App\Product', 'Categorie_ID', 'ID');
    }
}
