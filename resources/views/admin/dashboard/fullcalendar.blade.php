<?php
    $theme = config('constants.ADMIN_THEME');
?>
@extends('admin.layouts.'. $theme .'.templatecalendar')

@section('title', 'Calendar')

@section('content')

<?php
    $breadcrumb = array(
        'javascript:void(0)' => 'Calendar'
    );
?>



<div class="m-content">
    <div class="m-portlet m-portlet--mobile">
        
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Calendar
                    </h3>
                </div>
            </div>
        </div>

        <div class="m-portlet__body">

            <?php /*
            <!--begin: Search Form -->
            <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                <div class="row align-items-center">
                    <div class="col-xl-8 order-2 order-xl-1">
                        <div class="form-group m-form__group row align-items-center">
                            <div class="col-md-6">
                                <div class="m-form__group m-form__group--inline">
                                    <div class="m-form__label">
                                        <label>
                                            Filters:
                                        </label>
                                    </div>
                                </div>
                                <div class="d-md-none m--margin-bottom-10"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                <div class="row align-items-center">
                    <div class="col-xl-12 order-2 order-xl-1">
                        <div class="form-group m-form__group row align-items-center">

                            <div class="col-md-3 col-xl-3">
                                <div class="m-input-icon m-input-icon--left" style="margin-top:-12px;">
                                    <input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
                                    <span class="m-input-icon__icon m-input-icon__icon--left">
                                        <span>
                                            <i class="la la-search"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <div class="col-md-3 col-xl-3">
                                <div class="m-form__group form-group">
                                    <select class="form-control m-bootstrap-select" id="m_form_status">
                                        <option value="">All Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <div class="d-md-none m--margin-bottom-10"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--end: Search Form --> */ ?>

            <div id="m_calendar2"></div>

        </div>
    </div>
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

        var calendar = $('#m_calendar2');

        calendar.fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,lWeek,agendaDay,listMonth'
            },
            eventLimit: true, // allow "more" link when too many events
            navLinks: true,
            displayEventTime: false,
           
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
			window.open("<?php echo url('administrator/viewTicket'); ?>/"+event.id, '_blank');
			},

            eventRender: function(event, element) {
                // default render
                // 
                  //element.data('content', event.description);
                    //element.data('placement', 'top');
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
@stop