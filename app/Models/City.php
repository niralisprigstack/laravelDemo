<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes;
    //
 
    public function spaces(){
        return $this->hasMany(Space::class,'city_id')->where('is_active','1');
    }

}
