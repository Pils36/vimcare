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
                  <div class="form-group">
                    <label for="lookupnumber">Technician name</label>
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

            

           
<br><br>
            
  
              

            <div class="col-md-12">
                <div class="form-group">
                  <button type="button" class="btn btn-primary btn-block" onclick="licenceSearch()" id="licencesearch">Check Stub <img class="spinnerlicencesearch disp-0" src="https://vimfile.com/img/loader/spin.gif" style="width: 30px; height: 30px;"></button>


                </div>
            </div>

            <div class="col-md-12 table table-responsive">
  
                  <br><br>
  

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Report date</th>
                        <th>Vehicle Licence</th>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Service Option</th>
                        <th>Service type</th>
                        <th>Labour Hour</th>
                        <th>Labour Rate</th>
                        <th>Pay Due</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody id="list">
                    
                </tbody>
            </table>
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