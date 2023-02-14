<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\Spaces\oneToOne;
use App\Actions\Spaces\FetchSpaceDetails;

class SpaceController extends Controller {

    public function space($id) {

            $spaceid = $id;
            $getDetails = OneToOne::execute($spaceid);
            dd($getDetails);
        
    }


    

    public function show($id, $key = "", $key2 = "") {
        $spaceId = $id;
        $fetchSpaceDetails = FetchSpaceDetails::execute($spaceId, $key, $key2);
        
        dd($fetchSpaceDetails);
    }
}
