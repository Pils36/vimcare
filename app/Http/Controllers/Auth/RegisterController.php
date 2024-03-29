<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\ShopReg;
use App\SkillSet;
use App\ToolSet;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Auth;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'confirmed'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $request = request();


        $letter = chr(rand(65,90));
        $ref_code = $letter.mt_rand(1000, 9999);

        $userType = "";

        if($request->userType == "mobilemechanics"){
            $userType = "Certified Professional";
        }
        
        elseif($request->userType == "licenceholderindividual"){
            $userType = "Licence Holder - Individual";
        }

        elseif($request->userType == "licenceholderbusiness"){
            $userType = "Licence Holder - Business";
        }

        else{
            $userType = "Certified Professional";
        }
        

        return User::create([
            'ref_code' => $ref_code,
            'name' => $data['name'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'userType' => $userType,
            'password' => Hash::make($data['password']),
            'api_token' => uniqid(),
            'plan' => 'Super',
            'status' => 1,
            'platform' => 'Vim Care'
        ]);
    }











}
