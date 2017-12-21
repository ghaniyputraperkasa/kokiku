<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{

  public function product(){
    return $this->belongsTo('App\Model\User\Product');
  }
}
