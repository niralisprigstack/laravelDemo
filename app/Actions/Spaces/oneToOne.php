<?php

namespace App\Actions\Spaces;

use App\Models\Space;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class OneToOne
{
    public static function execute($id)
    {
        echo 'here' . $id;return;
//        return DiscountCard::query()
//            ->where('Type', DiscountCard::DISCOUNT)
//            ->where('Expires', '>', Carbon::today()->subDays(30))
//            ->orderBy('Code')
//            ->get();
    }
}