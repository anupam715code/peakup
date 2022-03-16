<?php $theme = config('constants.ADMIN_THEME'); ?>
@extends('admin.layouts.'. $theme .'.template')
@section('title', 'Dashboard')
@section('content')
<style>
    .m-widget24 .m-widget24__item .m-widget24__stats{ margin-right: 0px; }
    .m-widget24 .m-widget24__item .m-widget24__desc{ margin-left: 0px; }
    .m-widget24 .m-widget24__item .m-widget24__title{ margin-left: 1.2rem; }
</style>
<!-- BEGIN: Subheader -->
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title ">
                Dashboard
            </h3>
        </div>
    </div>
</div>
<div class="m-content">
    <!--Begin::Section-->
    <div class="m-portlet ">
        <div class="m-portlet__body  m-portlet__body--no-padding">
            <div class="row m-row--no-padding ">
               
              <div class="col-md-12 col-lg-6 col-xl-12">
               <div class="row">
			   <div class="col-md-12 col-lg-6 col-xl-4">
                    <!--begin::New Feedbacks-->
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                <a href="{{ '#' }}">Total Users</a>
                            </h4>
                            <br>
                            <!--<span class="m-widget24__desc">
                                    Customer Review
                            </span>-->
                            <span class="m-widget24__stats m--font-danger">
                                {{ 0 }}
                            </span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar m--bg-danger" role="progressbar" style="width: {{ '0' }}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="m-widget24__change">
                                Change
                            </span>
                            <span class="m-widget24__number">
                                 {{ 0 }}%
                            </span>
                        </div>
                    </div>
                    <!--end::New Feedbacks-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-4">
                    <!--begin::New Feedbacks-->
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                <a href="{{ '#' }}">Pending Meetings</a>
                            </h4>
                            <br>
                            <!--<span class="m-widget24__desc">
                                    Customer Review
                            </span>-->
                            <span class="m-widget24__stats m--font-danger">
                                {{ 0 }}
                            </span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar m--bg-danger" role="progressbar" style="width: {{ '0' }}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="m-widget24__change">
                                Change
                            </span>
                            <span class="m-widget24__number">
                                 {{ 0 }}%
                            </span>
                        </div>
                    </div>
                    <!--end::New Feedbacks-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-4">
                    <!--begin::New Orders-->
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                <a href="{{ '#' }}">Total Meetings</a>
                            </h4>
                            <br>
                            <!--<span class="m-widget24__desc">
                                    Fresh Order Amount
                            </span>-->
                            <span class="m-widget24__stats m--font-success">
                                 {{ 0 }}
                            </span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar m--bg-success" role="progressbar" style="width: {{ '0' }}%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="m-widget24__change">
                                Change
                            </span>
                            <span class="m-widget24__number">
                                 {{ 0 }}%
                            </span>
                        </div>
                    </div>
                    <!--end::New Orders-->
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!--End::Section-->
    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <!--Begin::Portlet-->
            <div class="m-portlet  m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                System Summary
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-scrollable mCustomScrollbar _mCS_5 mCS-autoHide" data-scrollbar-shown="true" data-scrollable="true" data-max-height="100" style="overflow: visible; height: 100px; max-height: 100px; position: relative;">
                        <!--Begin::Timeline 2 -->
                        <div class="m-timeline-2">
                            <div class="m-timeline-2__items  m--padding-top-25 m--padding-bottom-30">
                               
                            </div>
                        </div>
                        <!--End::Timeline 2 -->
                    </div>
                </div>
            </div>
            <!--End::Portlet-->
        </div>
    </div>    
    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-6 col-lg-12">
            <!--Begin::Portlet-->
            <div class="m-portlet  m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                               Total Stats for Today
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-scrollable mCustomScrollbar _mCS_5 mCS-autoHide" data-scrollbar-shown="true" data-scrollable="true" data-max-height="100" style="overflow: visible; height: 100px; max-height: 380px; position: relative;">
                        <!--Begin::Timeline 2 -->
                        <div class="m-timeline-2">
                            <div class="m-timeline-2__items  m--padding-top-25 m--padding-bottom-30">
							
                            </div>
                        </div>
                        <!--End::Timeline 2 -->
                    </div>
                </div>
            </div>
            <!--End::Portlet-->
        </div>
        <div class="col-xl-6 col-lg-12">
            <!--Begin::Portlet-->
            <div class="m-portlet m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Total Stats for Yesterday
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="m-scrollable mCustomScrollbar _mCS_5 mCS-autoHide" data-scrollbar-shown="true" data-scrollable="true" data-max-height="100" style="overflow: visible; height: 100px; max-height: 380px; position: relative;">
                        <!--Begin::Timeline 2 -->
                        <div class="m-timeline-2">
                            <div class="m-timeline-2__items  m--padding-top-25 m--padding-bottom-30">
                            
                            </div>
                        </div>
                        <!--End::Timeline 2 -->
                    </div>
                </div>
            </div>
            <!--End::Portlet-->
        </div>
    </div>
    <!--End::Section-->
</div>
@stop

@section('js_footer_after_content')

    <script src="{{ asset(env('ASSETS_PATH').'assets/metronic/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset(env('ASSETS_PATH').'assets/metronic/demo/default/custom/components/calendar/external-events.js') }}" type="text/javascript"></script>

    <link href="{{ asset(env('ASSETS_PATH').'assets/metronic/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />

    <script type="text/javascript">
        var CalendarExternalEvents = function() {

    var initExternalEvents = function() {
        $('#m_calendar_external_events .fc-event').each(function() {

            // store data so the calendar knows to render an event upon drop
            $(this).data('event', {
                title: $.trim($(this).text()), // use the element's text as the event title
                stick: true, // maintain when user navigates (see docs on the renderEvent method)
                className: $(this).data('color'),
                description: 'Lorem ipsum dolor eius mod tempor labore'
            });

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true, // will cause the event to go back to its
                revertDuration: 0 //  original position after the drag
            });
        });
    }
    
    var initCalendar = function() {
        var todayDate = moment().startOf('day');
        var YM = todayDate.format('YYYY-MM');
        var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
        var TODAY = todayDate.format('YYYY-MM-DD');
        var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

        var calendar = $('#m_calendar1');

        calendar.fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,lWeek,agendaDay,listMonth' //'month, agendaWeek, agendaDay, listWeek'
            },
            eventLimit: true, // allow "more" link when too many events
            navLinks: true,
			displayEventTime: false,
            //events: <?php //echo $finalJson ; ?>,
			events: '<?php echo url('/administrator/calendarData'); ?>',

            editable: false,
            droppable: false, // this allows things to be dropped onto the calendar

            drop: function(date, jsEvent, ui, resourceId) {
                var sdate = $.fullCalendar.moment(date.format());  // Create a clone of the dropped date.
                sdate.stripTime();        // The time should already be stripped but lets do a sanity check.
                sdate.time('08:00:00');   // Set a default start time.

                var edate = $.fullCalendar.moment(date.format());  // Create a clone.
                edate.stripTime();        // Sanity check.
                edate.time('12:00:00');   // Set a default end time.

                $(this).data('event').start = sdate;
                $(this).data('event').end = edate;

                // is the "remove after drop" checkbox checked?
                if ($('#m_calendar_external_events_remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },
			eventClick: function (event) {
			window.open("<?php echo url('administrator/addTicket'); ?>/"+event.id, '_blank');
			
			},

            eventRender: function(event, element) {
                // default render
                 //element.data('content', event.description);
                   // element.data('placement', 'top');
                    //mApp.initPopover(element);
                     element.data('content', '');
                    element.data('placement', 'top');
                    mApp.initPopover(element);
                if (element.hasClass('fc-day-grid-event')) {
                    element.data('content', event.description);
                    element.data('placement', 'top');
                    mApp.initPopover(element);
                    element.find('.fc-title').append('<div class="fc-description">Technician: '+ event.techname +'<br>Site Name: '+ event.site_name +'<br>City: '+ event.city +'<br>Work Order: '+ event.work_order +'</div>');
                } else if (element.hasClass('fc-time-grid-event')) {
                    element.find('.fc-title').append('<div class="fc-description">' + event.description + '<br>Address: -'+ event.address +'<br>Technician: - '+ event.techname +', Site Name: '+ event.site_name +', City: '+ event.city +'<br>Job Code: '+ event.job_code +', Service Code: '+ event.service_code +', Work Order: '+ event.work_order +'</div>');
               } else if (element.find('.fc-list-item-title').lenght !== 0) {
                    element.find('.fc-list-item-title').append('<div class="fc-description">' + event.description + '<br><strong>Address:</strong> - '+ event.address +'<br><strong>Technician:</strong> - '+ event.techname +', <strong>Site Name:</strong> '+ event.site_name +', <strong>City:</strong> '+ event.city +'<br><strong>Job Code:</strong> '+ event.job_code +', <strong>Service Code:</strong> '+ event.service_code +', <strong>Work Order:</strong> '+ event.work_order +'</div>');
                }
            }
        });
    }

    return {
        //main function to initiate the module
        init: function() {
            initExternalEvents();
            initCalendar(); 
        }
    };
}();

jQuery(document).ready(function() {
    CalendarExternalEvents.init();
});
    </script>
    <script type="text/javascript">
      //  var locations = {{-- json_encode($technicianList) --}};
        //console.log(locations.length);
        /*var locations = [
            ['Yorba Linda, CA, USA', 33.888504, -117.813255, 4],
            ['Smiths Station, AL, USA', 32.540138, -85.098549, 5],
            ['Rapid City, SD, USA', 44.080544, -103.231018, 3],
            ['Hillsboro, OR, USA', 45.522896, -122.989830, 2],
            ['Elkhart, IN, USA', 41.681992, -85.976669, 1],
            ['Providence, RI, USA', 41.825226, -71.418884, 1],
            ['Rancho Cucamonga, CA, USA', 34.110489, -117.594429, 1],
            ['Orange, CA, USA', 33.787914, -117.853104, 1]
        ];*/

       // var map;
      /*  function initMapdashboard() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 5,
                center: new google.maps.LatLng(44.080544, -103.231018),
                //center: new google.maps.LatLng(28.7041, 77.1025),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            var infowindow = new google.maps.InfoWindow();

            var marker, i;

            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i].latitude, locations[i].longitude),
                    map: map
                });

                google.maps.event.addListener(marker, 'click', (function (marker, i) {
                    return function () {
                        if (locations[i].lastname == null ) {

                            infoWindowContent = '<strong>Name:</strong> ' + locations[i].firstname +'<br/><strong>Email:</strong> ' + locations[i].email +'<br/><strong>Phone:</strong> ' + locations[i].phone; 
                        infowindow.setContent(infoWindowContent);
                        infowindow.open(map, marker);

                        } else {

                            infoWindowContent = '<strong>Name:</strong> ' + locations[i].firstname +' '+ locations[i].lastname +'<br/><strong>Email:</strong> ' + locations[i].email +'<br/><strong>Phone:</strong> ' + locations[i].phone; 
                        infowindow.setContent(infoWindowContent);
                        infowindow.open(map, marker);


                        }
                        
                    }
                })(marker, i));
            }
        }*/
    </script>
@stop