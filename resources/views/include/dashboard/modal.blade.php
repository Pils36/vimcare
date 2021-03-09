{{-- View Event POST START --}}

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary disp-0" data-toggle="modal" data-target="#vieweventPostsCenter" id="view_events">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="vieweventPostsCenter" tabindex="-1" role="dialog" aria-labelledby="vieweventPostsCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          
          <button type="button" class="close recClose" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <h5 class="modal-title" id="vieweventPostsLongTitle">Appointment Record</h5>
        </div>
        <div class="modal-body">
            <div class="table table-responsive">
              <table class="table table-striped table-bordered">
                  <tbody id="myevents"></tbody>
              </table>
            </div>
              
        </div>
        <div class="modal-footer activation">
  
        </div>
      </div>
    </div>
  </div>
  
  
  {{-- View Event POST END--}}



  {{--  Start Visit Took Place  --}}

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary disp-0" data-toggle="modal" data-target="#visitTookPlaceCenter" id="visittookplace">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="visitTookPlaceCenter" tabindex="-1" role="dialog" aria-labelledby="visitTookPlaceCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="visitTookPlaceLongTitle">Confirm Visit took place</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('close appointment') }}" method="POST">
              @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="visit_took_place">Visit took place?</label>
                        <input type="hidden" name="ref_code" id="ref_booking" value="">
                        <select name="visit_took_place" id="visit_took_place" class="form-control" required>
                            <option value="">Select Option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="granted_discount">Granted Discount?</label>
                        <select name="granted_discount" id="granted_discount" class="form-control" required>
                            <option value="">Select Option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-danger btn-block">Close Appointment</button>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  {{--  End Visit Took Place  --}}