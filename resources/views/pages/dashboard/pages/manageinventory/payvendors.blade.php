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
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="lookupnumber">Purchase Order Number</label>
                    <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Vendor</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Order Date</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Date Expected</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Inventory Item</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Description of Item</label>
                  <textarea type="text" name="vehicle_licence" id="licences" class="form-control searchLicence" ></textarea>

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Quantity</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Rate</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Total Cost</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence" placeholder="0.00">

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Shipping Cost</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Less:Discount</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Other Costs</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Tax</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Purchase Order Total</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Advance Payment</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Balance Amount</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence" placeholder="0.00">

                </div>
            </div>

            

            <div class="col-md-12" style="text-align: center">
              <hr>
                <h1>Cash Payment</h1>
                <hr>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                  <label for="lookupnumber">Cash Amount</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-12" style="text-align: center">
              <hr>
                <h1>Cheque Payment</h1>
                <hr>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                  <label for="lookupnumber">Cheque #</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                  <label for="lookupnumber">Cheque Date</label>
                  <input type="date" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                  <label for="lookupnumber">Cheque Amount</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence" >

                </div>
            </div>

            <div class="col-md-12" style="text-align: center">
              <hr>
                <h1>Card Payment</h1>
              <hr>
            </div>

            
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Card #</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>

            
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">CC</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>

            
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Card Amount</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            
            
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Grand Total</label>
                  <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence" placeholder="0.00">

                </div>
            </div>
  
              <div class="col-md-4">
                  <div class="form-group">
                    <button type="button" class="btn btn-primary btn-block" onclick="licenceSearch()" id="licencesearch">Process Payment <img class="spinnerlicencesearch disp-0" src="https://vimfile.com/img/loader/spin.gif" style="width: 30px; height: 30px;"></button>


                  </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <button type="button" class="btn btn-gray btn-block" onclick="licenceSearch()" id="licencesearch">Save & Print/Email <img class="spinnerlicencesearch disp-0" src="https://vimfile.com/img/loader/spin.gif" style="width: 30px; height: 30px;"></button>


                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                  <button type="button" class="btn btn-danger btn-block" onclick="licenceSearch()" id="licencesearch">Cancel <img class="spinnerlicencesearch disp-0" src="https://vimfile.com/img/loader/spin.gif" style="width: 30px; height: 30px;"></button>


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