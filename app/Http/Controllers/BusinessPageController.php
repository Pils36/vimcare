<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\User as User;
use App\ShopReg as ShopReg;
use App\SkillSet as SkillSet;
use App\ToolSet as ToolSet;


class BusinessPageController extends Controller
{
    public function index(){

        return view('pages.business.index')->with(['pages' => 'Business Page']);
    }





    // Ajax Calls
    public function updateBusinessLogo(Request $request){

        if($request->hasFile('file')){
            $this->uploadDocument(Auth::user()->id, $request->file('file'), 'avatar/'.Auth::user()->station_name, 'avatar');

            $response = "Avatar uploaded";
            $message = "success";
        }
        else{
            $response = "File not detected";
            $message = "error";
        }

        $status = 200;

        $resData = ['message' => $message, 'response' => $response];

        return $this->returnJSON($resData, $status);
    }


    public function uploadDocument($id, $file, $pathWay, $rowName){


        //Get filename with extension
        $filenameWithExt = $file->getClientOriginalName();
        // Get just filename
        $filename = pathinfo($filenameWithExt , PATHINFO_FILENAME);
        // Get just extension
        $extension = $file->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore = rand().'_'.time().'.'.$extension;

        
        $path = $file->move(public_path('../../'.$pathWay.'/'), $fileNameToStore);


        $docPath = "http://".$_SERVER['HTTP_HOST']."/".$pathWay."/".$fileNameToStore;


        User::where('id', $id)->update([''.$rowName.'' => $docPath]);

    }
}
