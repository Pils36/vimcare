</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('dashboard/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('dashboard/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);

</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('dashboard/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Morris.js charts -->
<script src="{{ asset('dashboard/bower_components/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('dashboard/bower_components/morris.js/morris.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('dashboard/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('dashboard/bower_components/jquery-knob/dist/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('dashboard/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('dashboard/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- datepicker -->
<script src="{{ asset('dashboard/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- Slimscroll -->
<script src="{{ asset('dashboard/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('dashboard/bower_components/fastclick/lib/fastclick.js') }}"></script>

<!-- fullCalendar -->
<script src="{{ asset('dashboard/bower_components/moment/moment.js') }}"></script>
<script src="{{ asset('dashboard/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('dashboard/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dashboard/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dashboard/dist/js/demo.js') }}"></script>


<script>
      $(function () {


// Start Calendar

    /* initialize the external events
     -----------------------------------------------------------------*/
     function init_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    init_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
        
    $('#calendar').fullCalendar({
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week : 'week',
        day  : 'day'
      },
      //Random default events
      events: function(start, end, timezone, callback){
        $.ajaxSetup({
             headers: {
                'X-CSRF-TOKEN': "{{csrf_token()}}"
             }
          });
        jQuery.ajax({
        url: location.origin+"/Ajax/getappointments",
        method: 'post',
        data: {station: "{{ Auth::user()->station_name }}"},
        dataType: 'JSON',
        success: function(result){
            if(result.message == "success"){
                var res = JSON.parse(result.data);

                var events = [];
                        if(!!res){
                            $.each(res, function(v,k){
                              var color;
                              if(k.service_option == "Scheduled Maintenance"){
                                color = "#00a65a"; 
                              }
                              else if(k.service_option == "Minor Repair"){
                                color = "#00c0ef";
                              }
                              else if(k.service_option == "Emergency Maintenance"){
                                color = "#f56954";
                              }
                              else if(k.service_option == "Major Repair"){
                                color = "#f39c12";
                              }
                                events.push({
                                    title: k.service_option+' with '+k.name+' on '+k.service_type,
                                    start: k.date_of_visit,
                                    end: k.date_of_visit,
                                    backgroundColor: color,
                                    borderColor: color,
                                    ref_code: k.ref_code
                                });
                                
                            });

                        }
                        callback(events);
                    }
                }

                });
            
        },
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function (date, allDay) { // this function is called when something is dropped

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject')

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject)

        // assign it the date that was reported
        copiedEventObject.start           = date
        copiedEventObject.allDay          = allDay
        copiedEventObject.backgroundColor = $(this).css('background-color')
        copiedEventObject.borderColor     = $(this).css('border-color')

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove()
        }

      },
      eventClick: function(calEvent, jsEvent, view) {
          var eventModal = $('#view_events');
          $("tbody#myevents").html("");
          // Run Show Event Ajax Here
                        $.ajaxSetup({
                         headers: {
                            'X-CSRF-TOKEN': "{{csrf_token()}}"
                         }
                      });
                        jQuery.ajax({
                        url: location.origin+"/Ajax/getthisappointment",
                        method: 'post',
                        data: {ref_code: calEvent.ref_code},
                        dataType: 'JSON',
                        success: function(result){
                            if(result.message == "success"){
                            var res = JSON.parse(result.data);

                            console.log(res);

                              if(res[0].accstate == 0){
                                    status = "<input type='hidden' id='bookingcode' value='"+res[0].ref_code+"'><button type='button' class='btn btn-primary btn-block' onclick=closeAppoint('"+res[0].ref_code+"')>Close Appointment<img class='spinnerbookingcode disp-0' src='https://i.ya-webdesign.com/images/loading-gif-png-5.gif' style='width: 30px; height: 30px;'></button>";
                                }
                                else if(res[0].accstate == 2){
                                  status = "<button type='button' class='btn btn-success btn-block' disabled>Appointment Closed</button>";
                                }

                          $("tbody#myevents").html("<tr><td style='font-weight: 600;'>Booking Code:</td><td align='justify'>"+res[0].ref_code+"</td></tr><tr><td style='font-weight: 600;'>Appointment Date:</td><td align='justify'>"+res[0].date_of_visit+"</td></tr><tr><td style='font-weight: 600;'>Vehicle Licence:</td><td align='justify'>"+res[0].vehicle_reg_no+"</td></tr><tr><td style='font-weight: 600;'>Expected Discount:</td><td>"+res.discount+"</td></tr><tr><td style='font-weight: 600;'>Customer Email:</td><td>"+res[0].email+"</td></tr><tr><td style='font-weight: 600;'>Customer Phone:</td><td>"+res[0].telephone+"</td></tr><tr><td style='font-weight: 600;'>Service Option:</td><td>"+res[0].service_option+"</td></tr><tr><td style='font-weight: 600;'>Service Type:</td><td>"+res[0].service_type+"</td></tr><tr><td style='font-weight: 600;'>Vehicle Make:</td><td>"+res[0].make+"</td></tr><tr><td style='font-weight: 600;'>Vehicle Model:</td><td>"+res[0].model+"</td></tr><tr><td style='font-weight: 600;'>Current Mileage:</td><td>"+res[0].current_mileage+"</td></tr><tr><td style='font-weight: 600;'>Year Owned Since: </td><td>"+res[0].year_owned_since+"</td></tr><tr><td style='font-weight: 600;'>Description: </td><td>"+res[0].message+"</td></tr>");

                                        $(".activation").html(status);

                                
                                  eventModal.click();
                                
                            }
                        }

                        });
      },
    })

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      init_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })

    // End Calendar



})


function lookupVin(){

var formData = new FormData();

  var spinner = $('.spinnerlookup');
  var route = "{{ URL('Ajax/vinlookup') }}";

if($('#lookupnumber').val() == ""){
  swal('Oops!', 'Please provide a valid VIN number', 'error');
}
else{

  formData.append("id", 'decode');
  formData.append("vin", $('#lookupnumber').val());

  doAjax(route, spinner, formData);
}

}


function doAjax(route, spinner, thisdata){
      $('tbody#vintable').html('');
        setHeaders();
            jQuery.ajax({
                url: route,
                method: 'post',
                data: thisdata,
                cache: false,
                processData: false,
                contentType: false,
                beforeSend: function(){
                    spinner.removeClass('disp-0');
                    $('tbody#vintable').html('<tr><td colspan="2" align="center"><img src="https://res.cloudinary.com/pilstech/image/upload/v1603447174/grey_style_zyxc4p.gif" alt="" style="width: 50px; height: 50px;"></td></tr>');
                },
                success: function(result){
                    if(result.message == "success"){

                      $('tbody#vintable').html('<tr><td colspan="2" align="center"><img src="https://res.cloudinary.com/pilstech/image/upload/v1603447174/grey_style_zyxc4p.gif" alt="" style="width: 50px; height: 50px;" class="disp-0"></td></tr>');

                      spinner.addClass('disp-0');
                       
                       if(result.action == "vinlookup"){
                          var res = JSON.parse(result.data);

                          $.each(res.decode, function(v,k){
                              $('tbody#vintable').append('<tr><td>'+k.label+'</td><td>'+k.value+'</td></tr>');
                          });

                        }
                        else{
                            spinner.addClass('disp-0');
                            swal(result.title, result.res, result.message);
                            $('tbody#vintable').html('<tr><td colspan="2" align="center"><img src="https://res.cloudinary.com/pilstech/image/upload/v1603447174/grey_style_zyxc4p.gif" alt="" style="width: 50px; height: 50px;" class="disp-0"></td></tr>');
                        }
                    }
                    else{
                        spinner.addClass('disp-0');
                        swal(result.title, result.res, result.message);
                        $('tbody#vintable').html('<tr><td colspan="2" align="center"><img src="https://res.cloudinary.com/pilstech/image/upload/v1603447174/grey_style_zyxc4p.gif" alt="" style="width: 50px; height: 50px;" class="disp-0"></td></tr>');
                    }
                }
            });
    }


        //Set CSRF HEADERS
 function setHeaders(){
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': "{{csrf_token()}}"
      }
    });
 }

function closeAppoint(ref_code){
    $("#ref_booking").val(ref_code);

    $("#visittookplace").click();
    $(".recClose").click();
}
</script>




</body>

</html>
