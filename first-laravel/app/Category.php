<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categorieen';

    public function products()
    {
        return $this->hasMany('App\Product', 'Categorie_ID', 'ID');
    }
}
