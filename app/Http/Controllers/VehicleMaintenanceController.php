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


    public function findMaintenanceRecord(){

        return view('pages.dashboard.pages.myshop.findmaintenancerecord')->with(['pages' => 'Find Maintenance Record']);
    }


    public function ivimModel(){

        return view('pages.dashboard.pages.myshop.ivim')->with(['pages' => 'Find IVIM Record']);
    }


    public function performanceModel(){


        return view('pages.dashboard.pages.myshop.performance')->with(['pages' => 'Find Performance Record']);
    }


    public function clientList(){

        $data = $this->getVehicleMaintenance(Auth::user()->busID);

        // dd($data['clients']);

        return view('pages.dashboard.pages.myshop.clientlist')->with(['pages' => 'My Customer List', 'data' => $data['clients']]);
    }


    public function licenceSearch(Request $req){

        try {

        $data = $this->getVehicleMaintenance($req->vehicle_licence);

        if($data['findvehicle'] != null){
            $res = json_encode($data['findvehicle']);
            $message = 'success';
        }
        else{
            $res = "No record";
            $message = 'error';
        }

        $resData = ['data' => $res, 'message' => $message];

        $status = 200;
            
        } catch (\Throwable $th) {
            $resData = ['data' => "Error: ".$th, 'message' => "error"];

            $status = 200;
        }

        



        return $this->returnJSON($resData, $status);
    }

    public function ivimSearch(Request $req){

        try {

        $data = $this->getVehicleMaintenance($req->licence);


        if($data['findivim'] != null){
            $res = json_encode($data['findivim']);
            $message = 'success';
        }
        else{
            $res = "No record found";
            $message = 'info';
        }



        $resData = ['data' => $res, 'message' => $message, 'action' => $req->purpose];

        $status = 200;
            
        } catch (\Throwable $th) {


            $resData = ['data' => "Error: ".$th, 'message' => "error"];

            $status = 200;
        }

        



        return $this->returnJSON($resData, $status);

    }

}
