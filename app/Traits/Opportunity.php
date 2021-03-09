<?php


namespace App\Traits;

use Illuminate\Support\Facades\DB;

use Auth;

trait Opportunity{
    
    // Appointment
    public function appointment($station){
        $data = DB::table('carrecord')
        ->join('book_appointment', 'book_appointment.vehicle_licence', '=', 'carrecord.vehicle_reg_no')
        ->where('book_appointment.station_name', $station)
        ->where('book_appointment.accstate', 0)
        ->orderBy('book_appointment.created_at', 'DESC')->get();


        return $data;
    }


    // Recent Appointment
    public function recentAppointment($station){
        $data = DB::table('carrecord')
        ->join('book_appointment', 'book_appointment.vehicle_licence', '=', 'carrecord.vehicle_reg_no')
        ->where('book_appointment.station_name', $station)
        ->orderBy('book_appointment.created_at', 'DESC')->limit(12)->get();

        return $data;
    }


    // Appointment
    public function getAllAppointment($station){
        $data = DB::table('carrecord')
        ->join('book_appointment', 'book_appointment.vehicle_licence', '=', 'carrecord.vehicle_reg_no')
        ->where('book_appointment.station_name', $station)
        ->orderBy('book_appointment.created_at', 'DESC')->get();


        return $data;
    }

    // Opportunity Posts
    public function opportunityPosts($state){

        $data = DB::table('opportunitypost')
        ->join('users', 'users.ref_code', '=', 'opportunitypost.ref_code')
        ->where('opportunitypost.state', '1')->where('opportunitypost.poststate', $state)
        ->orderBy('opportunitypost.created_at', 'DESC')->get();

        return $data;
    }


    // Approved Estimates
    public function approvedEstimates($station){
        $data = DB::table('estimate')
        ->join('opportunitypost', 'opportunitypost.post_id', '=', 'estimate.opportunity_id')
        ->join('prepareestimate', 'prepareestimate.estimate_id', '=', 'estimate.estimate_id')
        ->join('users', 'users.ref_code', '=', 'opportunitypost.ref_code')
        ->where('opportunitypost.state', '=', 2)->where('estimate.update_by', $station)
        ->orderBy('estimate.created_at', 'DESC')->get();

        return $data;
    }


    // Submitted Estimates
    public function submittedEstimates($station){
        $data = DB::table('estimate')
        ->join('opportunitypost', 'opportunitypost.post_id', '=', 'estimate.opportunity_id')
        ->join('prepareestimate', 'prepareestimate.estimate_id', '=', 'estimate.estimate_id')
        ->join('users', 'users.ref_code', '=', 'opportunitypost.ref_code')
        ->where('opportunitypost.state', '=', 1)->where('estimate.update_by', $station)
        ->orderBy('estimate.created_at', 'DESC')->get();

        return $data;
    }


    // Job Done
    public function jobsDone($station){

        $data = DB::table('estimate')
        ->join('opportunitypost', 'opportunitypost.post_id', '=', 'estimate.opportunity_id')
        ->join('prepareestimate', 'prepareestimate.estimate_id', '=', 'estimate.estimate_id')
        ->where('opportunitypost.state', '=', 2)->where('estimate.update_by', $station)
        ->orderBy('estimate.created_at', 'DESC')->get();

        return $data;
    }


    // Phone Appointment List
    public function phoneAppointmentList($station){

        $data = DB::table('phone_appointment')
        ->where('station_name', $station)
        ->orderBy('created_at', 'DESC')->get();

        return $data;

    }

    // public function opportunity count
    public function opportunityCount($station, $state){

       $data =  count($this->appointment($station)) + count($this->opportunityPosts($state));

        return $data;
    }


    // Get specific opportunity
    public function specificOpportunity($ref_code){

        $info = DB::table('carrecord')
        ->join('book_appointment', 'book_appointment.email', '=', 'carrecord.email')
        ->where('book_appointment.ref_code', $ref_code)
        ->orderBy('book_appointment.created_at', 'DESC')->take(1)->get();


        $getDiscount = (Auth::user()->vimfile_discount != null) ? Auth::user()->vimfile_discount : 10;


        $data = array_merge($info->toArray(), array('discount' => $getDiscount));

        return $data;
    }


    // Close Appointments
    public function closeThisAppointment($ref_code, $visitation_info, $granted_discount){

        $data = DB::table('accappointment_feedback')->updateOrInsert(['ref_code' => $ref_code], ['ref_code' => $ref_code, 'visitation_info' => $visitation_info, 'granted_discount' => $granted_discount]);

        DB::table('book_appointment')->where('ref_code', $ref_code)->update(['accstate' => 2]);

        return $data;

    }

}