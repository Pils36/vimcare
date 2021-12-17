<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Traits\ShopManagement;
use App\Traits\Opportunity;
use App\Traits\ServiceReview;

class DashboardController extends Controller
{

    use ShopManagement, Opportunity, ServiceReview;

    public function index(){

        $data = array(
            'opportunityCount' => $this->opportunityCount('Auth'::user()->station_name, 'Auth'::user()->state),
            'servicereviewCount' => $this->serviceReviewCount('Auth'::user()->station_name),
        );



        return view('pages.dashboard.pages.index')->with(['pages' => 'Dashboard', 'data' => $data]);
    }

    public function opportunity(){

        $data = array(
            'appointment' => $this->appointment('Auth'::user()->station_name),
            'opportunityPost' => $this->opportunityPosts('Auth'::user()->state),
            'approvedEstimate' => $this->approvedEstimates('Auth'::user()->station_name),
            'submitedEstimate' => $this->submittedEstimates('Auth'::user()->station_name),
            'jobDone' => $this->jobsDone('Auth'::user()->station_name),
            'phoneAppointment' => $this->phoneAppointmentList('Auth'::user()->station_name),
        );

        return view('pages.dashboard.pages.opportunity')->with(['pages' => 'Opportunity', 'data' => $data]);
    }

    public function review(){

        $data = array(
            'myreviews' => $this->viewServices('Auth'::user()->station_name, 'Auth'::user()->busID),
        );



        return view('pages.dashboard.pages.review')->with(['pages' => 'Service Review', 'data' => $data]);
    }

    public function shopManagement(){
        return view('pages.dashboard.pages.shopmanagement')->with(['pages' => 'Shop Management']);
    }

    public function phoneAppointment(){
        return view('pages.dashboard.pages.phoneappointment')->with(['pages' => 'Appointment on Phone']);
    }

    public function vinLookup(){
        return view('pages.dashboard.pages.vinlookup')->with(['pages' => 'VIN Lookup']);
    }

    public function createTicket(){
        return view('pages.dashboard.pages.createticket')->with(['pages' => 'Create Ticket']);
    }

    public function assignedWorkOrder(){
        return view('pages.dashboard.assignedworkorder')->with(['pages' => 'Assigned work order']);
    }

    public function dispatchedScheduling(){
        return view('pages.dashboard.dispatachedschdulling')->with(['pages' => 'Dispatched Scheduling']);
    }

    public function manageInventory(){
        return view('pages.dashboard.manageInventory')->with(['pages' => 'Manage Inventory']);
    }

    public function manageLabour(){
        return view('pages.dashboard.manageLabour')->with(['pages' => 'Manage Labour']);
    }

    public function revenue(){
        return view('pages.dashboard.revenue')->with(['pages' => 'Revenue']);
    }

    public function expenditure(){
        return view('pages.dashboard.expenditure')->with(['pages' => 'expenditure']);
    }



}
