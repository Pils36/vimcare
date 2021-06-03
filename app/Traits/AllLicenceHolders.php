<?php


namespace App\Traits;

use App\User;
use App\SkillSet;
use App\ShopReg;
use App\ToolSet;

trait AllLicenceHolders{
    
    // // Get Licenced Holders
    public function getLicenceHolders($country){
        $data = User::where('userType', 'LIKE', '%Licence Holder%')->where('country', $country)->orderBy('created_at', 'DESC')->get();

        return $data;
    }
    
}