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
  
              <div class="col-md-12 table table-responsive">
  
                  <table class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>Vehicle Nick</th>
                              <th>Licence</th>
                              <th style="text-align: center;"><img src="https://triplogmileage.com/wp-content/uploads/2018/01/Sm_blue_logo-01.png"></th>
                          </tr>
                      </thead>
      
                      <tbody>
                          @if (count($data) > 0)
                          @php
                              $i = 1;
                          @endphp
                              @foreach ($data as $item)
                              
                                  <tr>
                                      <td>{{ $i++ }}</td>
                                      <td>{{ $item->vehicle_nickname }}</td>
                                      <td>{{ $item->vehicle_reg_no }}</td>
                                      <td align="center">
                                            <i style="padding: 7px; color: darkorange;" title="Create User" class="fas fa-plus" type="button" onclick="triplogAction('create_user', '{{ $item->vehicle_reg_no }}')"></i>
                                            <i style="padding: 7px; color: brown;" title="State Mileage" class="fas fa-clipboard-list" type="button" onclick="triplogAction('state_mileage', '{{ $item->vehicle_reg_no }}')"></i>
                                            <i style="padding: 7px; color: green;" title="Locations" class="far fa-compass" type="button" onclick="triplogAction('locations', '{{ $item->vehicle_reg_no }}')"></i>
                                            <i style="padding: 7px; color: navy;" title="User Current Location" class="fas fa-street-view" type="button" onclick="triplogAction('user_current_location', '{{ $item->vehicle_reg_no }}')"></i>
                                            <i style="padding: 7px; color: tomato;" title="Delete Record" class="far fa-trash-alt" type="button" onclick="triplogAction('deleterec', '{{ $item->vehicle_reg_no }}')"></i>
                                        </td>
                                  </tr>
                              @endforeach
                          @else

                          <tr>
                              <td colspan="4" align="center">No record</td>
                          </tr>
                              
                          @endif
                          
                      </tbody>
                  </table>
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