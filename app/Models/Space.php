<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Space extends Model {

    use SoftDeletes;

    protected $table = "spaces";
    protected $fillable = ['discount'];

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function amenities() {
        return $this->belongsToMany('App\Amenity', 'space_amenities');
    }

    public function spaceplan() {
        return $this->belongsTo('App\SpacePlan', 'plan_id');
    }

}
