@extends('layouts.dashboard')

@section('content')

<?php use \App\Http\Controllers\Carrecord; ?>

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
        Opportunity Posts
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Opportunity Posts</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        
        @if (count($data['opportunityPosts']) > 0)
            @foreach ($data['opportunityPosts'] as $item)
            <div class="col-md-12">
                <!-- Box Comment -->
                <div class="box box-widget">
                  <div class="box-header with-border">
                    <div class="user-block">
                      <img class="img-circle" src="{{ $item->avatar }}" alt="User Image">
                      <span class="username"><a href="#">{{ $item->name }}</a></span>
                      <span class="description">Post Timeline - Till {{ date('d/F/Y', strtotime($item->post_timeline)) }}</span>
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
                            <p>Service Type: {{ $item->post_subject }}</p>
                        </div>
                        <div class="col-md-6">
                            <p>Previous Mileage: {{ $item->post_mileage }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Service Option: {{ $item->service_option }}</p>
                        </div>
                        <div class="col-md-6">
                            <p>Current Mileage: {{ $item->post_curr_mileage }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Make / Model: {{ $item->post_make." / ".$item->post_model }}</p>
                        </div>
                        <div class="col-md-6">
                            <p>Year: {{ $item->post_year }}</p>
                        </div>
                    </div>
      
                    <!-- Attachment -->
                    <div class="attachment-block clearfix">
                        @if($carrec = \App\Carrecord::where('vehicle_reg_no', $item->post_licence)->first())

                            @isset($carrec)

                            @if ($carrec->file != null || $carrec->file != "noImage.png")
                            <img class="attachment-img" src="{{ $carrec->file }}" alt="Attachment Image">
                                
                            @else

                            <img class="attachment-img" src="https://res.cloudinary.com/pilstech/image/upload/v1600186029/vimnewlogo_pndv6i.png" alt="Attachment Image">
                                
                            @endif

                                
                            @endisset

                        @else
                      <img class="attachment-img" src="https://res.cloudinary.com/pilstech/image/upload/v1600186029/vimnewlogo_pndv6i.png" alt="Attachment Image">

                        @endif
      
                      <div class="attachment-pushed">
                        <h4 class="attachment-heading">Description</h4>
      
                        <div class="attachment-text">
                            {!! $item->post_description !!}
                        </div>
                        <!-- /.attachment-text -->
                      </div>
                      <!-- /.attachment-pushed -->
                    </div>
    
                    <hr>
                    <h4>REPAIR LOCATION INFORMATION</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <p>ADDRESS: <a href="https://www.google.ng/maps/place/{{ $item->post_service_need }}" target="_blank">{{ $item->post_service_need }}</a></p>
                        </div>
                        <div class="col-md-6">
                            <p>STATE: {{ $item->poststate }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p>CITY: {{ $item->postcity }}</p>
                        </div>
                        <div class="col-md-6">
                            <p>ZIPCODE: {{ $item->postzipcode }}</p>
                        </div>
                    </div>
    
                    <br>
    
                    <div class="row">
                        <div class="col-md-4">
                            <button type="button" class="btn btn-warning btn-block">Check iVIM History</button>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-danger btn-block">Prepare Estimates</button>
                        </div>
                        <div class="col-md-4">
                            <button type="button" class="btn btn-primary btn-block">Chat with Client</button>
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