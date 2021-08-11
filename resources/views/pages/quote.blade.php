@extends('layouts.app')


@section('content')

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
                <h3> Request a Quote </h3>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevron-right'></i>
                    </li>
                    <li> Request a Quote </li>
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
                                    Fill out the form below 
                                </h5>
                                
                            </div>
                            <form action="{{ route('register') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <div class="form-group">
                                            <label for="name"><span class="reqfield">*</span> Your fullname</label>

                                            <input type="hidden" name="userType" id="userType" value="{{ Request::get('user') }}">

                                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" required
                                                data-error="Please enter your fullname" placeholder="Fullname" value="{{ old('name') }}">

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="phone_number"><span class="reqfield">*</span> Your phone number</label>
                                            <input type="text" name="phone_number" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror" required
                                                data-error="Please enter phone number" placeholder="Phone Number" value="{{ old('phone_number') }}">

                                                @error('phone_number')
                                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email"><span class="reqfield">*</span> E-mail address</label>
                                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required
                                                data-error="Please enter e-mail address" placeholder="E-mail address" value="{{ old('email') }}">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email-confirm"><span class="reqfield">*</span> Confirm E-mail address</label>
                                            <input type="email" name="email_confirmation" id="email-confirm" class="form-control" required
                                                data-error="Please confirm e-mail address" placeholder="Confirm E-mail address">

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="password"><span class="reqfield">*</span> Password</label>
                                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required
                                                data-error="Provide a password" placeholder="Password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror

                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="password-confirm"><span class="reqfield">*</span> Confirm Password</label>
                                            <input type="password" name="password_confirmation" id="password-confirm" class="form-control" required
                                                data-error="Please confirm password" placeholder="Confirm Password" autocomplete="new-password">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-lg-12 col-md-12 text-center">
                                        <button type="submit" class="default-btn">
                                            Submit
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
