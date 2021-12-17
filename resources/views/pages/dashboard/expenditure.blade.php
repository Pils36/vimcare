@extends('layouts.dashboard')

@section('content')


        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                    <small>Control panel</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active">{{ $pages }}</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>&nbsp;</h3>

                                <p>Vendor Invoices</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="{{ route('vendor invoices') }}" class="small-box-footer">Vendor Invoices <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>&nbsp;</h3>

                                <p>Vendor Unpiad Invoices</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{ route('vendor unpaid invoices') }}" class="small-box-footer">Vendor Unpiad Invoices <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-yellow">
                            <div class="inner">
                                <h3>&nbsp;</h3>

                                <p>Vendor Paid Invoices</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="{{ route('vendor paid invoices') }}" class="small-box-footer">Vendor Paid Invoices <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>&nbsp;</h3>

                                <p>Vendor Statement</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{ route('vendor statement') }}" class="small-box-footer">Vendor Statement <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h3>&nbsp;</h3>

                                <p>Technician Pay Schedule</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="{{ route('technician pay schedule') }}" class="small-box-footer">Technician Pay Schedule <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-orange">
                            <div class="inner">
                                <h3>&nbsp;</h3>

                                <p>Technician Pay Stub</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{ route('technician pay stub') }}" class="small-box-footer">Technician Pay Stub <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-green">
                            <div class="inner">
                                <h3>&nbsp;</h3>

                                <p>Technician Unpaid Work</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="{{ route('technician unpaid work') }}" class="small-box-footer">Technician Unpaid Work <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-aqua">
                            <div class="inner">
                                <h3>&nbsp;</h3>

                                <p>Technician Paid Work</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{ route('technician paid work') }}" class="small-box-footer">Technician Paid Work <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="col-lg-3 col-xs-6">
                        <!-- small box -->
                        <div class="small-box bg-orange">
                            <div class="inner">
                                <h3>&nbsp;</h3>

                                <p>Technician Payment History </p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="{{ route('technician payment history') }}" class="small-box-footer">Technician Payment History <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- /.row -->

                </div>
                <!-- /.row -->


            </section>
            <!-- /.content -->
        </div>

        @endsection
