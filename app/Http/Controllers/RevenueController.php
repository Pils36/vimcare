<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;


use App\User;

use App\Traits\ShopManagement;


class RevenueController extends Controller
{
    public function invoices(){

        return view('pages.dashboard.pages.revenue.invoices')->with(['pages' => 'Invoices']);
    }

    public function receivePayment(){

        return view('pages.dashboard.pages.revenue.receivepayment')->with(['pages' => 'Receive Payment']);
    }

    public function viewPaidInvoices(){

        return view('pages.dashboard.pages.revenue.viewpaidinvoices')->with(['pages' => 'View Paid Invoices']);
    }

    public function viewUnpaidInvoices(){

        return view('pages.dashboard.pages.revenue.viewunpaidinvoices')->with(['pages' => 'View Unpaid Invoices']);
    }
}
