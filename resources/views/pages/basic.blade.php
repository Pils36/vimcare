@extends('layouts.app')


@section('content')

@php
    $pages = 'Sign Up';
@endphp

<style>
    #carsto_workon, #certifications, #service_offer{
        height: 90px;
    }
    small, .reqfield{
        color: red;
        font-weight: bold;
    }
</style>


    <div class="inner-banner inner-bg8">
        <div class="container">
            <div class="inner-title text-center">
                <h3> Personal Information </h3>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevron-right'></i>
                    </li>
                    <li> Personal Information </li>
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
                                    Congratulations on your first step in becoming a Mobile Mechanic!
                                </h5>
                                <h5 class="text-center">
                                    Please complete the application by filling out the information below.
                                </h5>
                                
                                <span class="span-bg">Basic</span>

                            </div>
                            <form action="{{ route('insertBasic') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="station_name"><span class="reqfield">*</span>Trade Name</label>
                                            <input type="text" name="station_name" id="station_name" class="form-control" required
                                                data-error="Please enter your trade name" value="{{ Auth::user()->station_name }}" placeholder="E.g James Workshop">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="repair_experience"><span class="reqfield">*</span> How many years of shop or dealer repair experience do you have?</label>
                                            <input type="number" name="repair_experience" id="repair_experience" class="form-control" required
                                                data-error="Please enter repair experience" placeholder="E.g 15">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="fulltime_jobs"><span class="reqfield">*</span> How many full-time jobs have you had in the past five years?</label>
                                            <input type="number" name="fulltime_jobs" id="fulltime_jobs" class="form-control" required
                                                data-error="Please enter how many full-time jobs have you had in the past five years" placeholder="E.g 34">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="hours_per_week"><span class="reqfield">*</span> How many hours per week are you willing to work?</label>
                                            <input type="number" name="hours_per_week" id="hours_per_week" class="form-control" required
                                                data-error="Please enter how many hours per week are you willing to work" placeholder="E.g 8">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="distance_to_drive"><span class="reqfield">*</span> How far would you be willing to drive to an appointment?</label>
                                            <input type="text" name="distance_to_drive" id="distance_to_drive" class="form-control" required
                                                data-error="Please enter how far would you be willing to drive to an appointment" placeholder="E.g 20km">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="carsto_workon"><span class="reqfield">*</span> Type of cars I want to work on</label>
                                            <select name="carsto_workon[]" id="carsto_workon" class="form-control" multiple>
                                                <option value="Domestic">Domestic</option>
                                                <option value="European">European</option>
                                                <option value="Asian">Asian</option>
                                            </select>
                                        <small>Hold down the Ctrl (windows) or Command (Mac) button to select multiple options.</small>

                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="work_as"><span class="reqfield">*</span> I want to work</label>
                                            <select name="work_as" id="work_as" class="form-control">
                                                <option value="">Select option</option>
                                                <option value="Full-time">Full-time</option>
                                                <option value="Part-Time">Part-Time</option>
                                                <option value="Anytime">Anytime</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="certifications"><span class="reqfield">*</span> Certifications I have obtained</label>
                                            <select name="certifications[]" id="certifications" class="form-control" multiple>
                                                <option value="ASE A1">ASE A1</option>
                                                <option value="ASE A2">ASE A2</option>
                                                <option value="ASE A3">ASE A3</option>
                                                <option value="ASE A4">ASE A4</option>
                                                <option value="ASE A5">ASE A5</option>
                                                <option value="ASE A6">ASE A6</option>
                                                <option value="ASE A7">ASE A7</option>
                                                <option value="ASE A8">ASE A8</option>
                                                <option value="ASE A9">ASE A9</option>
                                                <option value="ASE L1">ASE L1</option>
                                                <option value="Epa609">Epa609</option>
                                                <option value="Air Bag">Air Bag</option>
                                                <option value="MACS A/C">MACS A/C</option>
                                                <option value="Smog Licensed">Smog Licensed</option>
                                                <option value="Brake And Lamp Certified">Brake And Lamp Certified</option>
                                            </select>
                                        <small>Hold down the Ctrl (windows) or Command (Mac) button to select multiple options.</small>

                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="service_offer"><span class="reqfield">*</span> Type of services I can perform</label>
                                            <select name="service_offer[]" id="service_offer" class="form-control" multiple>
                                                <option value="Repair And Replace Services">Repair And Replace Services</option>
                                                <option value="Diagnostic Services">Diagnostic Services</option>
                                                <option value="Pre-purchase Inspection Services">Pre-purchase Inspection Services</option>
                                                <option value="Oil Change Services">Oil Change Services</option>
                                               
                                            </select>
                                        <small>Hold down the Ctrl (windows) or Command (Mac) button to select multiple options.</small>

                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="resume"><span class="reqfield">*</span> Upload Resume</label>
                                            <input type="file" name="resume" id="resume" class="form-control" required>

                                        </div>
                                    </div>

                                    
                                    
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <button type="submit" class="default-btn">
                                            Continue
                                        </button>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
