<?php


namespace App\Traits;


use Illuminate\Support\Facades\DB;

trait ServiceReview{
    
    // View Service Reviews and Thread
    public function viewServices(){}


    public function serviceReviewCount($station){
        $data = DB::table('rating')
            ->where('station_name', $station)
            ->count();

        return $data;
    }
    
}