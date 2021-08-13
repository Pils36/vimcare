@extends('layouts.app')


@section('content')




    <div class="inner-banner inner-bg8">
        <div class="container">
            <div class="inner-title text-center">
                <h3> Ask Expert </h3>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <i class='bx bxs-chevron-right'></i>
                    </li>
                    <li> Ask Expert </li>
                </ul>
            </div>
        </div>
    </div>





<div class="choose-area pt-100 pb-70">
    <div class="container">
        
        <div class="row pt-45">
            <div class="col-lg-4 col-sm-6">
                <div class="choose-item" style="height: 100%">
                    <div class="choose-item-icon one-bg">
                        <i class='bx bx-help-circle'></i>
                    </div>
                    <h3> Vehicle Owner</h3>
                    <p>Are you a Vehicle Owner? </p>
                    <a href="https://Soar.vimfile.com/login" target="_blank" class="read-more">
                        Click here to proceed <i class="bx bx-right-arrow-alt"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="choose-item" style="height: 100%">
                    <div class="choose-item-icon two-bg">
                        <i class='bx bx-time'></i>
                    </div>
                    <h3> Auto Dealer</h3>
                    <p>Are you an Auto Dealer? </p>
                    <a href="https://Autodealer.vimfile.com/login" target="_blank" class="read-more">
                        Click here to proceed <i class="right-icon bx bx-right-arrow-alt"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 offset-lg-0 offset-sm-3">
                <div class="choose-item" style="height: 100%">
                    <div class="choose-item-icon three-bg">
                        <i class='bx bx-bulb'></i>
                    </div>
                    <h3> Mechanic</h3>
                    <p>Are you a mechanic?  </p>
                    <a href="https://vimfile.com/login" target="_blank" class="read-more">
                       Click here to proceed <i class="right-icon bx bx-right-arrow-alt"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>















@endsection
