<?php

namespace App\Http\Controllers;

use App\Actions\Tickets\FetchTicketDetails;
use App\Actions\Tickets\ManyToOneRel;

class TicketController extends Controller
{
    public function show($id) {
        $spaceId = $id;
        $fetchTicketDetails = FetchTicketDetails::execute($spaceId);
        
        dd($fetchTicketDetails);
    }



    public function showtickets() {
        $tickets = ManyToOneRel::execute();
        
        dd($tickets);
    }
}
