<?php
$theme = config('constants.ADMIN_THEME');
?>
@extends('admin.layouts.'. $theme .'.template')

@section('title', 'Schedule Meeting')

@section('content')

<?php
$breadcrumb = array(
    'listMeeting' => 'Meeting',
    'javascript:void(0)' => 'List'
);

?>
@include('admin.layouts.'. $theme .'.includes.breadcrumb')
<div class="m-content">
    <div class="m-portlet m-portlet--mobile">
	   @include('admin.layouts.'. $theme .'.includes.message-block')	
        <div class="m-portlet__head">
            <!--<div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        About Us 
                    </h3>
                </div>
            </div>-->
            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
				
                  <li class="m-portlet__nav-item">
                       <a href="{{ url(config('constants.ADMIN_URL').'addMeeting') }}" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                        <span>
                            <i class="la la-plus-circle"></i>
                            <span>
                                Schedule Meeting
                            </span>
                        </span>
                      </a>
                
						<li class="m-portlet__nav-item">
                        <?php /*$export = 'admin/users/ExportCSV?q='.$qstring ?>
                         <a href="{{ url($export) }}" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                            <span>
                                <i class="la la-download"></i>
                                <span>
                                    Export
                                </span>
                            </span>
                            </a> */ ?>
                        </li>
               </ul>
            </div>
         </div>
         <div class="m-portlet__body">
                <!--begin: Search Form -->
                <!--<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
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
                            </div>
                        </div>
                    </div>
                </div>-->
                <!--end: Search Form -->
                <!--begin: Datatable --> 
                <input type="hidden" value="{{ csrf_token() }}" id="token">
                <div class="m_datatable_user" id="tbl_about_us_list"></div> 
                <!--end: Datatable -->
            </div>
        </div>
    </div>
    <style>
        #tbl_about_us_list table tr th:first-child{cursor: default !important;}
        #tbl_about_us_list table tr th:last-child{cursor: default !important;}
    </style>
    @stop
    @section('js_footer_after_content')
    <script type="text/javascript">

        var datatable;
        var AjaxBasedDatatables = function() {
        //== Private functions
        var qstring = "test";
        
        var companyInit = function() {
            datatable = $('#tbl_about_us_list').mDatatable({
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            method: 'GET',
                            url: ADMIN_URL + 'ajaxListMeeting?q='+qstring,
                            map: function(raw) {
                                // console.log(raw);
                                var dataSet = raw;
                                if (typeof raw.data !== 'undefined') {
                                    dataSet = raw.data;
                                }
                                return dataSet;
                            },
                        },
                    },
                    pageSize: 10,
                    serverPaging: false,
                    serverFiltering: false,
                    serverSorting: false,
                },
                // layout definition
                layout: {
                    scroll: false,
                    footer: false
                },
                // column sorting
                sortable: false,
                pagination: false,
                toolbar: {
                    // toolbar items
                    items: {
                        // pagination
                        pagination: {
                            // page size select
                            pageSizeSelect: [10, 20, 30, 50, 100]
                        },
                    },
                },
                search: {
                    input: $('#generalSearch'),
                },
                rows: {
                    // auto hide columns, if rows overflow
                    autoHide: false
                },
                // columns definition
                columns: [
                {
                    field: 'id',
                    title: '#SL',
                    sortable: false, // disable sort for this column
                    width: 40,
                    selector: false,
                    textAlign: 'center',
                    template: function (row, index, datatable) {
                        return datatableCounter(datatable, index);
                    }
                },
                {
                    field: 'zoom_topic',
                    title: 'Topic',
                    width: 100,
                }, 
                {
                    field: 'zoom_id',
                    title: 'Zoom#Id',
                    width: 100,
                },
				{
                    field: 'zoom_password',
                    title: 'Password',
                    width: 100,
                },
                {
                    field: 'zoom_time',
                    title: 'Meeting Time',
                    width: 150,
                },
                // {
                //     field: 'status',
                //     title: 'Status',
                //     width: 100,
                //     // callback function support for column rendering
                //     template: function(row) {

                //         var status = {
                //                         0: {'title': 'Inactive', 'class': ' m-badge--danger'},
                //                         1: {'title': 'Active', 'class': ' m-badge--success'},
                //                      };

                //         var status_button = '<span id="sl'+row.id+'"><a href="javascript:void(0)" class="m-badge ' + status[row.status].class + ' m-badge--wide sts" title="Click to '+ (status[row.status].title == 'Active' ? 'Inactive' : 'Active') +'" data-status="'+row.status+'" data-id="'+row.id+'" data-token="{{ csrf_token() }}">' + status[row.status].title + '</a></span>';

                //         status_button += '<div class="m-loader m-loader--brand m--hide" style="width: 30px; display: inline-block;" id="spin'+row.id+'"></div>';

                //         return status_button;
                //     }
                // },
				{
                    field: 'zoom_url',
                    width: 100,
                    title: 'Actions',
                    sortable: false,
                    overflow: 'visible',
                    template: function (row, index, datatable) {
                        //var dropup = (datatable.getPageSize() - index) <= 4 ? 'dropup' : '';
                        
                        return '\
                        <a href="'+ row.zoom_url +'"class="m-badge--wide m-badge m-badge--success" title="Edit" target="_blank">Join Url\
                        </a>\
                        ';
                    },
                }],
            });
          };

            return {
                        // public functions
                        init: function() {
                            companyInit();
                        },
                    };
    }();
    

   jQuery(document).ready(function() {

        AjaxBasedDatatables.init();

        $('.m_datatable_user').on('click', '.delete', function(e){
            var id = $(this).attr('data-id');    
            var token = $(this).attr('data-token');     
            var ths = $(this);
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!'
            }).then(function (result) {
                if (result.value) {
                    if (id != '') {
                        $.ajax({
                            type: 'get',
                            url: ADMIN_URL + "deleteMeeting",
                            data: 'id=' + id + '&_token=' + token,
                            success: function (data) {
                                $('#' + id).hide();
                                $(ths).closest("table").closest("tr").hide();
                                datatable.reload();
                            }
                        })
                    }
                    swal(
                        'Deleted!',
                        'Contact has been deleted.',
                        'success'
                        )
                }
            });
        });


        $('.m_datatable_user').on('click', '.sts', function () {
            var status_type = $(this).attr('data-status');
            var id = $(this).attr('data-id');
            var token = $(this).attr('data-token');

            if (status_type != '') {
                $.ajax({
                    type: 'post',
                    url: ADMIN_URL + "changeMeetingStatus",
                    data: 'status=' + status_type + '&id=' + id + '&_token=' + token,
                    beforeSend: function () {
                        $('#spin' + id).removeClass('m--hide');
                    },
                    success: function (data) {
                        $('#spin' + id).addClass('m--hide');
                        if (status_type == 0) {
                            var e = '<a href="javascript:void(0)" class="m-badge m-badge--success m-badge--wide sts" title=" Click to Inactive" data-status="1" data-id="' + id + '" data-token="{{ csrf_token() }}">Active</a>';
                        } else {
                            var e = '<a href="javascript:void(0)" class="m-badge m-badge--danger m-badge--wide sts" title=" Click to Active"  data-status="0" data-id="' + id + '" data-token="{{ csrf_token() }}">Inactive</a>';
                        }
                        $("#sl" + id).html(e);
                    }
                })
            }
        });
    });

</script>
@stop
