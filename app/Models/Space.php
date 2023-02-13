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

    public function spaceplan() {
        return $this->belongsTo(SpacePlan::class, 'plan_id');
    }
      public function city() {
        return $this->belongsTo(City::class,'city_id');
    }

}
