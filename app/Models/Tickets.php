<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tickets extends Model {

    protected $table = "tickets";    

    public function space() {
        return $this->belongsTo('App\Space', 'space_id');
    }

    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }

}
