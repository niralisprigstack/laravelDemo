<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\Amenity\FetchAmenities;

class AmenityController extends Controller
{
    public function show() {
        $fetchamenity= FetchAmenities::execute();
        
        dd($fetchamenity);
    }
}
