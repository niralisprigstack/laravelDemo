<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpaceImage extends Model
{
    protected $table="space_images";
    
    public function space(){
        return $this->belongsTo(Space::class, 'space_id');
    }
}
