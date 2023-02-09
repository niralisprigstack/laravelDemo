<?php

namespace App\Http\Controllers;

use App\Actions\Spaces\FetchSpaceDetails;

class SpaceController extends Controller
{
    public function show($id, $key = "", $key2 = "") {
        $spaceId = $id;
        $fetchSpaceDetails = FetchSpaceDetails::execute($spaceId, $key, $key2);
        
        dd($fetchSpaceDetails);
    }
}
