<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
  public function user(){
    return $this->belongsTo('App\Model\User\User');
  }

  public function products(){
    return $this->belongsToMany('App\Model\User\Product');
  }
}
