<?php
    $theme = config('constants.ADMIN_THEME');
?>
@extends('admin.layouts.'. $theme .'.template')

@section('title', 'Edit Literature')

@section('content')

<?php
$breadcrumb = array(
    'listLiterature' => 'Literature',
    'javascript:void(0)' => 'Edit'
);
?>
@include('admin.layouts.'. $theme .'.includes.breadcrumb')

<div class="m-content">
    <!--begin::Portlet-->
    <div class="m-portlet">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                       Modify Literature
                    </h3>
                </div>
            </div>
			 <div class="m--align-right m-portlet__head-caption " style="text-align:right;">
                   <a href="{{ url(config('constants.ADMIN_URL').'listLiterature') }}" class="btn btn-primary  m--align-right m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                        <span>
                            <i class="la la-arrow"></i>
                            <span>
                               Back
                            </span>
                        </span>
                     </a>
            </div>
			
        </div>
        <!--begin::Form-->
        {{ Form::open(array('url' => config('constants.ADMIN_URL').'saveLiterature', 'class' => 'm-form m-form--fit m-form--label-align-right', 'method' => 'post', 'id' => 'm_form_1', 'files' => true)) }}
        <div class="m-portlet__body">
            @include('admin.layouts.'. $theme .'.includes.message-block')	
            <!-- user name -->
            <?php //print_r($literatureData->description);die;?>
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">Name*</label>

                        {{ Form::text('name', ($literatureData->name)?$literatureData->name:'', ['class' => 'form-control m-input', 'placeholder' => 'Enter Title', 'id' => 'title']) }}

                    </div>
                </div>
            </div>
			<div class="row">
                <div class="col-sm-8">
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">Description*</label>
						<textarea name="description" class="form-control" rows="10" placeholder="Enter Text Here" id='description'>{{ $literatureData->description }}</textarea>
                        
                    </div>
                </div>
            </div>
			<div class="row">
                <div class="col-sm-8">
                    <div class="form-group m-form__group">
                        <label for="exampleInputEmail1">Upload Image</label>
                       <input type="file" name="media" id="media" class="form-control">
                    </div>
                    <img src="{{ asset(env('ASSETS_PATH').'uploads/literature/'.$literatureData->media) }}" alt="No Image" width="200" height="100px">
                </div>
            </div>
			<div class="row bottom-reset">
               <div class="col-sm-6">
                    <div class="form-group m-form__group">
					<input type="hidden" name="literatureId" value="{{ $literatureData->id }}" >
					<button type="submit" class="btn btn-brand">
                        Update
                    </button>
						<span class="m--margin-left-10">
                        or
                        <a href="{{ url(config('constants.ADMIN_URL').'listLiterature') }}" class="m-link m--font-bold">
                            Cancel
                        </a>
                    </span>
					</div>
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
<script type="text/javascript">
	
</script>

<script type="text/javascript">
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
                    name: {
                        required: true
                    },
                    description: {
                        required: true
                    },
                    /*email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                        number: true,
                        minlength:10,
                        maxlength:10,
                    },*/
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
