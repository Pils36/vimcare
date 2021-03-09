@extends('layouts.app')


@section('content')

@php
    $pages = 'Sign Up';
@endphp

<style>
    #manadatory_tools{
        height: 200px;
    }
    small, .reqfield{
        font-weight: bold;
        font-size: 14px;
        color: red;
    }
    label{
        font-weight: bold;
    }
</style>


    <div class="inner-banner inner-bg8">
        <div class="container">
            <div class="inner-title text-center">
                <h3> My Tools </h3>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevron-right'></i>
                    </li>
                    <li> My Tools </li>
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
                                    Which of the following tools do you have?
                                </h5>
                                
                                <span class="span-bg">Tools</span>

                            </div>
                            <form action="{{ route('insertTools') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="row">
                                    
                                    
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <small>
                                                <p style="color: navy; font-weight: bold;"><span class="reqfield">*</span> Mandatory Tools</p>
                                            </small>


                                            <select name="manadatory_tools[]" id="manadatory_tools" class="form-control" multiple>
                                                <option value=""></option>
                                                <option value="Oil Drain Pan">Oil Drain Pan</option>
                                                <option value="Used Oil Collection Jugs">Used Oil Collection Jugs</option>
                                                <option value="Funnels">Funnels</option>
                                                <option value="Metric Sockets">Metric Sockets</option>
                                                <option value="Allen Sockets And Bits">Allen Sockets And Bits</option>
                                                <option value="Flare Nut Wrenches">Flare Nut Wrenches</option>
                                                <option value="Torx Socket And Bits">Torx Socket And Bits</option>
                                                <option value="Impact Sockets">Impact Sockets</option>
                                                <option value="Service Jack">Service Jack</option>
                                                <option value="Jack Stands">Jack Stands</option>
                                                <option value="Heavy Duty Booster Pack">Heavy Duty Booster Pack</option>
                                                <option value="Inspection Mirror">Inspection Mirror</option>
                                                <option value="Serpentine Belt Tool Set">Serpentine Belt Tool Set</option>
                                                <option value="Torque Wrench 1/2 Inch Drive">Torque Wrench 1/2 Inch Drive</option>
                                                <option value="Tire Pressure Gauge">Tire Pressure Gauge</option>
                                                <option value="Air Supply Or Compressor">Air Supply Or Compressor</option>
                                                <option value="Electric Drill And Bits">Electric Drill And Bits</option>
                                                <option value="Hood Prop">Hood Prop</option>
                                                <option value="Test Light">Test Light</option>
                                                <option value="Jumper Wires">Jumper Wires</option>
                                                <option value="Fuel Pressure Gauge With Fittings">Fuel Pressure Gauge With Fittings</option>
                                                <option value="Compression Gauge">Compression Gauge</option>
                                                <option value="Vacuum Gauge Set">Vacuum Gauge Set</option>
                                                <option value="Timing Light">Timing Light</option>
                                                <option value="Fuel Line Quick Disconnect Set">Fuel Line Quick Disconnect Set</option>
                                                <option value="Soldering Gun">Soldering Gun</option>
                                                <option value="Vacuum Pump Set">Vacuum Pump Set</option>
                                                <option value="Leak Down Tester">Leak Down Tester</option>
                                                <option value="Battery Load Tester/Analyzer">Battery Load Tester/Analyzer</option>
                                                <option value="OBD-|| Scanner">OBD-|| Scanner</option>
                                                <option value="Scan Tool (ABS-Capable)">Scan Tool (ABS-Capable)</option>
                                                <option value="Hose Pliers">Hose Pliers</option>
                                                <option value="Pressure Tester With Adapters">Pressure Tester With Adapters</option>
                                                <option value="Infrared Temperature Gauge/Gun">Infrared Temperature Gauge/Gun</option>
                                                <option value="Fan Clutch Tools">Fan Clutch Tools</option>
                                                <option value="Caliper Retractor Tool Set">Caliper Retractor Tool Set</option>
                                                <option value="Pad Wear Gauge">Pad Wear Gauge</option>
                                                <option value="Brake Spring Service Tool">Brake Spring Service Tool</option>
                                                <option value="Caliper/Micrometer">Caliper/Micrometer</option>
                                                <option value="Brake Bleeder Equipment">Brake Bleeder Equipment</option>
                                                <option value="Manifold Gauge Set">Manifold Gauge Set</option>
                                                <option value="A/C Line Quick Disconnect Tool Set">A/C Line Quick Disconnect Tool Set</option>
                                                <option value="3/8 Inch Torque Wrench">3/8 Inch Torque Wrench</option>
                                                <option value="Torque Indicator Dial">Torque Indicator Dial</option>
                                                <option value="Impact Gun 1/2 Inch Drive">Impact Gun 1/2 Inch Drive</option>
                                                <option value="Power Steering Pump Pulley Remover Set">Power Steering Pump Pulley Remover Set</option>
                                                <option value="Steering Wheel Puller">Steering Wheel Puller</option>
                                                <option value="Ball Joint Press">Ball Joint Press</option>
                                                <option value="Strut Compressor">Strut Compressor</option>
                                                <option value="Digital Volt Ohm Meter">Digital Volt Ohm Meter</option>
                                                <option value="Airbag">Airbag</option>
                                            </select>
                                        <small>Hold down the Ctrl (windows) or Command (Mac) button to select multiple options.</small>
                                            
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <button type="submit" class="default-btn">
                                            Submit
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
