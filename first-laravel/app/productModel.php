<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    protected $table = 'producten';

    public function Category()
    {
        return $this->belongsTo('App\categorieModel');
    }

}
