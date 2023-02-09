<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{    

    protected $softDelete = true;
    protected $fillable = ['name', 'email', 'password'];

    public function spaces() {
        return $this->hasMany('App\Models\Space');
    }
    
    public function tickets() {
        return $this->hasMany('App\Models\Tickets', 'user_id')->orderBy('id', 'desc');
    }

}
