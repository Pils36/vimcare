<?php

namespace App\Traits;

use App\Classes\VehicleMaintenance;

trait ShopManagement{


    // Get Vehicle Maintenace Info
    public function getVehicleMaintenance(){


        $getVm = new VehicleMaintenance();

        $data = $getVm->prepareVehicleMaintenance();

        dd($data);
    } 


}