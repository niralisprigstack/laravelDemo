<?php

namespace App\Actions\Spaces;

use App\Models\Space;
use Illuminate\Support\Collection;

class FetchSpaceDetails {

    public static function execute($id, $key, $key2) {
        try {
            //return plan, amenities, category, space images, user, tickets
            return self::spaceWithSearch($id, $key, $key2);
            
            return self::spaceWithWhere($id);

            return Space::with([
                        'spacePlan:id,name',
                        'amenities:id,name,category_id',
                        'amenities.category:id,name',
                        'spaceImages:id,space_id,spaceImagePath',
                        'user:id,email',
                        'user.tickets:id,user_id,space_id,title,status'
                    ])->where('id', $id)->get();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    private static function spaceWithWhere($id): Collection {
        return Space::with([
                    'spacePlan:id,name',
                    'amenities:id,name,category_id',
                    'amenities.category:id,name',
                    'user:id,email',
                    'user.tickets' => function ($query) {
                        $query->select('id', 'user_id', 'space_id', 'title', 'status')
                                ->where('id', 61);
                    },
                    'spaceImages' => function ($query) {
                        $query->select('id', 'space_id', 'spaceImagePath', 'isFeatured')
                                ->where('isFeatured', 1)
                                ->orderBy('id', 'desc');
                    },
                ])->where([
                    ['id', $id]
                ])->get();
    }
    
    private static function spaceWithSearch($id, $key, $key2){
        return Space::with([
                    'spacePlan:id,name',
                    'amenities:id,name,category_id',
                    'amenities.category:id,name',
                    'user:id,email',
                    'user.tickets' => function ($query) use ($key) {
                        $query->select('id', 'user_id', 'space_id', 'title', 'status')
                                ->where('id', $key); //61
                    },
                    'spaceImages' => function ($query) use ($key2) {
                        $query->select('id', 'space_id', 'spaceImagePath', 'isFeatured')
                                ->where('isFeatured', $key2) //0
                                ->orderBy('id', 'desc');
                    },
                ])->where([
                    ['id', $id]
                ])->get();
    }

}
