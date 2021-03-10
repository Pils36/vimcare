@extends('layouts.dashboard')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $pages }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active">{{ $pages }}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Book a Phone Call Appointment</h3>


          @if (session('success'))

          <div class="alert alert-success " role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              
          @elseif(session('error'))

          <div class="alert alert-error " role="alert">
            <strong>{{ session('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>


          @endif

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <form action="{{ route("appointmentonphone") }}" method="post">
            @csrf

            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" id="" class="form-control">
            </div>

            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" name="email" id="" class="form-control">
            </div>


            <div class="form-group">
              <label for="subject">Subject</label>

              <input type="hidden" name="ref_code" class="form-control" value="{{ uniqid() }}">
              <input type="text" name="subject" id="" class="form-control">
            </div>


            <div class="form-group">
              <label for="date_of_visit">Date of Visit</label>
              <input type="date" name="date_of_visit" id="" class="form-control">
            </div>


            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="service_option">Service Option</label>
                  <select name="service_option" id="" class="form-control"><option value="Major Repair">Major Repair</option><option value="Minor Repair">Minor Repair</option><option value="Scheduled Maintenance">Scheduled Maintenance</option><option value="Emergency Maintenance">Emergency Maintenance</option></select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="my_service_type">Service Type</label>
                  <select name="my_service_type" id="" class="form-control">
                    <option value="Service" selected="selected" disabled="disabled">Service</option>
    
                    <optgroup label="Admin"><option value="inspection">inspection</option><option value="registration">registration</option><option value="insurance">insurance</option><option value="road assistance">road assistance</option><option value="business taxes">business taxes</option><option value="Road Fines">Road Fines</option><option value="Ticket">Ticket</option></optgroup>
                    
                    <optgroup label="Fuel"><option value="fuel">fuel</option><option value="car wash">car wash</option></optgroup>
                    
                    <optgroup label="Maintenance"><option value="air conditioning recharge">air conditioning recharge</option><option value="air filter">air filter</option><option value="battery">battery</option><option value="brake fluid flush">brake fluid flush</option><option value="brake pads">brake pads</option><option value="brake rotors">brake rotors</option><option value="coolant flush">coolant flush</option><option value="distributor cap &amp; rotor">distributor cap &amp; rotor</option><option value="fuel filter">fuel filter</option><option value="headlight">headlight</option><option value="oil change">oil change</option><option value="power steering flush">power steering flush</option><option value="spark plugs">spark plugs</option><option value="timing belt">timing belt</option><option value="tire - new">tire - new</option><option value="tire balancing">tire balancing</option><option value="tire inflation">tire inflation</option><option value="tire rotation">tire rotation</option><option value="wheel rotation and tire balancing">Wheel Rotation & Tire Balancing</option><option value="transmission fluid flush">transmission fluid flush</option><option value="wheel alignment">wheel alignment</option><option value="wiper blades">wiper blades</option><option value="other">other</option><option value="cabin air filter">cabin air filter</option><option value="smog check">smog check</option></optgroup>
                    
                    <optgroup label="Repairs"><option value="alternator">alternator</option><option value="belt">belt</option><option value="body work">body work</option><option value="brake caliper">brake caliper</option><option value="carburetor">carburetor</option><option value="catalytic converter">catalytic converter</option><option value="clutch">clutch</option><option value="control arm">control arm</option><option value="coolant temperature sensor">coolant temperature sensor</option><option value="exhaust">exhaust</option><option value="fuel injector">fuel injector</option><option value="fuel tank">fuel tank</option><option value="head gasket">head gasket</option><option value="heater core">heater core</option><option value="hose">hose</option><option value="line">line</option><option value="mass air flow sensor">mass air flow sensor</option><option value="muffler">muffler</option><option value="oxygen sensor">oxygen sensor</option><option value="radiator">radiator</option><option value="shock/strut">shock/strut</option><option value="starter">starter</option><option value="thermostat">thermostat</option><option value="tie rod">tie rod</option><option value="transmission">transmission</option><option value="water pump">water pump</option><option value="wheel bearings">wheel bearings</option><option value="window">window</option><option value="windshield">windshield</option><option value="road side assistance">road side assistance</option><option value="other">other</option><option value="sensor">sensor</option></optgroup>
                
                </select>
                </div>
              </div>
            </div>



            <div class="form-group">
              <label for="current_mileage">Current Mileage</label>
              <input type="text" name="current_mileage" id="" class="form-control">
            </div>

            
            <div class="form-group">
              <label for="current_mileage">Appointment Discussion</label>
              <textarea class="form-control" name="my_message" id="my_message" placeholder="Enter Message" style="height: 150px; resize: none;"></textarea>
            </div>


            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>


            


            

          </form>
        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 @endsection