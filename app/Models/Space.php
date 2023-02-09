<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Space extends Model {

    use SoftDeletes;

    protected $table = "spaces";
    protected $fillable = ['discount'];

    public function user() {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function amenities() {
        return $this->belongsToMany('App\Models\Amenity', 'space_amenities');
    }

    public function spaceplan() {
        return $this->belongsTo('App\Models\SpacePlan', 'plan_id');
    }

}
