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
            $spaceids = Space::where('is_active', '1')->get(['id'])->pluck('id');
            return Tickets::with([
                'space:id,user_id,space_name',
                'space.user' => function ($query) {
                    $query->select('id', 'first_name');                    
                },
            ])->whereIn('space_id', $spaceids)->select('id', 'space_id', 'user_id')->get();            
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
