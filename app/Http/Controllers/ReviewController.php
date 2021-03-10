<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Auth;

class ReviewController extends Controller
{
    
    public function reviewResponse(Request $req, $postid){

        $data = DB::table('replyrating')->insert(['post_id' => $postid, 'reply' => $req->message, 'ref_code' => Auth::user()->ref_code]);


        // Get USer to receive mail
        $user = DB::table('rating')->where('post_id', $postid)->first();

        try {
            if(isset($user)){

                $getUser = DB::table('users')->where('ref_code', $user->ref_code)->first();

                $this->to = $getUser->email;
                // $this->to = "bambo@vimfile.com";
                $this->name = $getUser->name;
                $this->subject = "Service review";
                $this->message = "There is a service review thread on one of your reply to ".$user->station_name." <hr>".$req->message."<br>";
                $this->file = NULL;

                $this->sendEmail($this->to, $this->subject);


                return back()->with('success', 'Successfull');

            }
        } catch (\Throwable $th) {
            return back()->with('error', 'Error: '.$th);
        }

    }
}
