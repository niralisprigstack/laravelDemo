<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;

class User extends Model implements Authenticatable {

    use Billable;
    use AuthenticableTrait;

    protected $softDelete = true;
    protected $fillable = ['name', 'email', 'password'];

    public function spaces() {
        return $this->hasMany('App\Models\Space');
    }
    
    public function tickets() {
        return $this->hasMany('App\Models\Tickets', 'user_id')->orderBy('id', 'desc');
    }

}
