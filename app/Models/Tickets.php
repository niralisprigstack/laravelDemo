<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model {

    protected $table = "tickets";    

    public function space() {
        return $this->belongsTo('App\Models\Space', 'space_id');
    }

    public function user() {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

}
