<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\User;

use App\Traits\AllMechanics;

class LicenceHolderController extends Controller
{

    use AllMechanics;

    public function __construct()
    {

    }

    // Licence Holders
    public function index()
    {
        return view('pages.licenceholder.index')->with(['pages' => 'Licence Holder']);
    }

    public function lhIndex()
    {
        return view('pages.licenceholder.index')->with(['pages' => 'Licence Holder']);
    }

    public function mobileMechanicsList()
    {
        $data = [
            'mechanicList' => $this->getMobileMechanics(Auth::user()->country),
        ];


        return view('pages.licenceholder.mmlisting')->with(['pages' => 'Mobile Mechanics Listing', 'data' => $data]);
    }


    public function mmSkillSet($id)
    {
        $data = [
            'personal' => $this->getMechanicProfile($id),
            'mechanicSkills' => $this->getSkillProfile($id),
            'mechanicShop' => $this->getShopProfile($id),
            'mechanicToolSet' => $this->getToolSetProfile($id),
        ];


        return view('pages.licenceholder.mmskillset')->with(['pages' => 'Mechanic Skill Set', 'data' => $data]);
    }


    public function pricing()
    {
        return view('pages.licenceholder.index')->with(['pages' => 'Licence Holder']);
    }


    public function upgradePlan()
    {
        return view('pages.licenceholder.index')->with(['pages' => 'Upgrade Plan']);
    }


    public function openTicket()
    {
        return view('pages.licenceholder.index')->with(['pages' => 'Open Ticket']);
    }

    public function achievement()
    {
        return view('pages.licenceholder.index')->with(['pages' => 'Achievement']);
    }


    

}

