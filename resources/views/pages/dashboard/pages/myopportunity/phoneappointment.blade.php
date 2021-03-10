@extends('layouts.dashboard')

@section('content')

<?php use \App\Http\Controllers\User; ?>

<style>
    body{
        font-family: "Montserrat";
    }
    p{
        font-weight: 700;
    }
    .description{
        font-weight: 700;
        color: darkorange !important;
    }
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Phone Appointment List
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Phone Appointment List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">

        <div class="col-md-12">
          @if (session('success'))

          <div class="alert alert-success " role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
              
          @elseif(session('error'))

          <div class="alert alert-error " role="alert">
            <strong>{{ session('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>


          @endif
        </div>
        
        
        @if (count($data['phoneappointment']) > 0)
            @foreach ($data['phoneappointment'] as $item)
            <div class="col-md-12">
                <!-- Box Comment -->
                <div class="box box-widget">
                  <div class="box-header with-border">
                    <div class="user-block">
                      <img class="img-circle" src="https://cdn4.iconfinder.com/data/icons/shopping-kalor/142/24hours-512.png" alt="User Image">
                      <span class="username"><a href="#">{{ $item->subject }}</a></span>
                      <span class="description">Call Date - {{ date('d/F/Y', strtotime($item->date_of_visit)) }}</span>
                    </div>
                    <!-- /.user-block -->

                    <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Minimize" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                      </div>
                      <!-- /.box-tools -->
                    
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <p>Service Type: {{ $item->service_type }}</p>
                        </div>
                        <div class="col-md-6">
                            <p>Customer Name: {{ $item->name }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Service Option: {{ $item->service_option }}</p>
                        </div>
                        <div class="col-md-6">
                            @if($userDet = \App\User::where('email', $item->email)->first())
                            <p>Customer Phone: <a href="tel:{{ $userDet->phone_number }}">{{ $userDet->phone_number }}</a></p>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Call Date: {{ date('d/F/Y', strtotime($item->date_of_visit)) }}</p>
                        </div>
                        <div class="col-md-6">
                            <p>Customer's Email: <a href="mailto:{{ $item->email }}">{{ $item->email }}</a></p>
                        </div>
                    </div>

                    
                    <!-- /.attachment-block -->
                  </div>
                  <!-- /.box-body -->
    
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col -->   
            @endforeach
        @else

        <div class="col-md-12">
            <!-- Box Comment -->
            <div class="box box-widget">
              
              <div class="box-body">
                
                <div class="row">
                    <div class="col-md-12">
                        <p style="text-align: center">No Record</p>
                    </div>
                    
                </div>
                
 
                
                <!-- /.attachment-block -->
              </div>
              <!-- /.box-body -->

            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->   
            
        @endif

        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection