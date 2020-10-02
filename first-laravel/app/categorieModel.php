<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorieModel extends Model
{
    protected $table = 'categorieen';

    public function Products()
    {
        return $this->hasMany('App\productModel', 'Categorie_ID', 'ID');
    }
}
