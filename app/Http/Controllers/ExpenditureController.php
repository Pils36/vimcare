<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;


use App\User;

use App\Traits\ShopManagement;


class ExpenditureController extends Controller
{
    public function vendorInvoices(){

        return view('pages.dashboard.pages.expenditure.vendorinvoices')->with(['pages' => 'Vendor Invoices']);
    }

    public function vendorUnpaidInvoices(){

        return view('pages.dashboard.pages.expenditure.vendorunpaidinvoices')->with(['pages' => 'Vendor Unpaid invoices']);
    }

    public function vendorPaidInvoices(){

        return view('pages.dashboard.pages.expenditure.vendorpaidinvoices')->with(['pages' => 'Vendor Paid Invoices']);
    }

    public function vendorStatement(){

        return view('pages.dashboard.pages.expenditure.vendorstatement')->with(['pages' => 'Vendor Statement']);
    }

    public function technicianPaySchedule(){

        return view('pages.dashboard.pages.expenditure.technicianpayschedule')->with(['pages' => 'Technician Pay schedule']);
    }

    public function technicianPayStub(){

        return view('pages.dashboard.pages.expenditure.technicianpaystub')->with(['pages' => 'Technician Pay Stub']);
    }

    public function technicianUnpaidWork(){

        return view('pages.dashboard.pages.expenditure.technicianunpaidwork')->with(['pages' => 'Technician Unpaid Work']);
    }

    public function technicianPaidWork(){

        return view('pages.dashboard.pages.expenditure.technicianpaidwork')->with(['pages' => 'Technician Paid Work']);
    }

    public function technicianPaymentHistory(){

        return view('pages.dashboard.pages.expenditure.technicianpaymenthistory')->with(['pages' => 'Technician Payment History']);
    }

}
