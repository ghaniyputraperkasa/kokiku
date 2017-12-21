<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class AccountNumber extends Model
{
  public function user(){
    return $this->belongsTo('App\Model\User\User');
  }
}
