<?php

namespace App\Actions\Tickets;

use App\Models\Space;
use App\Models\City;
use App\Models\Tickets;
use App\Models\User;
use App\Models\SpacePlan;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class ManyToOneRel
{
    public static function execute()
    {
        try {
        return Tickets::with([
            'space:id,user_id,space_name' ,
            
            'space.user' =>function ($query) {
                $query->select('id','first_name');
                // ->where('id','tickets.user_id');
            },
        ])->where('space_id', 178)->select('id', 'space_id', 'user_id')->get();
        } catch (Exception $e) {
        return $e->getMessage();
      }
    }
}