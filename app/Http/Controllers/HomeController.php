<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Traits\AllLicenceHolders;

class HomeController extends Controller
{

    use AllLicenceHolders;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // Mobile Mechanics
    public function index()
    {

        return view('pages.index')->with(['pages' => 'Home']);
    }

    public function mmIndex()
    {

        return view('pages.mobilemechanics.index')->with(['pages' => 'MM Homepage']);
    }

    public function askexpart()
    {
        return view('pages.askexpart')->with(['pages' => 'Ask Expart']);
    }

    public function aboutus()
    {
        return view('pages.aboutus')->with(['pages' => 'About Us']);
    }

     public function quote()
    {
        return view('pages.quote')->with(['pages' => 'Quote']);
    }

    public function askExpert()
    {
        return view('pages.askexpert')->with(['pages' => 'Ask Experts']);
    }

    public function contactUs()
    {
        return view('pages.contact')->with(['pages' => 'Contact Us']);
    }


    public function basicinfo()
    {
        return view('pages.basic')->with(['pages' => 'Personal Information']);
    }

    
    public function skills()
    {
        return view('pages.skills')->with(['pages' => 'Skills']);
    }


    public function tools()
    {
        return view('pages.tools')->with(['pages' => 'Tools']);
    }


    public function licenceHoldersList()
    {

        $data = [
            'licenceHolderList' => $this->getLicenceHolders(Auth::user()->country),
        ];

        return view('pages.mobilemechanics.lhlisting')->with(['pages' => 'Licence Holder Listing', 'data' => $data]);
    }


    public function pricing()
    {
        return view('pages.licenceholder.index')->with(['pages' => 'Licence Holder']);
    }


    public function assignedJob()
    {
        return view('pages.licenceholder.index')->with(['pages' => 'Licence Holder']);
    }


    public function payStatement()
    {
        return view('pages.licenceholder.index')->with(['pages' => 'Licence Holder']);
    }



}
