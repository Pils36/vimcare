<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;


use App\User;

use App\Traits\Opportunity;

class OpportunityController extends Controller
{
    use Opportunity;


    public function appointments(){

        $data = array(
            'recentappointment' => $this->recentAppointment(Auth::user()->station_name)
        );


        return view('pages.dashboard.pages.myopportunity.appointment')->with(['pages' => 'Appointments', 'data' => $data]);
    }


    public function opportunityPost(){

        $data = array(
            'opportunityPosts' => $this->opportunityPosts(Auth::user()->state)
        );


        return view('pages.dashboard.pages.myopportunity.opportunitypost')->with(['pages' => 'Opportunity Posts', 'data' => $data]);
    }

    public function approvedEstimates(){

        $data = array(
            'approvedestimate' => $this->approvedEstimates(Auth::user()->station_name)
        );


        return view('pages.dashboard.pages.myopportunity.approvedestimates')->with(['pages' => 'Approved Estimates', 'data' => $data]);
    }


    public function submittedEstimates(){

        $data = array(
            'submittedestimates' => $this->submittedEstimates(Auth::user()->station_name)
        );



        return view('pages.dashboard.pages.myopportunity.submittedestimates')->with(['pages' => 'Submitted Estimates', 'data' => $data]);
    }


    public function jobDone(){

        $data = array(
            'jobdone' => $this->jobsDone(Auth::user()->station_name)
        );



        return view('pages.dashboard.pages.myopportunity.jobdone')->with(['pages' => 'Job Done', 'data' => $data]);
    }


    public function phoneAppointment(){

        $data = array(
            'phoneappointment' => $this->phoneAppointmentList(Auth::user()->station_name)
        );



        return view('pages.dashboard.pages.myopportunity.phoneappointment')->with(['pages' => 'Phone Appointment List', 'data' => $data]);
    }




    public function getAppointments(Request $req){

        $data = $this->getAllAppointment($req->station);

        $resData = ['data' => json_encode($data), 'message' => 'success'];

        $status = 200;



        return $this->returnJSON($resData, $status);
    }


    public function closeAppointments(Request $req){

        $data = $this->closeThisAppointment($req->ref_code, $req->visit_took_place, $req->granted_discount);


        try {
            if(isset($data)){
                $status = 'success';
                $message = 'Appointment closed';
            }
            else{
                $status = 'error';
                $message = 'Something went wrong!';
            }
        } 
        catch (\Throwable $th) {
            $status = 'error';
                $message = 'Error: '.$th;
        }

        

        return redirect()->back()->with($status, $message);
    }


    public function getThisAppointment(Request $req){

        $data = $this->specificOpportunity($req->ref_code);

        $resData = ['data' => json_encode($data), 'message' => 'success'];

        $status = 200;

        return $this->returnJSON($resData, $status);
    }
}
