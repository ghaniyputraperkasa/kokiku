<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

  public function shop(){
    return $this->belongsTo('App\Model\User\Shop');
  }

  public function productImages(){
    return $this->belongsToMany('App\Model\User\ProductImage');
  }
}
