<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\ShopReg;
use App\SkillSet;
use App\ToolSet;

use Illuminate\Support\Facades\Hash;

class UserDetails extends Controller
{


    public function insertBasic(Request $request){



        if($request->hasFile('resume')){
            //Get filename with extension
            $filenameWithExt = $request->file('resume')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('resume')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = rand().'_'.time().'.'.$extension;
            
            $path = $request->file('resume')->move(public_path('../../shop/resume/'), $fileNameToStore);

            $resume = "https://".$_SERVER['HTTP_HOST']."/shop/resume/".$fileNameToStore;
        }
        else{
            $resume = null;
        }



        User::where('id', Auth::user()->id)->update(['station_name' => $request->station_name]);


        $this->businessInfo(Auth::user()->ref_code, $request->repair_experience, $request->fulltime_jobs, $request->hours_per_week, $request->distance_to_drive, json_encode($request->carsto_workon), $request->work_as, json_encode($request->certifications), json_encode($request->service_offer), $resume);


        return redirect('/register/skills');


    }

    public function insertSkill(Request $request){


        // Insert Skills
        $data = SkillSet::updateOrInsert(['ref_code' => Auth::user()->ref_code], $request->all());

        if($request->hasFile('trade_cert')){
            //Get filename with extension
            $filenameWithExt = $request->file('trade_cert')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('trade_cert')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = rand().'_'.time().'.'.$extension;
            
            $path = $request->file('trade_cert')->move(public_path('../../shop/trade_cert/'), $fileNameToStore);

            $trade_cert = "https://".$_SERVER['HTTP_HOST']."/shop/trade_cert/".$fileNameToStore;

            SkillSet::where('ref_code', Auth::user()->ref_code)->update(['user_id' => Auth::user()->id, 'trade_cert' => $trade_cert]);
        }
        else{
            $trade_cert = null;

            SkillSet::where('ref_code', Auth::user()->ref_code)->update(['user_id' => Auth::user()->id, 'trade_cert' => $trade_cert]);
        }


        return redirect('/register/tools');
    }

    public function insertTools(Request $request){

        // Insert Tools
        $data = ToolSet::updateOrInsert(['ref_code' => Auth::user()->ref_code], ['user_id' => Auth::user()->id, 'manadatory_tools' => json_encode($request->manadatory_tools)]);


        return redirect()->route('home')->with('success', 'Profile Updated!');

    }



    public function businessInfo($ref_code, $repair_experience, $fulltime_jobs, $hours_per_week, $distance_to_drive, $carsto_workon, $work_as, $certifications, $service_offer, $resume){



        $data = ShopReg::updateOrInsert(['ref_code' => $ref_code], ['user_id' => Auth::user()->id, 'repair_experience' => $repair_experience, 'fulltime_jobs' => $fulltime_jobs, 'hours_per_week' => $hours_per_week, 'distance_to_drive' => $distance_to_drive, 'carsto_workon' => $carsto_workon, 'work_as' => $work_as, 'certifications' => $certifications, 'service_offer' => $service_offer, 'resume' => $resume]);


    }



}
