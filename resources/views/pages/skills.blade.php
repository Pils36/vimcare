@extends('layouts.app')


@section('content')

@php
    $pages = 'Sign Up';
@endphp

<style>
    #carsto_workon, #certifications, #service_offer{
        height: 90px;
    }
    small{
        font-weight: 400;
        font-size: 14px;
    }
    label{
        font-weight: bold;
    }
</style>



    <div class="inner-banner inner-bg8">
        <div class="container">
            <div class="inner-title text-center">
                <h3> Skill Informations </h3>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevron-right'></i>
                    </li>
                    <li> Skill Informations </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="sign-up-area pt-100 pb-70">
        <div class="container">
            <div class="row pt-45">
                <div class="col-lg-12">
                    <div class="user-all-form">
                        <div class="contact-form">
                            <div class="section-title text-center">
                                {{--  <h2>Create an Account!</h2>  --}}
                                <h5 class="text-center">
                                    Almost done, tell us a little bit more about your skills and the cars you work on.
                                </h5>
                                
                                <span class="span-bg">Skills</span>

                            </div>
                            <form action="{{ route('insertSkill') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label for="apprentice">Apprentice Mechanic:</label><br>
                                            <small>
                                                A mechanic that is learning the automotive trade, that is taking classes in automotive repair, electronics, computer use. Often an apprentice is working under the supervision of a more qualified mechanic. An apprentice mechanic is usually performing basic repair jobs such as oil changes, minor brake work and general services.
                                            </small>
                                            {{--  <textarea name="apprentice" id="apprentice" cols="20" rows="5" class="form-control" required placeholder="Apprentice Mechanic Skill"></textarea>  --}}

                                            <hr>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label for="journeyman">Journeyman Mechanic:</label><br>
                                            <small>
                                                A journeyman mechanic is able to work independently of supervision. A journeyman mechanic is able to diagnose vehicle by means of test equipment, and by more traditional methods, including visual inspections and test drives.
                                            </small>
                                            {{--  <textarea name="journeyman" id="journeyman" cols="20" rows="5" class="form-control" required placeholder="Journeyman Mechanic Skill"></textarea>  --}}
                                            <hr>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label for="journeyman">Master Mechanic:</label><br>
                                            <small>
                                                A master mechanic is mechanic that has typically been a journeyman mechanic for at least 15 years, with the ability understand, diagnose and repair all systems on a vehicle, including computer and electrical systems. Also, a master mechanic may be one who has achieved ASE Master Certification. ASE defines a master mechanic as mechanic that has taken and passed all A1 through A8 certifications.
                                            </small>
                                            {{--  <textarea name="journeyman" id="master_mechanic" cols="20" rows="5" class="form-control" required placeholder="Master Mechanic Skill"></textarea>  --}}
                                            <hr>
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label for="diagonistic_basic">Diagnostics Skill Level:</label><br>
                                            <small>
                                                <p style="color: navy; font-weight: bold;">Basic</p>
                                                A mechanic with basic abilities is one that can perform maintenance and R&R - Drive belts; Hoses; Brakes; Fluid change; Cooling system; Minor electrical issues, such as Battery, Charging system and Starter; Suspension; Steering, etc.
                                            </small>
                                            {{--  <textarea name="diagonistic_basic" id="diagonistic_basic" cols="20" rows="5" class="form-control" required placeholder="Diagnostics Skill Level [Basic]"></textarea>  --}}
                                            
                                        </div>
                                    </div>
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            {{--  <label for="diagonistic_drivabiltiy">Diagnostics Skill Level:</label><br>  --}}
                                            <small>
                                                <p style="color: navy; font-weight: bold;">Drivability</p>
                                                Basics plus the following - Engine Performance issues; Electrical and Wiring; Fuel System; Ignition system; Emissions; Trouble Codes; Computer Control; ABS; Noises; Turbos, etc.
                                            </small>
                                            {{--  <textarea name="diagonistic_drivabiltiy" id="diagonistic_drivabiltiy" cols="20" rows="5" class="form-control" required placeholder="Diagnostics Skill Level [Drivability]"></textarea>  --}}
                                            <hr>
                                            
                                        </div>
                                    </div>


                                    <div class="col-lg-12 ">
                                        <div class="form-group table table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Make</th>
                                                        <th>What's your skill level?</th>
                                                        <th>How good are you with diagnostics?</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Buick</td>
                                                        <td>
                                                            <select name="skill_level_buick" id="skill_level_buick" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Apprentice">Apprentice</option>
                                                                <option value="Journeyman">Journeyman</option>
                                                                <option value="Master">Master</option>
                                                               
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="diagnostic_buick" id="diagnostic_buick" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Basic">Basic</option>
                                                                <option value="Drivability">Drivability</option>
                                                               
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cadillac</td>
                                                        <td>
                                                            <select name="skill_level_cadillac" id="skill_level_cadillac" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Apprentice">Apprentice</option>
                                                                <option value="Journeyman">Journeyman</option>
                                                                <option value="Master">Master</option>
                                                               
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="diagnostic_cadillac" id="diagnostic_cadillac" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Basic">Basic</option>
                                                                <option value="Drivability">Drivability</option>
                                                               
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Chevrolet</td>
                                                        <td>
                                                            <select name="skill_level_chevrolet" id="skill_level_chevrolet" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Apprentice">Apprentice</option>
                                                                <option value="Journeyman">Journeyman</option>
                                                                <option value="Master">Master</option>
                                                               
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="diagnostic_chevrolet" id="diagnostic_chevrolet" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Basic">Basic</option>
                                                                <option value="Drivability">Drivability</option>
                                                               
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Chrysler</td>
                                                        <td>
                                                            <select name="skill_level_chrysler" id="skill_level_chrysler" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Apprentice">Apprentice</option>
                                                                <option value="Journeyman">Journeyman</option>
                                                                <option value="Master">Master</option>
                                                               
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="diagnostic_chrysler" id="diagnostic_chrysler" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Basic">Basic</option>
                                                                <option value="Drivability">Drivability</option>
                                                               
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dodge</td>
                                                        <td>
                                                            <select name="skill_level_dodge" id="skill_level_dodge" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Apprentice">Apprentice</option>
                                                                <option value="Journeyman">Journeyman</option>
                                                                <option value="Master">Master</option>
                                                               
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="diagnostic_dodge" id="diagnostic_dodge" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Basic">Basic</option>
                                                                <option value="Drivability">Drivability</option>
                                                               
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ford</td>
                                                        <td>
                                                            <select name="skill_level_ford" id="skill_level_ford" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Apprentice">Apprentice</option>
                                                                <option value="Journeyman">Journeyman</option>
                                                                <option value="Master">Master</option>
                                                               
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="diagnostic_ford" id="diagnostic_ford" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Basic">Basic</option>
                                                                <option value="Drivability">Drivability</option>
                                                               
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>GMC</td>
                                                        <td>
                                                            <select name="skill_level_gmc" id="skill_level_gmc" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Apprentice">Apprentice</option>
                                                                <option value="Journeyman">Journeyman</option>
                                                                <option value="Master">Master</option>
                                                               
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="diagnostic_gmc" id="diagnostic_gmc" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Basic">Basic</option>
                                                                <option value="Drivability">Drivability</option>
                                                               
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>GEO</td>
                                                        <td>
                                                            <select name="skill_level_geo" id="skill_level_geo" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Apprentice">Apprentice</option>
                                                                <option value="Journeyman">Journeyman</option>
                                                                <option value="Master">Master</option>
                                                               
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="diagnostic_geo" id="diagnostic_geo" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Basic">Basic</option>
                                                                <option value="Drivability">Drivability</option>
                                                               
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hummer</td>
                                                        <td>
                                                            <select name="skill_level_hummer" id="skill_level_hummer" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Apprentice">Apprentice</option>
                                                                <option value="Journeyman">Journeyman</option>
                                                                <option value="Master">Master</option>
                                                               
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="diagnostic_hummer" id="diagnostic_hummer" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Basic">Basic</option>
                                                                <option value="Drivability">Drivability</option>
                                                               
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jeep</td>
                                                        <td>
                                                            <select name="skill_level_jeep" id="skill_level_jeep" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Apprentice">Apprentice</option>
                                                                <option value="Journeyman">Journeyman</option>
                                                                <option value="Master">Master</option>
                                                               
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="diagnostic_jeep" id="diagnostic_jeep" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Basic">Basic</option>
                                                                <option value="Drivability">Drivability</option>
                                                               
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lincon</td>
                                                        <td>
                                                            <select name="skill_level_lincon" id="skill_level_lincon" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Apprentice">Apprentice</option>
                                                                <option value="Journeyman">Journeyman</option>
                                                                <option value="Master">Master</option>
                                                               
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="diagnostic_lincon" id="diagnostic_lincon" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Basic">Basic</option>
                                                                <option value="Drivability">Drivability</option>
                                                               
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mercury</td>
                                                        <td>
                                                            <select name="skill_level_mercury" id="skill_level_mercury" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Apprentice">Apprentice</option>
                                                                <option value="Journeyman">Journeyman</option>
                                                                <option value="Master">Master</option>
                                                               
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="diagnostic_mercury" id="diagnostic_mercury" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Basic">Basic</option>
                                                                <option value="Drivability">Drivability</option>
                                                               
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Oldsmobile</td>
                                                        <td>
                                                            <select name="skill_level_oldsmobile" id="skill_level_oldsmobile" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Apprentice">Apprentice</option>
                                                                <option value="Journeyman">Journeyman</option>
                                                                <option value="Master">Master</option>
                                                               
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="diagnostic_oldsmobile" id="diagnostic_oldsmobile" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Basic">Basic</option>
                                                                <option value="Drivability">Drivability</option>
                                                               
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Plymouth</td>
                                                        <td>
                                                            <select name="skill_level_plymouth" id="skill_level_plymouth" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Apprentice">Apprentice</option>
                                                                <option value="Journeyman">Journeyman</option>
                                                                <option value="Master">Master</option>
                                                               
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="diagnostic_plymouth" id="diagnostic_plymouth" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Basic">Basic</option>
                                                                <option value="Drivability">Drivability</option>
                                                               
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pontiac</td>
                                                        <td>
                                                            <select name="skill_level_pontiac" id="skill_level_pontiac" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Apprentice">Apprentice</option>
                                                                <option value="Journeyman">Journeyman</option>
                                                                <option value="Master">Master</option>
                                                               
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="diagnostic_pontiac" id="diagnostic_pontiac" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Basic">Basic</option>
                                                                <option value="Drivability">Drivability</option>
                                                               
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Ram</td>
                                                        <td>
                                                            <select name="skill_level_ram" id="skill_level_ram" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Apprentice">Apprentice</option>
                                                                <option value="Journeyman">Journeyman</option>
                                                                <option value="Master">Master</option>
                                                               
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="diagnostic_ram" id="diagnostic_ram" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Basic">Basic</option>
                                                                <option value="Drivability">Drivability</option>
                                                               
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Saturn</td>
                                                        <td>
                                                            <select name="skill_level_saturn" id="skill_level_saturn" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Apprentice">Apprentice</option>
                                                                <option value="Journeyman">Journeyman</option>
                                                                <option value="Master">Master</option>
                                                               
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="diagnostic_saturn" id="diagnostic_saturn" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Basic">Basic</option>
                                                                <option value="Drivability">Drivability</option>
                                                               
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tesla</td>
                                                        <td>
                                                            <select name="skill_level_tesla" id="skill_level_tesla" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Apprentice">Apprentice</option>
                                                                <option value="Journeyman">Journeyman</option>
                                                                <option value="Master">Master</option>
                                                               
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select name="diagnostic_tesla" id="diagnostic_tesla" class="form-control">
                                                                <option value="None">None</option>
                                                                <option value="Basic">Basic</option>
                                                                <option value="Drivability">Drivability</option>
                                                               
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="trade_cert">Upload Trade Certification</label>
                                            <input type="file" name="trade_cert" id="trade_cert" class="form-control">
                                        </div>
                                    </div>
                                    

                                    

                                    
                                    
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <button type="submit" class="default-btn">
                                            Continue
                                        </button>
                                    </div>
                                    {{--  <div class="col-12">
                                        <p class="account-desc">
                                            Already have an account?
                                            <a href="{{ route('login') }}">Sign In</a>
                                        </p>
                                    </div>  --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
