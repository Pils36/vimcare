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
                    <label for="lookupnumber">Get your customers vehicle iVIM record with their vehicle licence number</label>
                    <input type="text" name="searchIvim" id="searchIvim" class="form-control" placeholder="Find by Vehicle Licence">
                  </div>
              </div>
  
              <div class="col-md-12">
                  <div class="form-group">

                    <button class="btn btn-primary btn-block" id="ivimSearchbtn" onclick="ivimSearch('ivim')">Find <img class="spinner disp-0" src="https://vimfile.com/img/loader/spin.gif" style="width: 30px; height: 30px;"></button>

                  </div>
              </div>
  
              <div class="col-md-12">
  
                  <div id="ivimRec">
                    <div class="itemheader">
                    <table>
                        <tbody>
                            <tr><td></td>
                            <td align="right" style="padding-right:20px;"></td>
                            </tr>
                    </tbody>
                    </table>
                    </div>


                    <div class="itembody">
                            <table style="width: 100%;">
                                <tbody>

                                    <tr style="font-size: 12px;">
                                        <td colspan="15" align="center">
                                            <img class="spinner disp-0" src="https://vimfile.com/img/loader/spin.gif" style="width: 40px; height: 40px;">
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
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