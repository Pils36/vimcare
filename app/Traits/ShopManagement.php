<?php

namespace App\Traits;

use App\Classes\VehicleMaintenance;

use Auth;

trait ShopManagement{


    // Get Vehicle Maintenace Info
    public function getVehicleMaintenance($station){


        $getVm = new VehicleMaintenance();

        $data = array(
            'completeTrans' => $getVm->completedTransactions($station),
            'findvehicle' => $getVm->getmaintenanceRecord($station),
            'findivim' => $getVm->getIvim($station),
            'clients' => $getVm->myClientList($station),
        );

        return $data;

    } 


}