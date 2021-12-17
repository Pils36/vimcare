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
            <div class="col-md-12" style="text-align: center">
                <h1>Outstanding Invoices</h1>
            </div>
              
              <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Specify Payment Type</label>
                  <select class="form-control searchLicence">
                    <option>Select One</option>
                </select>

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Vehicle Licence</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Maintenance Date</label>
                  <input type="date" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Service Option</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Service Type</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Total Bill Amount</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Deposit Made</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Balance</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-12" style="text-align: center">
                <h1>Cash Payment</h1>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                  <label for="lookupnumber">Cash Payment</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>

            <div class="col-md-12" style="text-align: center">
                <h1>Cheque Payment</h1>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Cheque Payment Number</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Cheque Payment Date</label>
                  <input type="date" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Cheque Payment Amount</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>

            <div class="col-md-12" style="text-align: center">
                <h1>Credit Card (MC/VC/Others)</h1>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Card Number</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Expiry Date</label>
                  <input type="date" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Card Amount</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Total Payment Made</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence" placeholder="0">

                </div>
            </div>
  
              <div class="col-md-6">
                  <div class="form-group">
                    <button type="button" class="btn btn-primary btn-block" onclick="licenceSearch()" id="licencesearch">Process Payment <img class="spinnerlicencesearch disp-0" src="https://vimfile.com/img/loader/spin.gif" style="width: 30px; height: 30px; "></button>


                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <button type="button" class="btn btn-danger btn-block" onclick="licenceSearch()" id="licencesearch">Cancel <img class="spinnerlicencesearch disp-0" src="https://vimfile.com/img/loader/spin.gif" style="width: 30px; height: 30px; "></button>


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