<?php

namespace App\Classes;


use Illuminate\Support\Facades\DB;

use Auth;

class VehicleMaintenance{


    // Prepare Estimates, Work Order, Diagnostics, Maintenance Record
    public function prepareVehicleMaintenance(){
        
    }


    // Find Mainenance Record
    public function maintenanceRecord(){

    }

    // Register a Vehicle
    public function vehicleRegistration(){

    }


    // Get IVIM and Performance
    public function getPerformance(){

    }

    // Get Client list
    public function clientList(){
        
    }

    // Get Unprocessed TRansaction
    public function unprocessedTransactions(){

    }


    // Get Completed TRansaction
    public function completedTransactions($station){

        $completed = DB::table('estimate')
        ->where('update_by', $station)->where('work_order', 1)->orWhere('diagnostics', 1)->orWhere('maintenance', 1)
        ->orderBy('created_at', 'DESC')->count();

        return $completed;
    }

}