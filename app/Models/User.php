<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class User extends Model  {

   

    protected $softDelete = true;
    protected $fillable = ['name', 'email', 'password'];

    public function spaces() {
        return $this->hasMany(Space::class,'space_id');
    }
    
    public function tickets() {
        return $this->hasMany(Tickets::class, 'user_id')->orderBy('id', 'desc');
    }

}
