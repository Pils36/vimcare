<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;


use App\User;

use App\Traits\ShopManagement;

class BusinessReportController extends Controller
{

    public function index(){
        return view('pages.dashboard.pages.businessreport.index')->with(['pages' => 'Business Report']);
    }

    public function clientBalances(){

        return view('pages.dashboard.pages.businessreport.clientbalances')->with(['pages' => 'Client Balances']);
    }

    public function vendorBalances(){

        return view('pages.dashboard.pages.businessreport.vendorbalances')->with(['pages' => 'Vendor Balances']);
    }

    public function labourBalances(){

        return view('pages.dashboard.pages.businessreport.labourbalances')->with(['pages' => 'Labour Balances']);
    }

    public function cashBalances(){

        return view('pages.dashboard.pages.businessreport.cashbalances')->with(['pages' => 'Cash Balances']);
    }

    public function creditCardBalances(){

        return view('pages.dashboard.pages.businessreport.creditcardbalances')->with(['pages' => 'Credit Card Balances']);
    }

    public function bankBalances(){

        return view('pages.dashboard.pages.businessreport.bankbalances')->with(['pages' => 'Bank Balances']);
    }
}
