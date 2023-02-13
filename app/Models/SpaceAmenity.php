<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpaceAmenity extends Model {

    protected $table = 'space_amenities';

    public function space() {
        return $this->belongsTo(Space::class, 'space_id');
    }

    public function amenity() {
        return $this->belongsTo(Amenity::class, 'amenity_id');
    }

}
