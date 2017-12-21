<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{

    public function user(){
      return $this->belongsTo('App\Model\User\User');
    }
}
