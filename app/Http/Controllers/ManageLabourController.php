<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;


use App\User;

use App\Traits\ShopManagement;

class ManageLabourController extends Controller
{
    use ShopManagement;

    public function manageLaboursSchedule(){

        return view('pages.dashboard.pages.managelabour.managelabourschedule')->with(['pages' => 'Manage Labour schedule']);
    }

    
    public function createLabourCategory(){

        return view('pages.dashboard.pages.managelabour.createlabourcategory')->with(['pages' => 'Create Labour category']);
    }


    public function createLabourRecord(){

        return view('pages.dashboard.pages.managelabour.createlabourrecord')->with(['pages' => 'Create Labour Record']);
    }


    public function addLabour(){

        return view('pages.dashboard.pages.managelabour.addlabour')->with(['pages' => 'Add Labour']);
    }


    public function manageTimeSheet(){

        return view('pages.dashboard.pages.managelabour.managetimesheet')->with(['pages' => 'Manage Time Sheet']);
    }


    public function listTechnicians(){

        return view('pages.dashboard.pages.managelabour.listtechnicians')->with(['pages' => 'List Technicians']);
    }

    public function clockingSheet(){

        return view('pages.dashboard.pages.managelabour.clockingsheet')->with(['pages' => 'Clocking Sheet']);
    }

    public function payLabour(){

        return view('pages.dashboard.pages.managelabour.paylabour')->with(['pages' => 'Pay Labour']);
    }

    public function paySchedule(){

        return view('pages.dashboard.pages.managelabour.payschedule')->with(['pages' => 'Pay Schedule']);
    }

    public function labourPayStub(){

        return view('pages.dashboard.pages.managelabour.labourpaystub')->with(['pages' => 'Labour Pay Stub']);
    }


}
