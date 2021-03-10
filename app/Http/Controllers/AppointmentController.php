<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PhoneAppointment as PhoneAppointment;
use App\BookAppointment as BookAppointment;

use Auth;


class AppointmentController extends Controller
{
    
    public function phoneAppointment(Request $req, PhoneAppointment $phonebooking, BookAppointment $booking){

        // Insert
        $phonebooking->busID = Auth::user()->busID;
        $phonebooking->ref_code = $req->ref_code;
        $phonebooking->station_name = Auth::user()->station_name;
        $phonebooking->name = $req->name;
        $phonebooking->email = $req->email;
        $phonebooking->subject = $req->subject;
        $phonebooking->message = $req->my_message;
        $phonebooking->date_of_visit = $req->date_of_visit;
        $phonebooking->service_option = $req->service_option;
        $phonebooking->service_type = $req->my_service_type;
        $phonebooking->current_mileage = $req->current_mileage;

        $phonebooking->save();



        $booking->busID = Auth::user()->busID;
        $booking->ref_code = $req->ref_code;
        $booking->station_name = Auth::user()->station_name;
        $booking->name = $req->name;
        $booking->email = $req->email;
        $booking->subject = $req->subject;
        $booking->message = $req->my_message;
        $booking->date_of_visit = $req->date_of_visit;
        $booking->service_option = $req->service_option;
        $booking->service_type = $req->my_service_type;
        $booking->current_mileage = $req->current_mileage;

        $booking->save();

        $this->to = $req->email;
        // $this->to = "bambo@vimfile.com";
        $this->name = $req->name;
        $this->subject = "VIMFILE - PHONE APPOINTMENT";
        $this->message = $req->my_message;
        $this->file = NULL;

        $this->sendEmail($this->to, $this->subject);


        return redirect()->route('view phone appointment list')->with('success', 'Sent successfully');

    }
}
