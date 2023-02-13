<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model {

    protected $table = "inquiries";
    protected $guarded = [];

    public function spaceoccupation() {
        return $this->hasMany(SpaceOccupation::class, 'inquire_id');
    }

    public function space() {
        return $this->belongsTo(Space::class, 'space_id');
    }

}
