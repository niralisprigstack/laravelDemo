<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpaceAmenity extends Model
{
    protected $table='space_amenities'; //
    
    public function space() {
        return $this->belongsTo('App\Space');
    }
    public function amenity() {
        return $this->belongsTo('App\Amenity');
    }
}
