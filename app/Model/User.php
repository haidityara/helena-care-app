<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
//    public $timestamps = false;

    public function getAdoption(){
        return $this->hasMany('App\Model\Adoption','id');
    }
}
