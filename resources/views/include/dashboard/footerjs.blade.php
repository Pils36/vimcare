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

};

// $('.searchLicence').keypress(function (e) {
//   if (e.which == 13) {
//     // Click Search Btn
//     $("#licencesearch").click();
//     return false;
// });



// Search by Licence
function licenceSearch(){

    $("#licencesearch").text('Loading...');
    var route = "{{ URL('Ajax/licencesearch') }}";
    var thisdata = {vehicle_licence: $("#licences").val()};
    var spin = $('.spinnerlicencesearch');

    $("tbody#list").html("");

    if($("#licences").val() == ""){
      swal('Oops', 'Enter vehicle licence number to search', 'error');
      $("#licencesearch").text('Search');
    }
    else{
          setHeaders();
        jQuery.ajax({
        url: route,
        method: 'post',
        data: thisdata,
        dataType: 'JSON',
        beforeSend: function(){
          spin.removeClass('disp-0');
        },
        success: function(result){
          spin.addClass('disp-0');
            $("#licencesearch").text('Find');
            $("#licences").val('');
            if (result.message == "success") {
                var res = JSON.parse(result.data);
                var file; var make; var model; var mileage; var service_option; var service_type; var service_item_spec;
                var manufacturer; var material_cost; var labour_cost; var other_cost; var total_cost; var service_note; var update_by; var payment; var pay_status; var estimate_id; var country = '<?php if(Auth::user()){ echo Auth::user()->country;}?>'; var base;
                $.each(res, function(v,k){
                    file = k.file; make = k.make; mileage = k.mileage; service_option = k.service_option; service_type = k.service_type;
                    service_item_spec = k.service_item_spec; manufacturer = k.manufacturer; material_cost = k.material_cost; labour_cost = k.labour_cost; other_cost = k.other_cost; total_cost = k.total_cost; service_note = k.service_note; update_by = k.update_by; payment = k.payment; estimate_id = k.estimate_id; base = k.country;

                    if(payment == '2'){
                          pay_status = "PAID";
                        }
                        else if(payment == '1'){
                          pay_status = "NOT PAID";
                        }
                        else{
                          pay_status = "";
                        }

                        if(estimate_id == null){
                          view_more = "#";
                          views = "<a href='#' class='text-center'>-</a>";
                        }
                        else{
                          view_more = "/invoicereport/"+estimate_id;
                          views = "<a title='View More' style='font-weight: bold; color: darkblue;' href='"+view_more+"' target='_blank'><i type='button' style='padding: 10px;' title='View More' class='fas fa-eye text-danger' style='text-align: center; cursor: pointer;'></i></a>";
                        }

                    if(file != "noImage.png"){
                            $("tbody#list").append("<tr><td>"+(v+1)+"</td><td>"+ k.vehicle_licence +"</td><td>"+ k.date +"</td><td>"+ k.service_type +"</td><td>"+k.service_option+"</td><td>"+ k.mileage +"</td><td>"+ k.update_by +", ["+k.name_of_company+"]</td><td><a href='/uploads/"+ k.file +"' target='_blank'>Open file</a></td><td>"+ pay_status +"</td><td style='font-size: 17px; font-weight: bold;'>"+ k.total_cost +"</td><td>"+views+"</td><tr>");


                    }else{
                            $("tbody#list").append("<tr><td>"+(v+1)+"</td><td>"+ k.vehicle_licence +"</td><td>"+k.date+"</td><td>"+ k.service_type +"</td><td>"+k.service_option+"</td><td>"+ k.mileage +"</td><td>"+ k.update_by +", ["+k.name_of_company+"]</td><td>No attachment</td><td>"+ pay_status +"</td><td style='font-size: 17px; font-weight: bold;'>"+ k.total_cost +"</td><td>"+views+"</td><tr>");



                    }

                });

            }
            else
            {
               $("tbody#list").append("<tr><td colspan='11' align='center'>"+ result.data +"</td><tr>");
            }

        }

      });
    }


}


// Business IVIM/Report FUnction
function ivimSearch(val){
  $('div#ivimRec').html('');
  $('div#reportRec').html('');
  var route = "{{ URL('Ajax/ivimsearch') }}";
  var thisdata;
  var diff; var date; var mileage; var mileSince; var tyreRotate; var inspection; var registration;
  var diff2; var date; var mileage2; var mileSince2; var tyreRotate2; var inspection2; var registration2;
  var diff3; var date; var mileage3; var mileSince3; var tyreRotate3; var inspection3; var registration3;
  var diff4; var date; var mileage4; var mileSince4; var tyreRotate4; var inspection4; var registration4;
  var diff5; var date; var mileage5; var mileSince5; var tyreRotate5; var inspection5; var registration5;

  var spinner = $('.spinner');
  if(val == 'ivim'){
    thisdata = {
      purpose: val,
      licence: $('#searchIvim').val(),
    };
  }

  if(val == 'report'){
    thisdata = {
      purpose: val,
      licence: $('#searchReport').val(),
    };
  }


        setHeaders();
        jQuery.ajax({
        url: route,
        method: 'post',
        data: thisdata,
        dataType: 'JSON',
        beforeSend: function(){
          $('tr > td img').show();
          $('#ivimSearchbtn').text('Loading');
          $('#reportSearchbtn').text('Loading');
        },
        success: function(result){

          $('#searchIvim').val("");
          $('#searchReport').val(""),

          $('tr > td img').hide();

          $('#ivimSearchbtn').text('Find');
          $('#reportSearchbtn').text('Find');

          if(result.message == "success" && result.action == "ivim"){
            var res0 = JSON.parse(result.data);
            var res1 = res0.data1;
            var res2 = res0.data2;
            var res3 = res0.data3;
            var res4 = res0.data4;
            var res5 = res0.data5;
            var res6 = res0.data6;
            var res7 = res0.data7;


            if(res1 == ''){
              res1 = 'N/A';
              date = 'N/A';
              diff = 'N/A';
              mileage = 'N/A';
              mileSince = 'N/A';

            }
            else{
              date = res1[0].created_at;
              diff = dateDiffs(date);
              mileage = res1[0].mileage;
              mileSince = mileage - res0.data0.current_mileage;

            }
            if(res2== ''){
              res2= 'N/A';
              date2= 'N/A';
              diff2= 'N/A';
              mileage2 = 'N/A';
              mileSince2 = 'N/A';

            }
            else{
              date2 = res2.created_at;
              diff2 = dateDiffs(date2);
              mileage2 = res2.mileage;
              mileSince2 = mileage2 - res0.data0.current_mileage;

            }
            if(res3== ''){
              res3= 'N/A';
              date3= 'N/A';
              diff3= 'N/A';
              mileage3 = 'N/A';
              mileSince3 = 'N/A';

            }
            else{
              date3 = res3.created_at;
              diff3 = dateDiffs(date3);
              mileage3 = res3.mileage;
              mileSince3 = mileage3 - res0.data0.current_mileage;

            }

            if(res4== ''){
              res4= 'N/A';
              date4= 'N/A';
              diff4= 'N/A';
              mileage4 = 'N/A';
              mileSince4 = 'N/A';

            }
            else{
              date4 = res4.created_at;
              diff4 = dateDiffs(date4);
              mileage4 = res4.mileage;
              mileSince4 = mileage4 - res0.data0.current_mileage;

            }

            if(res5== ''){
              res5= 'N/A';
              date5= 'N/A';
              diff5= 'N/A';
              mileage5 = 'N/A';
              mileSince5 = 'N/A';

            }
            else{
              date5 = res5.created_at;
              diff5 = dateDiffs(date5);
              mileage5 = res5.mileage;
              mileSince5 = mileage5 - res0.data0.current_mileage;

            }




            


            $('div#ivimRec').append("<div class='itemheader'><table><tbody><tr><td>"+res0.data0.vehicle_nickname+"</td><td align='right' style='padding-right:20px;'></td></tr></tbody></table></div><div class='itembody'><table style='width: 100%;' class='table table-bordered table-striped'><tbody><tr><td style='font-weight: bold; font-size: 14px;'>Last Oil Change:</td><td>Date: "+date+" </td><td>Day Since: "+diff+"</td><td> Mileage: "+mileage+"</td><td> Mile Since: "+mileSince+"</td></tr><tr><td style='font-weight: bold; font-size: 14px;'>Last Tire Rotation:</td><td>Date: "+date2+"</td><td>Day Since: "+diff2+"</td><td> Mileage: "+mileage2+"</td><td> Mile Since: "+mileSince2+"</td></tr><tr><td style='font-weight: bold; font-size: 14px;'>Last Air Filter:</td><td>Date: "+date3+" </td><td>Day Since: "+diff3+"</td><td> Mileage: "+mileage3+"</td><td> Mile Since: "+mileSince3+"</td></tr><tr><td style='font-weight: bold; font-size: 14px;'>Last Inspection:</td><td>Date: "+date4+" </td><td>Day Since: "+diff4+"</td><td> Mileage: "+mileage4+" </td><td> Mile Since: "+mileSince4+"</td></tr><tr><td style='font-weight: bold; font-size: 14px;'>Last Registration:</td><td>Date: "+date5+" </td><td>Day Since: "+diff5+" </td><td> Mileage: "+mileage5+" </td><td> Mile Since: "+mileSince5+" </td></tr></tbody></table></div>");

          }
          else if(result.message == "success" && result.action == "report"){
            var res0 = JSON.parse(result.data);
            var res6 = res0.data6;
            var res7 = res0.data7;
            var res8 = res0.data8;
            var dayDiff;
            var avgtotMiles;
            var avgtotMaint;

            if(res6 == ''){
              res6 = 'N/A';
              totMiles = 'N/A';

            }
            else{
              totMiles = res6;
              dayDiff = calcDiffs(res0.data0.created_at, res8.created_at);

              if(dayDiff == 0){
                avgtotMiles = 0;
              }
              else{
                avgtotMiles = res6 / dayDiff;
              }



            }

            if(res7 == ''){
              res7 = 'N/A';
              totMaint = 'N/A';
            }
            else{
              totMaint = res7;
              dayDiff = calcDiffs(res0.data0.created_at, res8.created_at);

              if(dayDiff == 0){
                avgtotMaint = 0;
              }
              else{
                avgtotMaint = res7 / dayDiff;
              }

            }


            $('div#reportRec').append("<div class='itemheader'><table><tbody><tr><td>"+res0.data0.vehicle_nickname+"</td><td align='right' style='padding-right:20px;'></td></tr></tbody></table></div><div class='itembody'><table class='table table-bordered table-striped'><tbody><tr><td align='left' width='25%' style='font-weight: bold; text-transform: capitalize;'>Total miles driven:</td><td align='right'>"+res6+"</td></tr><tr><td align='left' width='25%' style='font-weight: bold; text-transform: capitalize;'>Avg. miles driven per month:</td><td align='right'>"+parseFloat(avgtotMiles).toFixed(2)+"</td></tr><tr><td align='left' width='25%' style='font-weight: bold; text-transform: capitalize;'>Total maintenance cost:</td><td align='right'>"+res7+"</td></tr><tr><td align='left' width='25%' style='font-weight: bold; text-transform: capitalize;'>Avg. maintenance cost per month:</td><td align='right'>"+parseFloat(avgtotMaint).toFixed(2)+"</td></tr></tbody></table></div>");

          }
          else{
            swal('Oops', result.data, result.message);
          }


        }

      });
}


function dateDiffs(created_at){
  var date1 = new Date(created_at);
  var date2 = new Date();

  // To calculate the time difference of two dates
  var Difference_In_Time = date2.getTime() - date1.getTime();

  // To calculate the no. of days between two dates
  var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);


  return Math.round(Difference_In_Days);
}


function calcDiffs(acct_date, maint_date){
  var date1 = new Date(acct_date);
  var date2 = new Date(maint_date);
  var dayRes;

  // To calculate the time difference of two dates
  var Difference_In_Time = date2.getTime() - date1.getTime();

  // To calculate the no. of days between two dates
  var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);


  if(Difference_In_Days < 30){
    dayRes = 0;
  }
  else if(Difference_In_Days > 30){

    dayRes = Difference_In_Days / 30;
  }


  return Math.round(dayRes);
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
