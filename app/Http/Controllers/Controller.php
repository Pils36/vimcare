<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\Mail;
//Mail
use App\Mail\sendEmail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $subject;
    public $name;
    public $message;
    public $to;
    public $file;


        // Mail Sender
    public function sendEmail($objDemoa, $purpose){
        $objDemo = new \stdClass();
        $objDemo->purpose = $purpose;

            if($purpose == $this->subject){
                $objDemo->to = $this->to;
                $objDemo->subject = $this->subject;
                $objDemo->message = $this->message;
                $objDemo->file = $this->file;
            }

            Mail::to($objDemoa)
                ->send(new sendEmail($objDemo));
    }


     	// JSON Response
 	public function returnJSON($data, $status){
        return response()->json($data, $status);
    }

}
