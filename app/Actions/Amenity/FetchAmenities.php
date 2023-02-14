<?php

namespace App\Actions\Amenity;

use App\Models\Space;
use App\Models\City;
use App\Models\Amenity;
use App\Models\SpaceAmenity;
use App\Models\User;
use App\Models\SpacePlan;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class FetchAmenities
{
    public static function execute()
    {
        try {
            $spaceids = Space::where('is_active', '1')->get(['id'])->pluck('id');

            return SpaceAmenity::with([
                'space:id,user_id,space_name',
                'amenity:id,name,category_id',
            ])->whereExists(function ($query1) use ($spaceids) {
                $query1->whereIn('id', $spaceids);
            })->select('id', 'space_id', 'amenity_id')->get();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
