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
                        <option>Select one</option>
                    </select>
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
                  <label for="lookupnumber">Report Date</label>
                  <input type="date" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Service type</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Service option</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Labour Hour</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Labour Rate</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Labour Pay Due</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence" placeholder="0.00">

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Technician</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            
  
              <div class="col-md-4">
                  <div class="form-group">
                    <button type="button" class="btn btn-primary btn-block" onclick="licenceSearch()" id="licencesearch">Process Payment <img class="spinnerlicencesearch disp-0" src="https://vimfile.com/img/loader/spin.gif" style="width: 30px; height: 30px;"></button>


                  </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <button type="button" class="btn btn-warning btn-block" onclick="licenceSearch()" id="licencesearch">Save & Print/Email <img class="spinnerlicencesearch disp-0" src="https://vimfile.com/img/loader/spin.gif" style="width: 30px; height: 30px;"></button>


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