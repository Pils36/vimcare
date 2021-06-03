<?php


namespace App\Traits;

use App\User;
use App\SkillSet;
use App\ShopReg;
use App\ToolSet;

trait AllMechanics{
    
    // Get Mobile Mechanics
    public function getMobileMechanics($country){
        $data = User::where('userType', 'Certified Professional')->where('country', $country)->orderBy('created_at', 'DESC')->get();

        return $data;
    }


    public function getSkillProfile($id){
        $data = SkillSet::where('user_id', $id)->first();

        return $data;
    }


    public function getMechanicProfile($id){
        $data = User::where('id', $id)->first();

        return $data;
    }


    public function getShopProfile($id){
        $data = ShopReg::where('user_id', $id)->first();

        return $data;
    }


    public function getToolSetProfile($id){
        $data = ToolSet::where('user_id', $id)->first();

        return $data;
    }


    // // Get Licenced Holders
    // public function getLicenceHolders($country){
    //     $data = User::where('userType', 'LIKE', '%Licence Holder%')->where('country', $country)->orderBy('created_at', 'DESC')->get();

    //     return $data;
    // }
    
}