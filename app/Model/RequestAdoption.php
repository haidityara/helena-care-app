<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RequestAdoption extends Model
{
    protected $table = "requests_adoption";

    public function getAdoption(){
        return $this->belongsTo('App\Model\Adoption','adoption_id');
    }
}
