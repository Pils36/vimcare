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
              <div class="col-md-12">
                  <div class="form-group ">
                    <label for="lookupnumber">Select Vendor</label>
                    <select class="form-control searchLicence">
                        <option>Select one</option>
                    </select>

                  </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Code</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Name</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Sales Rep Name</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Address</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Country</label>
                  <select class="form-control searchLicence" id="country">
                </select>

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">State/Province</label>
                  <select class="form-control searchLicence" id="state">
                </select>

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">City</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Email</label>
                  <input type="email" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Phone Number</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Fax</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Updated By</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
  
              <div class="col-md-12">
                  <div class="form-group">
                    <button type="button" class="btn btn-primary btn-block" onclick="licenceSearch()" id="licencesearch">Update <img class="spinnerlicencesearch disp-0" src="https://vimfile.com/img/loader/spin.gif" style="width: 30px; height: 30px; "></button>


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