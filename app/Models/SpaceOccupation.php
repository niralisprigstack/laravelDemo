<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpaceOccupation extends Model {

    use SoftDeletes;

    protected $table = "space_occupation";
    protected $guarded = [];

    public function inquiries() {
        return $this->belongsTo(Inquiry::class, 'inquire_id');
    }

    public function space() {
        return $this->belongsTo(Space::class, 'space_id');
    }

}
