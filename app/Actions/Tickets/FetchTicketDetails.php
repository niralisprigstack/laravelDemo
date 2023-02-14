<?php

namespace App\Actions\Tickets;

use App\Models\Space;
use App\Models\Inquiry;
use Illuminate\Support\Collection;
use DB;

class FetchTicketDetails {

    public static function execute($id) {
        try {
           $test = Inquiry::with([
                       'space:id,space_name', 
                       //'spaceoccupation:id,space_id,inquire_id,start_date,end_date',
                       'spaceoccupation' => function ($query) {
                           $query->select('id', 'space_id', 'inquire_id', 'start_date', 'end_date')
                                //    ->where('space_id','inquiries.space_id')
                                //    ->where('space_occupation.inquire_id','inquiries.id')
                        //             ->where('space', function ($q) use ($query) {
                        //                $q->where('space_id', $query->space_id);
                        //    });
                                   //->where('space_occupation.inquire_id','inquiries.id')
                               ; //61
                       },
                   ])
                   ->where('user_id', 212)
                   ->get();
        //    foreach($test as $t){
        //        var_dump($t->spaceoccupation->count());
        //    }
            return $test;
            $Tickets="SELECT DISTINCT i.id, s.space_name as space_name,
            s.id as sid,so.start_date,so.end_date FROM inquiries i 
            JOIN spaces s on i.space_id=s.id
            left JOIN space_occupation so on so.space_id = i.space_id and so.inquire_id = i.id             
            where i.user_id=212 
            ";
            $Tickets = (DB::select(DB::raw($Tickets)));
            return $Tickets;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

}
