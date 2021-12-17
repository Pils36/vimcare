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
                    <label for="lookupnumber">Vendors</label>
                    <select class="form-control searchLicence">
                        <option>--Select Vendors--</option>
                    </select>

                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Choose Purchase Order</label>
                  <select class="form-control searchLicence">
                    <option>Select one</option>
                </select>

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Order Date</label>
                  <input type="date" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Date Expected</label>
                  <input type="date" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Inventory Item</label>
                  <select class="form-control searchLicence">
                    <option>Select Inventory</option>
                </select>

                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Quantity</label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
             </div>
             <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">Rate </label>
                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

                </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                      <label for="lookupnumber">Total Cost </label>
                      <input type="number" name="vehicle_licence" id="licences" class="form-control searchLicence" placeholder="0.00">
    
                    </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="lookupnumber">Less Discount </label>
                          <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">
        
                        </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="lookupnumber">Other Costs </label>
                              <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">
            
                            </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                  <label for="lookupnumber">Tax </label>
                                  <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">
                
                                </div>
                            </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="lookupnumber">Purchase Order Total </label>
                                      <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence" placeholder="0.00">
                    
                                    </div>
                                </div>

        </div>
  
        <div style="text-align: center">
          <hr>
           <ul> <h1>Shipping Information</h1></ul>
           <hr>
        </div>

        <div class="col-md-6">
            <div class="form-group">
              <label for="lookupnumber">Ship To </label>
              <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
              <label for="lookupnumber">Address 1 </label>
              <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
              <label for="lookupnumber">Address 6 </label>
              <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">

            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
              <label for="lookupnumber">Country</label>
              <select class="form-control searchLicence" id="country"></select>

            </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label for="lookupnumber">State/Province</label>
                  <select class="form-control searchLicence" id="state">
                </select>

                </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                      <label for="lookupnumber">City </label>
                      <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">
        
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="form-group">
                      <label for="lookupnumber">Zip/Postal Code </label>
                      <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">
        
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                      <label for="lookupnumber">Destination Phone # </label>
                      <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">
        
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                      <label for="lookupnumber">Destination Fax </label>
                      <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">
        
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                      <label for="lookupnumber">Destination Email </label>
                      <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">
        
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                      <label for="lookupnumber">Ordered by Staff </label>
                      <input type="text" name="vehicle_licence" id="licences" class="form-control searchLicence">
        
                    </div>
                </div>


        <br>
              <div class="col-md-6">
                  <div class="form-group">
                    <button type="button" class="btn btn-primary btn-block" onclick="licenceSearch()" id="licencesearch">Submit <img class="spinnerlicencesearch disp-0" src="https://vimfile.com/img/loader/spin.gif" style="width: 30px; height: 30px; "></button>


                  </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                      <button type="button" class="btn btn-gray btn-block" onclick="licenceSearch()" id="licencesearch">Print/Email <img class="spinnerlicencesearch disp-0" src="https://vimfile.com/img/loader/spin.gif" style="width: 30px; height: 30px; "></button>
  
  
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