<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Amenity extends Model {

    protected $table = "amenities";

    public function spaces() {
        return $this->belongsToMany('App\Models\Space', 'space_amenities');
    }

}
