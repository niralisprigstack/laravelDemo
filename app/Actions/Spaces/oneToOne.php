<?php

namespace App\Actions\Spaces;

use App\Models\Space;
use App\Models\City;
use App\Models\User;
use App\Models\SpacePlan;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class OneToOne
{
    public static function execute($id)
    {
        try {
        return Space::with('user','spaceplan','city')->findOrFail($id);
        } catch (Exception $e) {
        return $e->getMessage();
      }
    }
}