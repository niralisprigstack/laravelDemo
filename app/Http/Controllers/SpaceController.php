<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\Spaces\oneToOne;

class SpaceController extends Controller {

    public function space($id) {
        try {
            $spaceid = $id;
            $getDetails = OneToOne::execute($spaceid);
            dd($getDetails);
        } catch (Exception $ex) {
            dd(error);
        }
    }

}
