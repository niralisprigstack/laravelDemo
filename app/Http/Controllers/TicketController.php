<?php

namespace App\Http\Controllers;

use App\Actions\Tickets\FetchTicketDetails;

class TicketController extends Controller
{
    public function show($id) {
        $spaceId = $id;
        $fetchTicketDetails = FetchTicketDetails::execute($spaceId);
        
        dd($fetchTicketDetails);
    }
}
