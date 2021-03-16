<?php

namespace App\Classes;


use Illuminate\Support\Facades\DB;

use Auth;

class VehicleMaintenance{


    // Prepare Estimates, Work Order, Diagnostics, Maintenance Record
    public function prepareVehicleMaintenance(){
        
    }


    // Find Mainenance Record
    public function getmaintenanceRecord($licence){
        


        $getLicence = DB::table('vehicleinfo')
            ->join('business', 'vehicleinfo.busID', '=', 'business.busID')->where('vehicle_licence', $licence)
            ->orderBy('vehicleinfo.created_at', 'DESC')->get();

        if(count($getLicence) > 0){

            $getLicencez = DB::table('vehicleinfo')
            ->join('business', 'vehicleinfo.busID', '=', 'business.busID')->where('vehicleinfo.busID', Auth::user()->busID)->where('vehicle_licence', $licence)
            ->orderBy('vehicleinfo.created_at', 'DESC')->get();

                if(count($getLicencez) > 0){
                    $resData = $getLicencez;
                }
                else{
                    $resData = null;
                }


        }
        else{

            $getvehicle = DB::table('vehicleinfo')->where('vehicle_licence', $licence)->where('busID','=','undefined')->get();

            if(count($getvehicle) > 0){
            $resData = $getvehicle;
            }
            else{
                $resData = null;
            }


        }

        return $resData;

    }

    // Register a Vehicle
    public function vehicleRegistration(){

    }


    // Get IVIM and Performance
    public function getIvim($licence){
                // Check for Details

            $record = DB::table('carrecord')->where('vehicle_reg_no', $licence)->first();


            if(isset($record)){

                // dd(Auth::user()->country);
                // BFKL055
                // Condition

                if(Auth::user()->country == $record->country_of_reg && $record->country_of_reg != null){

                    $lastestReg = DB::table('vehicleinfo')->where('vehicle_licence', $licence)->orderBy('created_at', 'DESC')->first();

                    $oil = DB::table('vehicleinfo')->where('vehicle_licence', $licence)->where('service_type', 'LIKE', '%Oil change%')->orderBy('created_at', 'DESC')->get();

                if(count($oil) > 0){
                    $oilChange = $oil;
                }else{
                    $oilChange = '';
                }

                $tyre = DB::table('vehicleinfo')->where('vehicle_licence', $licence)->where('service_type', 'LIKE', '%Wheel balancing%')->orderBy('created_at', 'DESC')->first();

                if(isset($tyre)){
                    $tyreRotation = $tyre;
                }else{
                    $tyreRotation = '';
                }

                // dd($tyreRotation);

                $air = DB::table('vehicleinfo')->where('vehicle_licence', $licence)->where('service_type', 'LIKE', '%Air Filter%')->orderBy('created_at', 'DESC')->first();

                if(isset($air)){
                    $airFilter = $air;
                }else{
                    $airFilter = '';
                }

                $inspection = DB::table('vehicleinfo')->where('vehicle_licence', $licence)->where('service_type', 'LIKE', '%Inspection%')->orderBy('created_at', 'DESC')->first();

                if(isset($inspection)){
                    $inspection = $inspection;
                }else{
                    $inspection = '';
                }

                $registration = DB::table('vehicleinfo')->where('vehicle_licence', $licence)->where('service_type', 'LIKE', '%Registration%')->orderBy('created_at', 'DESC')->first();

                if(isset($registration)){
                    $registration = $registration;
                }else{
                    $registration = '';
                }


                $previous = DB::table('vehicleinfo')->where('vehicle_licence', $licence)->max('mileage');


                // get next user mileage
                $next = DB::table('vehicleinfo')->where('vehicle_licence', $licence)->min('mileage');

                $tot = $previous - $next;

                $totMiles = $tot;

                // Tot Maint cost
                $totMaint = DB::table('vehicleinfo')->where('vehicle_licence', $licence)->sum('total_cost');

                // $resData = array_merge($record->toArray(), $oilChange->toArray(), $tyreRotation->toArray(), $airFilter->toArray(), $inspection->toArray(), $registration->toArray(), $totMiles, $totMaint);

                $resData = ['data0' => $record, 'data1' => $oilChange, 'data2' => $tyreRotation, 'data3' => $airFilter, 'data4' => $inspection, 'data5' => $registration, 'data6' => $totMiles, 'data7' => $totMaint, 'data8' => $lastestReg];
            }
            else{
                $resData = null;
            }



        }


            else{
                $resData = null;
            }

            return $resData;

    }


    // Get Client list
    public function myclientList($busid){

        $client = DB::table('carrecord')
                ->join('vehicleinfo', 'vehicleinfo.vehicle_licence', '=', 'carrecord.vehicle_reg_no')
                ->where('vehicleinfo.busID', '=', $busid)->groupBy('vehicleinfo.vehicle_licence')
                ->orderBy('carrecord.created_at', 'DESC')->get();


        return $client;
        
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