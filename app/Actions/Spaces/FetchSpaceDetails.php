<?php

namespace App\Actions\Spaces;

use App\Models\Space;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class FetchSpaceDetails
{
    public static function execute($id)
    {
        $space = Space::with('amenities')->where('id', $id)->get();
        return $space;
    }
}