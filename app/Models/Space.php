<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Space extends Model {

    use SoftDeletes;

    protected $table = "spaces";
    protected $fillable = ['discount'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function amenities() {
        return $this->belongsToMany(Amenity::class, 'space_amenities');
    }

    public function spacePlan() {
        return $this->belongsTo(SpacePlan::class, 'plan_id');
    }
    
    public function spaceImages() {
        return $this->hasMany(SpaceImage::class)->orderByDesc('isFeatured');
    }
    
    public function tickets() {
        return $this->belongsToMany(Tickets::class, 'tickets');
    }
    
    public function spaceoccupation() {
        return $this->hasMany(SpaceOccupation::class, 'space_id');
    }

}
