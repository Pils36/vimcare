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
              <div class="col-md-4">
                  <div class="form-group">
                    <label for="lookupnumber">Part #</label>
                    <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                  </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Description</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Category</label>
                  <select class="form-control searchLicence">
                      <option></option>
                  </select>

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">UPS Code</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Location</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Quantity @ hand</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                  <label for="lookupnumber">Created by</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
  
              <div class="col-md-12">
                  <div class="form-group">
                    <button type="button" class="btn btn-primary btn-block" onclick="licenceSearch()" id="licencesearch">Submit <img class="spinnerlicencesearch disp-0" src="https://vimfile.com/img/loader/spin.gif" style="width: 30px; height: 30px; "></button>


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