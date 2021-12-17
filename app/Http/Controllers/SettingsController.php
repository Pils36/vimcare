<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;


use App\User;

use App\Traits\ShopManagement;


class SettingsController extends Controller
{
    public function personalInformation(){

        return view('pages.dashboard.pages.settings.personalinformation')->with(['pages' => 'Personal Information']);
    }

    public function myConnections(){

        return view('pages.dashboard.pages.settings.myconnections')->with(['pages' => 'My Connections']);
    }

    public function additionalEmails(){

        return view('pages.dashboard.pages.settings.additionalemails')->with(['pages' => 'Additional Emails']);
    }

    public function setCustomerAdditionalEmail(){

        return view('pages.dashboard.pages.settings.setcustomeradditionalemail')->with(['pages' => 'Set Customer additional email']);
    }

    public function reminderSettings(){

        return view('pages.dashboard.pages.settings.remindersettings')->with(['pages' => 'Reminder Settings']);
    }

    public function setCustomerReminderSettings(){

        return view('pages.dashboard.pages.settings.setcustomerremindersettings')->with(['pages' => 'Set Customer reminder settings']);
    }

    public function inviteContacts(){

        return view('pages.dashboard.pages.settings.invitecontacts')->with(['pages' => 'Invite Contacts']);
    }
}
