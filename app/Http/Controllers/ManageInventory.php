<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;


use App\User;

use App\Traits\ShopManagement;


class ManageInventory extends Controller
{
    use ShopManagement;

    public function createVendor(){

        return view('pages.dashboard.pages.manageinventory.createvendor')->with(['pages' => 'Create Vendor']);
    }

    public function createCategory(){

        return view('pages.dashboard.pages.manageinventory.createcategory')->with(['pages' => 'Create Category']);
    }

    public function createInventoryItem(){

        return view('pages.dashboard.pages.manageinventory.createinventoryitem')->with(['pages' => 'Create Inventory Item']);
    }

    public function createPurchaseOrder(){

        return view('pages.dashboard.pages.manageinventory.createpurchaseorder')->with(['pages' => 'Create Purchase Order']);
    }

    public function managePurchaseOrder(){

        return view('pages.dashboard.pages.manageinventory.managepurchaseorder')->with(['pages' => 'Manage Purchase Order']);
    }

    public function payVendors(){

        return view('pages.dashboard.pages.manageinventory.payvendors')->with(['pages' => 'Pay Vendors']);
    }

    public function inventoryRecord(){

        return view('pages.dashboard.pages.manageinventory.inventoryrecord')->with(['pages' => 'Inventory Record']);
    }

    public function updateVendorsProfile(){

        return view('pages.dashboard.pages.manageinventory.updatevendorsprofile')->with(['pages' => 'Update Vendors Profile']);
    }


}
