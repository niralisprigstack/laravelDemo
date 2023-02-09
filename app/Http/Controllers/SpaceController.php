<?php

namespace App\Http\Controllers;

use App\Actions\Spaces\FetchSpaceDetails;

class SpaceController extends Controller
{
    public function show($id) {
        $spaceId = $id;
        $fetchSpaceDetails = FetchSpaceDetails::execute($spaceId);
        dd($fetchSpaceDetails);
    }
}
