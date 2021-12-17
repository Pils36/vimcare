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

          
  
              <div class="col-md-12 table table-responsive">
  
                  <br><br>
  
                  <table class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>Licence</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Total Amount</th>
                              <th>Date</th>
                              <th>Status</th>
                              <th>Action</th>
                          </tr>
                      </thead>
      
                      <tbody id="list">
                          
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