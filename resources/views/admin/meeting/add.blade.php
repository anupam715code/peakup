<?php
    $theme = config('constants.ADMIN_THEME');
?>
@extends('admin.layouts.'. $theme .'.template')

@section('title', 'Schedule Meeting')

@section('content')

<?php
$breadcrumb = array(
    'listMeeting' => 'Meeting',
    'javascript:void(0)' => 'Schedule'
);
//echo "asdfasdf";die;
?>
@include('admin.layouts.'. $theme .'.includes.breadcrumb')
<div class="m-content">
    <!--begin::Portlet-->
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                       Schedule Meeting
                    </h3>
                </div>
            </div>
			 <div class="m--align-right m-portlet__head-caption " style="text-align:right;">
                   <a href="{{ url(config('constants.ADMIN_URL').'listMeeting') }}" class="btn btn-primary  m--align-right m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                        <span>
                            <i class="la la-search"></i>
                            <span>
                               View 
                            </span>
                        </span>
                     </a>
            </div>
			
        </div>
        <!--begin::Form-->
        {{ Form::open(array('url' => config('constants.ADMIN_URL').'saveMeeting', 'class' => 'm-form m-form--fit m-form--label-align-right', 'method' => 'post', 'id' => 'm_form_1', 'files' => true)) }}
        <div class="m-portlet__body">
            @include('admin.layouts.'. $theme .'.includes.message-block')	
            <!-- user name -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">&nbsp;</label>
                        {{ Form::text('meeting_topic', '', ['class' => 'form-control m-input', 'placeholder' => 'Enter Topic Here', 'id' => 'remark', 'autocomplete' => 'off']) }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <label for="exampleInputEmail1">&nbsp;</label>
                    <div class='input-group m-form__group date' id='datetimepicker1'>
                       <input type="text" class="form-control" name="meeting_time" placeholder="Select Date time" autocomplete="off"/>
                       <span class="input-group-addon">
                       <span class="glyphicon glyphicon-calendar"></span>
                       </span>
                    </div>
                </div>
            </div>
			
        </div>
		<hr>
        <div class="m-portlet__foot">
            <div class="row">
                <div class="col-lg-6 m--valign-middle pull-right">
					<button type="submit" class="btn btn-brand">
                        Schedule Meeting
                    </button>
                </div>
                <div class="col-lg-6 m--align-right">
					
				</div>
            </div>
        </div>
        <!-- </form> -->
        {{ Form::close() }}
        <!--end::Form-->
    </div>
    <!--end::Portlet-->
</div>
@stop
@section('js_footer_after_content')
{{-- <script type="text/javascript">
	CKEDITOR.replace( 'description', {
        filebrowserImageUploadUrl: "{{route('addEditorAttachment', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    }); 
</script> --}}
<script type="text/javascript">

$(function () {
         $('#datetimepicker1').datetimepicker();
     });
// delete from list
$(document).ready(function(){
    //== Class definition
    var FormWidgets = function () {
        //== Private functions
        var validator;       
        var initValidation = function () {
            validator = $( "#m_form_1" ).validate({
                // define validation rules
                rules: {
                    meeting_time: {
                        required: true
                    },
                    meeting_topic: {
                        required: true
                    },
                },

                //display error alert on form submit  
                invalidHandler: function(event, validator) {             
                    var alert = $('#m_form_1_msg');
                    alert.removeClass('m--hide').show();
                    mApp.scrollTo(alert, -200);
                },

                submitHandler: function (form) {
                    form[0].submit(); // submit the form
                }
            });       
        }

        return {
            // public functions
            init: function() {
                initValidation();
            }
        };
    }();

    jQuery(document).ready(function() {    
        FormWidgets.init();
    });
});
</script>
@stop
