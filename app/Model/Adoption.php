<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    public function getUser(){
        return $this->belongsTo('App\Model\User','user_id');
    }

    public function getCategoryAdoption(){
        return $this->belongsTo('App\Model\CategoryAdoption','category_id');
    }

    public function getOrphanage(){
        return $this->belongsTo('App\Model\Orphanage','orphanage_id');
    }

}
