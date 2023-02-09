<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = "categories";

    public function space() {
        return $this->belongsTo(Space::class, 'space_id');
    }
    
    public function amenities() {
        return $this->belongsToMany(Amenity::class, 'amenity_id');
    }

}
