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
                  <label for="lookupnumber">Labour Description</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Labour Category</label>
                  <select class="form-control searchLicence">
                      <option>Select One</option>
                  </select>

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Hour</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Rate Per Hour</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Flat Rate</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Wholesale Rate</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Retail Rate</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Deatailed Description</label>
                  <textarea type="text" name="vehicle_licence" id="licences" class="form-control searchLicence"></textarea>

                </div>
            </div>
            <div class="col-md-12" style="text-align: center">
              <hr>
                <h1>Media Link</h1>
                <hr>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Video</label>
                  <input type="file" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Note</label>
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