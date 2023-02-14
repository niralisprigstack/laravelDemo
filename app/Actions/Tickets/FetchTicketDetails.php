<?php

namespace App\Actions\Tickets;

use App\Models\Space;
use App\Models\Inquiry;
use Illuminate\Support\Collection;
use DB;

class FetchTicketDetails
{

    public static function execute($id)
    {
        try {
            return Inquiry::with([
                'space:id,space_name',
                'spaceoccupation:id,space_id,inquire_id,start_date,end_date'
            ])
            ->where('user_id', 212)
            ->get();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
