@extends('admin.layouts.template')
@section('title', 'Dashboard')

@section('content')

<!-- BEGIN: Subheader -->
<div class="m-subheader ">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">Users</h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="{{ url('admin/dashboard') }}" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">-</li>
                <li class="m-nav__item">
                    <a href="{{ url('admin/users') }}" class="m-nav__link">
                        <span class="m-nav__link-text">
                            Users
                        </span>
                    </a>
                </li>
                <li class="m-nav__separator">
                    -
                </li>
                <li class="m-nav__item">
                    <a href="javascript:void(0)" class="m-nav__link">
                        <span class="m-nav__link-text">
                            Users List
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END: Subheader -->
<div class="m-content">
    <div class="m-portlet m-portlet--mobile">
        
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Users List
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <?php $export = 'admin/users/ExportCSV?q='.$qstring ?>
                         <a href="{{ url($export) }}" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                            <span>
                                <i class="la la-download"></i>
                                <span>
                                    Export
                                </span>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="m-portlet__body">
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
                                <div class="m-form__group form-group">
                                    <select class="form-control m-bootstrap-select" id="m_form_gender">
                                        <option value="">All Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="d-md-none m--margin-bottom-10"></div>
                            </div>

                            <div class="col-md-3 col-xl-3">
                                <div class="m-form__group form-group">
                                    <select class="form-control m-bootstrap-select" id="m_form_age">
                                        <option value="">All Age</option>
                                        <?php $get_age = get_age(); ?>
                                        @foreach ($get_age as $age)
                                            @if($age->new_age != 0)
                                                <option value="{{ $age->new_age }}">{{ $age->new_age }} Years</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="d-md-none m--margin-bottom-10"></div>
                            </div>

                            <div class="col-md-3 col-xl-3">
                                <div class="m-form__group form-group">
                                    <select class="form-control m-bootstrap-select" id="m_form_city">
                                        <option value="">All City</option>
                                        <?php $get_city = get_cities(); ?>
                                        @foreach ($get_city as $city)
                                            <option value="{{ $city->place_name }}">{{ ucwords($city->place_name) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="d-md-none m--margin-bottom-10"></div>
                            </div>

                            <div class="col-md-3 col-xl-3">
                                <div class="m-form__group form-group">
                                    <select class="form-control m-bootstrap-select" id="m_form_country">
                                        <option value="">All Country</option>
                                        <?php $countries = get_countries(); ?>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->country_name }}">{{ ucwords($country->country_name) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="d-md-none m--margin-bottom-10"></div>
                            </div>

                            <div class="col-md-3 col-xl-3">
                                <div class="m-form__group form-group">
                                    <select class="form-control m-bootstrap-select" id="m_form_status">
                                        <option value="">All Status</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                                </div>
                                <div class="d-md-none m--margin-bottom-10"></div>
                            </div>

                            <div class="col-md-3 col-xl-3">
                                <div class="m-form__group form-group">
                                    <select class="form-control m-bootstrap-select" id="m_form_goals">
                                        <option value="">All Goals</option>
                                        <option value="weight_loss">Weight Loss</option>
                                        <option value="increase_strength">Increase Strength & Stamina</option>
                                        <option value="run_marathan">Run a Marathon</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>
                                <div class="d-md-none m--margin-bottom-10"></div>
                            </div>

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
            </div>
            <!--end: Search Form -->
            <!--begin: Datatable -->
            
            <input type="hidden" value="{{ csrf_token() }}" id="token">
            <div class="m_datatable_user" id="local_data_user"></div>
            
            <!--end: Datatable -->
        </div>
    </div>
</div>
</div>
<style>
    #local_data_user table tr th:first-child{cursor: default !important;}
    #local_data_user table tr th:last-child{cursor: default !important;}
</style>
@stop





@section('js_footer_after_content')
<script type="text/javascript">
//== Class definition
var datatable;
    var DatatableRemoteAjaxDemo = function() {
      //== Private functions
        var base_url = "{{ url('admin/users') }}" ;
        var qstring = "{{ $qstring }}";
        
        var health_tips = function() {
       datatable = $('.m_datatable_user').mDatatable({
          // datasource definition
          data: {
            type: 'remote',
            source: {
              read: {
                method: 'GET',
                url: base_url + '/ajax_users_list?q='+qstring,
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
            serverPaging: true,
            serverFiltering: true,
            serverSorting: true,
          },


          // layout definition
          layout: {
            scroll: false,
            footer: false
          },

          // column sorting
          sortable: true,

          pagination: true,

          toolbar: {
            // toolbar items
            items: {
              // pagination
              pagination: {
                // page size select
                pageSizeSelect: [10, 20, 30, 50, 100],
              },
            },
          },

            search: {
                input: $('#generalSearch'),
            },

            rows: {
                // auto hide columns, if rows overflow
                autoHide: true
            },
          
            // columns definition
            columns: [
            {
                field: 'user_id',
                title: 'Id',
                sortable: true, // disable sort for this column
                width: 40,
                selector: false,
                textAlign: 'center',
            }, 
            {
                field: 'name',
                title: 'Name',
                width: 120,
            }, 
            {
                field: 'email',
                title: 'Email',
                width: 160,
            }, 
            {
                field: 'gender',
                title: 'Gender',
                width: 80,
            }, 
            {
                field: 'amount',
                title: 'Fitcoins',
                width: 90,
                template: function (row) {
                    var view = base_url + '/wallet-details/' + row.user_id;
                    if(row.amount == null){
                        return 0;
                    }else{
                        return '<a href="'+ view +'" title="View Fitcoins Details">'+ row.amount + '</a>';
                    }
                },
            }, 
            {
                field: 'dob',
                title: 'Age',
                width: 100,
                // sortable: false,
                template: function (row) {
                    var dob = new Date(row.dob);
                    var today = new Date();
                    var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));

                    return age+' Years';
                },
            }, 
            {
                field: 'status',
                title: 'Status',
                width: 100,
                // callback function support for column rendering
                template: function(row) {

                    var status = {
                        1: {'title': 'Active', 'class': ' m-badge--success'},
                        2: {'title': 'Inactive', 'class': ' m-badge--danger'},
                    };
                    var status_button = '<span id="sl'+row.user_id+'"><a href="javascript:void(0)" class="m-badge ' + status[row.status].class + ' m-badge--wide sts" title="Click to '+ (status[row.status].title == 'Active' ? 'Inactive' : 'Active') +'" data-status="'+status[row.status].title+'" data-id="'+row.user_id+'" data-token="{{ csrf_token() }}">' + status[row.status].title + '</a></span>';
                    status_button += '<div class="m-loader m-loader--brand m--hide" style="width: 30px; display: inline-block;" id="spin'+row.user_id+'"></div>';
                    return status_button;
                },
            }, 
            {
                field: 'place_name',
                title: 'City/State',
                width: 80,
            }, 
            {
                field: 'country_name',
                title: 'Country',
                width: 80,
            },             
            {
                field: 'indate_time',
                title: 'Member Since',
                type: 'datetime',
                format: "YYYY/MM/DD HH:mm:ss",
                sortable: false,
            }, 
            {
                field: 'steps',
                title: 'Steps',
                sortable: false,
            }, 
            {
                field: 'calories',
                title: 'Calories Burnt',
                sortable: false,
                template: function(row){
                    return (Math.round( row.calories * 100 )/100 ).toString()
                }
            }, 
            {
                field: 'bmi',
                title: 'BMI',
                sortable: false,
                template: function(row){
                    return (Math.round( row.bmi * 100 )/100 ).toString()
                }
            }, 
            {
                field: 'height1',
                title: 'Height',
                sortable: false,
            }, 
            {
                field: 'weight1',
                title: 'Weight',
                sortable: false,
            }, 
            {
                field: 'Actions',
                width: 110,
                title: 'Actions',
                sortable: false,
                overflow: 'visible',
                template: function (row, index, datatable) {
                    var dropup = (datatable.getPageSize() - index) <= 4 ? 'dropup' : '';
                    var base_url2 = "{{ url('admin/users') }}" ;
                    return '\
                        <a href="javascript:void(0)" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill delete" title="Delete" data-id="'+row.user_id+'" data-token="{{ csrf_token() }}">\
                             <i class="la la-trash"></i>\
                         </a>\
                        ';
                },
            }],
        });

        $('#m_form_status').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Status');
        });

        $('#m_form_gender').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Gender');
        });

        $('#m_form_city').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'City');
        });

        $('#m_form_country').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Country');
        });

         $('#m_form_age').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Age');
        });

         $('#m_form_goals').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Goals');
        });

        $('#m_form_status, #m_form_country, #m_form_city, #m_form_gender, #m_form_age, #m_form_goals').selectpicker();

      };

      return {
        // public functions
        init: function() {
          health_tips();
        },
      };
    }();

    jQuery(document).ready(function() {
      DatatableRemoteAjaxDemo.init();
});


// delete from list
$(document).ready(function(){
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
        }).then(function(result) {
            if (result.value) {
                if (id != '') {
                    $.ajax({
                        type: 'post',
                        url: "{{ url('admin/users/delete_record') }}",
                        data: 'id=' + id + '&_token=' + token,
                        success: function (data) {
                            $('#'+id).hide();
                            $(ths).closest("table").closest("tr").hide();
                            datatable.reload();
                        }
                    })
                }  
                swal(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        });
    });
});



// change status
$(document).ready(function(){
    $('.m_datatable_user').on('click', '.sts', function(){
        var status_type = $(this).attr('data-status');
        var id = $(this).attr('data-id');
        var token = $(this).attr('data-token');
        
        if (status_type != '') {
            $.ajax({
                type: 'post',
                url: "{{ url('admin/users/change_status') }}",
                data: 'status=' + status_type + '&id=' + id + '&_token=' + token,
                beforeSend: function() {
                    $('#spin'+id).removeClass('m--hide');            
                },
                success: function (data) {
                    $('#spin'+id).addClass('m--hide');
                    if(status_type == 'Inactive'){
                        var e = '<a href="javascript:void(0)" class="m-badge m-badge--success m-badge--wide sts" title=" Click to Inactive" data-status="Active" data-id="'+id+'" data-token="{{ csrf_token() }}">Active</a>';                      
                    }
                    else{
                        var e = '<a href="javascript:void(0)" class="m-badge m-badge--danger m-badge--wide sts" title=" Click to Active"  data-status="Inactive" data-id="'+id+'" data-token="{{ csrf_token() }}">Inactive</a>';                    
                    }
                    $("#sl" + id).html(e);
                }
            })
        }  
    });
});
</script>
@stop
