<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class HomeController extends Controller
{
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


    public function index()
    {

        return view('pages.index')->with(['pages' => 'Home']);
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



}
