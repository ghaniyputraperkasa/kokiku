<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{

    public function products(){
      return $this->belongsToMany('App\Model\User\Product');
    }
}
