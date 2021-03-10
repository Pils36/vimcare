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

          @if (Auth::user()->plan == "Free" || Auth::user()->plan == "Start Up")

          <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                    <label for="lookupnumber">VIN Number</label>
                    <input type="text" name="lookupnumber" id="lookupnumber" class="form-control" placeholder="Enter VIN Number">
                  </div>
              </div>
  
              <div class="col-md-12">
                  <div class="form-group">
                    <button class="btn btn-primary btn-block" onclick="lookupVin()">VIN Look Up <img class="spinnerlookup disp-0" src="https://vimfile.com/img/loader/spin.gif" style="width: 30px; height: 30px;"></button>
                  </div>
              </div>
  
              <div class="col-md-12 table table-responsive">
  
                  <br><br>
  
                  <table class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>Label</th>
                              <th>Value</th>
                          </tr>
                      </thead>
      
                      <tbody id="vintable">
                          
                      </tbody>
                  </table>
              </div>
  
              
  
          </div>
              
          @else
  
  
          <div class="row">
              <div class="col-md-12">
                  <h3>
                      This feature is only available to paid users. <a href="#" type="button" class="btn btn-info">Upgrade today</a>
                  </h3>
              </div>
  
              
  
          </div>
              
          @endif
        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 @endsection