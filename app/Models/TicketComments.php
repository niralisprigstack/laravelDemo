<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketComments extends Model
{
    //
    protected $table = "ticket_comments";
    public function ticktes(){
         return $this->belongsTo('App\Tickets');
     }
    
    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
