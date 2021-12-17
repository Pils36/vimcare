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
                  <label for="lookupnumber">Email</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Telephone</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Vehicle Nickname:</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Date Added</label>
                  <input type="date" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Make</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Model</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">City</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Vehicle Reg No</label>
                  <input type="email" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">VIN Number:</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Country of Registration</label>
                  <select  class="form-control searchLicence">
                      <option></option>
                  </select>

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">State/Province</label>
                  <select  class="form-control searchLicence">
                    <option></option>
                </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Purchase Type</label>
                  <select  class="form-control searchLicence">
                    <option></option>
                </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Year Owned Since:</label>
                  <select  class="form-control searchLicence">
                    <option>Select Country</option>
                </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Zip Code</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Current Mileage</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Upload Vehicle Image</label>
                  <input type="file" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
  
              <div class="col-md-6">
                  <div class="form-group">
                    <button type="button" class="btn btn-gray btn-block" onclick="licenceSearch()" id="licencesearch">Register another vehicle <img class="spinnerlicencesearch disp-0" src="https://vimfile.com/img/loader/spin.gif" style="width: 30px; height: 30px; "></button>


                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <button type="button" class="btn btn-primary btn-block" onclick="licenceSearch()" id="licencesearch">Save <img class="spinnerlicencesearch disp-0" src="https://vimfile.com/img/loader/spin.gif" style="width: 30px; height: 30px; "></button>


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