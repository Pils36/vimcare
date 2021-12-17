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
              <hr>
                <h1>Details</h1>
                <hr>
            </div>
              
              <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Firstname</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Lastname</label>
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
                  <label for="lookupnumber">Password</label>
                  <input type="password" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Phone</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                  <label for="lookupnumber">Description of Speciality</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                  <label for="lookupnumber">Category</label>
                  <select class="form-control searchLicence">
                      <option>Select one</option>
                  </select>
                </div>
            </div>
            <div class="col-md-12" style="text-align: center">
              <hr>
                <h1>Charge To Store</h1>
                <hr>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Hourly Rate</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Flat Rate</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Budgeted Hours</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Total Costs</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence" placeholder="0.00">

                </div>
            </div>
            <div class="col-md-12" style="text-align: center">
              <hr>
                <h1>Media </h1>
                <hr>
            </div>
            
            
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Video Upload</label>
                  <input type="file" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Job Description</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Note</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
  
              <div class="col-md-6">
                  <div class="form-group  form-control searchLicence ">
                    <button type="button" class="btn btn-gray btn-block" onclick="licenceSearch()" id="licencesearch">Time Sheet Lookup <img class="form-control spinnerlicencesearch disp-0" src="https://vimfile.com/img/loader/spin.gif" ></button>


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