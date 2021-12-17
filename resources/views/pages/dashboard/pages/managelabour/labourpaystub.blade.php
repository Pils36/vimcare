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
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">{{ $pages }}</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        
        <div class="box-body">

          <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="lookupnumber">Vehicle Licence</label>
                    <select class="form-control searchLicence">
                        <option>No Technician</option>
                    </select>

                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Start Date</label>
                  <input type="date" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">End Date</label>
                  <input type="date" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Report Date</label>
                  <input type="date" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Vehicle Licence</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Make</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Model</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Service Type</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Service Option</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Labour Hour</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Labour Rate</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Labour Pay Due</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Deduction</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Net Pay</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence" placeholder="0.00">

                </div>
            </div>

            
            

            <div class="col-md-12" style="text-align: center">
              <hr>
                <h1>Cash Payment</h1>
                <hr>
            </div>
            
            <div class="col-md-12">
                <div class="form-group">
                  <label for="lookupnumber">Cash Amount</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>
            <br>

            
            <div class="col-md-12" style="text-align: center">
              <hr>
                <h1>Cheque Payment</h1>
                <hr>
            </div>
            

            <div class="col-md-12">
                <div class="form-group">
                  <label for="lookupnumber">Cheque Number</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Cheque Date</label>
                  <input type="date" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Cheque Amount</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-12" style="text-align: center">
              <hr>
                <h1>Credit Card Payment</h1>
                <hr>
            </div>
            

            
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Credit Card Number</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>

            
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">CC</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>

            
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Credit Card Amount</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            
            
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Total Amount</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence" placeholder="0.00">

                </div>
            </div>
  
              <div class="col-md-4">
                  <div class="form-group">
                    <button type="button" class="btn btn-primary btn-block" onclick="licenceSearch()" id="licencesearch">Process Payment <img class="spinnerlicencesearch disp-0" src="https://vimfile.com/img/loader/spin.gif" style="width: 30px; height: 30px;"></button>


                  </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <button type="button" class="btn btn-warning btn-block" onclick="licenceSearch()" id="licencesearch">Print/Email <img class="spinnerlicencesearch disp-0" src="https://vimfile.com/img/loader/spin.gif" style="width: 30px; height: 30px;"></button>


                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                  <button type="button" class="btn btn-danger btn-block" onclick="licenceSearch()" id="licencesearch">Cancel <img class="spinnerlicencesearch disp-0" src="https://vimfile.com/img/loader/spin.gif" style="width: 30px; height: 30px;"></button>


                </div>
            </div>
  
              
  
          </div>
        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 @endsection