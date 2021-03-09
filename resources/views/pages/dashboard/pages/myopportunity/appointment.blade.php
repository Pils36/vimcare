@extends('layouts.dashboard')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Appointment Calendar
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Event Calendar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-md-3">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">Recent Appointments</h4>
            </div>
            <div class="box-body">

              @if (count($data['recentappointment']) > 0)
              <div id="external-events">

                  @foreach ($data['recentappointment'] as $item)
                      <!-- the events -->

                      <div class="external-event @if($item->service_option == "Scheduled Maintenance") bg-green @elseif($item->service_option == "Minor Repair") bg-aqua @elseif($item->service_option == "Emergency Maintenance") bg-red @elseif($item->service_option == "Major Repair") bg-yellow @endif">{{ $item->service_option.' with '.$item->name.' on '.$item->service_type }}</div>
                      <p style="font-weight: bold; color: navy;">Date of Visit: {{ date('d-M-Y', strtotime($item->date_of_visit)) }} {!! ($item->accstate == 2) ? "<span class='badge badge-success' style='background-color: #28a745; color: rgb(255, 255, 255);'>CLOSED</span>" : "<span class='badge badge-primary' style='background-color: #007bff; color: rgb(255, 255, 255);'>OPEN</span>" !!} </p>
                
                  @endforeach
              </div>

              @else
              <div id="external-events">
                <div class="external-event bg-red">No recent appointment</div>
              </div>
              @endif
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->

        </div>

        <!-- /.col -->
        <div class="col-md-9">
          <div class="box box-primary">
            <div class="box-body no-padding">
              <!-- THE CALENDAR -->
              <div id="calendar"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
