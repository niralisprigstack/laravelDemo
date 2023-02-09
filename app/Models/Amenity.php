<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    protected $table="amenities";//
    
    public function spaces(){
        return $this->belongsToMany('App\Space', 'space_amenities');
    }
}
