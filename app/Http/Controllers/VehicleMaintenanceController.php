<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;


use App\User;

use App\Traits\ShopManagement;

class VehicleMaintenanceController extends Controller
{


    use ShopManagement;

    public function index(){

        $data = $this->getVehicleMaintenance(Auth::user()->station_name);


        return view('pages.dashboard.pages.myshop.index')->with(['pages' => 'Vehicle Maintenance', 'data' => $data]);
    }
}
