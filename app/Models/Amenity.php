<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Amenity extends Model {

    protected $table = "amenities";

    public function spaces() {
        return $this->belongsToMany(Space::class, 'space_amenities');
    }
    
    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
