@yield('js_footer_before_content')

<!-- begin::Base Scripts -->
<script src="{{ asset(env('ASSETS_PATH').'assets/metronic/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
<script src="{{ asset(env('ASSETS_PATH').'assets/metronic/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
<!--end::Page Snippets -->
<script src="{{ asset(env('ASSETS_PATH').'assets/admin/js/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset(env('ASSETS_PATH').'assets/admin/js/bootstrap-timepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset(env('ASSETS_PATH').'assets/admin/js/bootstrap-markdown.js') }}" type="text/javascript"></script>
<script src="{{ asset(env('ASSETS_PATH').'assets/admin/js/app.js') }}" type="text/javascript"></script>
<!-- {!! Html::script('public/assets/metronic/vendors/base/vendors.bundle.js') !!}
        {!! Html::script('public/assets/metronic/demo/default/base/scripts.bundle.js') !!}
        {!! Html::script('public/assets/admin/js/jquery-ui.min.js') !!}
        {!! Html::script('public/assets/admin/js/bootstrap-timepicker.js') !!}
        {!! Html::script('public/assets/admin/js/bootstrap-markdown.js') !!}
        {!! Html::script('public/assets/admin/js/app.js') !!} -->
<script>
$("#atlas").click(function() {
    $.ajax({
        type: "POST",
        url: ADMIN_URL + "readNotification",
        data: {
            "_token": "{{ csrf_token() }}"
        },
        success: function(data) {
            //alert("successfully submitted.");
            //window.location.href = 'category';
            $("#examples").hide();
        }
    });
})
</script>
<?php if(isset($sessionData) && $sessionData['id'] > 0){ ?>
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
	var OneSignal = window.OneSignal || [];
		OneSignal.push(["init", {
			appId: "{{env('ONE_SIGNAL_APP_ID')}}",
			//subdomainName: 'digital-dream.OS.TC',
			autoRegister: true,
			promptOptions: {
				/* These prompt options values configure both the HTTP prompt and the HTTP popup. */
				/* actionMessage limited to 90 characters */
				actionMessage: "We'd like to show you notifications for the latest news.",
				/* acceptButtonText limited to 15 characters */
				acceptButtonText: "ALLOW",
				/* cancelButtonText limited to 15 characters */
				cancelButtonText: "NO THANKS"
			}
		}]);


		 function subscribe() {
                // OneSignal.push(["registerForPushNotifications"]);
                OneSignal.push(["registerForPushNotifications"]);
                event.preventDefault();
            }
            function unsubscribe(){
                OneSignal.setSubscription(true);
            }

            var OneSignal = OneSignal || [];
            OneSignal.push(function() {
                /* These examples are all valid */
                // Occurs when the user's subscription changes to a new value.
                OneSignal.on('subscriptionChange', function (isSubscribed) {
                    console.log("The user's subscription state is now:", isSubscribed);
                    OneSignal.sendTag("user_id", "admin_{{$sessionData['id']}}", function(tagsSent)
                    {
                        // Callback called when tags have finished sending
                        console.log("Tags have finished sending!");
                    });
                });

                var isPushSupported = OneSignal.isPushNotificationsSupported();
                if (isPushSupported)
                {
                    // Push notifications are supported
                    OneSignal.isPushNotificationsEnabled().then(function(isEnabled)
                    {
                        if (isEnabled)
                        {
                            console.log("Push notifications are enabled!");

                        } else {
                            OneSignal.showHttpPrompt();
                            console.log("Push notifications are not enabled yet.");
                        }
                    });

                } else {
                    console.log("Push notifications are not supported.");
                }
            });
</script>
<?php } ?>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="{{ asset(env('ASSETS_PATH').'assets/plugin/tel-input/build/js/intlTelInput.js') }}" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('.iframe_modal').click(function() {
            open_modal_iframe($(this));
        });
        $(document).on('keyup', '.cemail', function() {
            validateEmail(this);
        });
    });
	function autopopheight(){
         $('#iframe-modal', window.parent.document).find('.modal-body').css('height', $('.m-portlet').height()+'px');
    }
    function validateEmail(emailField) {
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (emailField.value != '' && reg.test(emailField.value) == false)
        {
			$(emailField).parent('div').addClass('cerror');
            if($(emailField).parent('div').find('#email-error').length > 0){
				$(emailField).parent('div').find('#email-error').html('Please enter a valid Email.');
			}else{				
				$(emailField).parent('div').append('<div id="email-error" class="form-control-feedback">Please enter a valid Email.</div>');
			}
            return false;
        }
		$(emailField).parent('div').removeClass('cerror');
		$(emailField).parent('div').find('#email-error').remove();
        return true;

    }
    var open_modal_iframe = function(ref) {
        $('#iframe-modal').find('#iframe-modal-title').text($(ref).attr('modal-title'));
        $('#iframe-modal').find('.modal-body').html('<iframe src="' + $(ref).attr('data-src') + '" style="width:100%; height: 100%; overflow:hidden; border:none;" scrolling="no"></iframe>');
        if ($(ref).attr('modal-height')) {
            $('#iframe-modal').find('.modal-body').css('height', $(ref).attr('modal-height'));
        } else {
            $('#iframe-modal').find('.modal-body').css('height', '400px');
        }
        if ($(ref).attr('modal-padding')) {
            $('#iframe-modal').find('.modal-body').css('padding', $(ref).attr('modal-padding'));
        } else {
            $('#iframe-modal').find('.modal-body').css('padding', '5px');
        }
        $('#iframe-modal').modal('show');
    };
    //-------------------- for country code ----------------------------------------
    $(document).ready(function() {
        $('.phone-code').each(function() {
            tele_code(this);
        });

        $(document).on('click', '[data-repeater-create]', function() {
            $('.phone-code').each(function() {
                tele_code(this);
            });

        });
    });
    var telin = 0;
    function tele_code(input) {
        var varname = 'telinput' + telin;
        if (window[varname]) {
            window[varname].destroy();
        }
        window[varname] = intlTelInput(input, {
            getNumeric: true,
            nationalMode: false,
            utilsScript: "{{ asset(env('ASSETS_PATH').'assets/plugin/tel-input/build/js/utils.js') }}"
        });
        telin++;
    }
<?php if (config('constants.GOOGLE_API_KEY')) { ?>
    $(document).ready(function(){
        if(document.getElementById('address') && document.getElementById('address').value != ''){
            setlocationonmap();
        }
    });
        var autocompleteaddress;
        function initAutocomplete() {
            if (document.getElementById('address')) {
                autocompleteaddress = new google.maps.places.Autocomplete(document.getElementById('address'));
                autocompleteaddress.addListener('place_changed', getlonglat);
            }
        }

        function getlonglat() {
            var geocoder = new google.maps.Geocoder();
            var address = document.getElementById('address').value;
            initMap();
            $.ajax({
                type: 'GET',
                url: 'https://maps.googleapis.com/maps/api/geocode/json',
                data: {address: address, key: "{{config('constants.GOOGLE_API_KEY')}}"},
                dataType: 'json',
                beforeSend: function() {
                    $('#form-overlay').show();
                },
                complete: function() {
                    $('#form-overlay').hide();
                },
                success: function(responseData, status, XMLHttpRequest) {
                    //console.log(responseData);
                    if (responseData.results && document.getElementById('latitude') && document.getElementById('longitude')) {
                        document.getElementById('latitude').value = responseData.results[0].geometry.location.lat;
                        document.getElementById('longitude').value = responseData.results[0].geometry.location.lng;
                    }

                }
            });

        }

        function initMap() {
            if (!document.getElementById('address')) {
                return;
            }
			if(document.getElementById('map')){
				var map = new google.maps.Map(document.getElementById('map'), {
					center: {lat: -33.8688, lng: 151.2195},
					zoom: 13
				});
			}
            var input = document.getElementById('address');

            var autocomplete = new google.maps.places.Autocomplete(input);
            //autocomplete.setTypes(['address']);


            // Bind the map's bounds (viewport) property to the autocomplete object,
            // so that the autocomplete requests use the current map bounds for the
            // bounds option in the request.
			if(document.getElementById('map')){
				autocomplete.bindTo('bounds', map);
			}
            // Set the data fields to return when the user selects a place.
            autocomplete.setFields(
                    ['address_components', 'geometry', 'icon', 'name']);

            var infowindow = new google.maps.InfoWindow();
            var infowindowContent = document.getElementById('infowindow-content');
            infowindow.setContent(infowindowContent);
			if(document.getElementById('map')){
				var marker = new google.maps.Marker({
					map: map,
					anchorPoint: new google.maps.Point(0, -29)
				});
			}

            autocomplete.addListener('place_changed', function() {
                infowindow.close();
               // marker.setVisible(false);
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    // User entered the name of a Place that was not suggested and
                    // pressed the Enter key, or the Place Details request failed.
                    window.alert("No details available for input: '" + place.name + "'");
                    return;
                }
                console.log(place.geometry.location.lat());
                if (document.getElementById('latitude') && document.getElementById('longitude')) {
                    document.getElementById('latitude').value = place.geometry.location.lat();
                    document.getElementById('longitude').value = place.geometry.location.lng();
                }
                if (document.getElementById('city_id') && document.getElementById('zip') && document.getElementById('country_id') && document.getElementById('state_id')) {
                    console.log(place.address_components);
                    for (var i = 0; i < place.address_components.length; i++) {
                        var addressType = place.address_components[i].types[0];
                        if(addressType=='locality')
                          document.getElementById('city_id').value = place.address_components[i].long_name; 
                        if(addressType=='country') 
                            document.getElementById('country_id').value = place.address_components[i].long_name;
                        if(addressType=='administrative_area_level_1') 
                            document.getElementById('state_id').value = place.address_components[i].long_name;
                        if(addressType=='postal_code')
                            document.getElementById('zip').value = place.address_components[i].short_name;
                    }
                    
                    
                    
                }
				if(document.getElementById('map')){
					// If the place has a geometry, then present it on a map.
					if (place.geometry.viewport) {
						map.fitBounds(place.geometry.viewport);
					} else {
						map.setCenter(place.geometry.location);
						map.setZoom(17);  // Why 17? Because it looks good.
					}
				}
                marker.setPosition(place.geometry.location);
                marker.setVisible(true);
                
                var address = '';
                if (place.address_components) {
                    address = [
                        (place.address_components[0] && place.address_components[0].short_name || ''),
                        (place.address_components[1] && place.address_components[1].short_name || ''),
                        (place.address_components[2] && place.address_components[2].short_name || '')
                    ].join(' ');
                }

                infowindowContent.children['place-icon'].src = place.icon;
                infowindowContent.children['place-name'].textContent = place.name;
                infowindowContent.children['place-address'].textContent = address;
				if(document.getElementById('map')){
					infowindow.open(map, marker);
				}
            });
        }

        var map;
        var service;
        var infowindow;

        function setlocationonmap() {
            var sydney = new google.maps.LatLng(-33.867, 151.195);
            infowindow = new google.maps.InfoWindow();
            map = new google.maps.Map(document.getElementById('map'), {center: sydney, zoom: 15});
            var request = {
                query: document.getElementById('address').value,
                fields: ['name', 'geometry'],
            };
            service = new google.maps.places.PlacesService(map);
            service.findPlaceFromQuery(request, function(results, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK) {
                    for (var i = 0; i < results.length; i++) {
                        createMarker(results[i]);
                    }
                    map.setCenter(results[0].geometry.location);
                }
            });
        }

        function createMarker(place) {
            var marker = new google.maps.Marker({
                map: map,
                position: place.geometry.location
            });
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.setContent(place.name);
                infowindow.open(map, this);
            });
        }
<?php } ?>	
	jQuery.validator.addMethod("validemail", function(value, element){
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if (value != '' && reg.test(value) == false)
        {		
			return false;  // FAIL validation when REGEX matches
		} else {
			return true;   // PASS validation otherwise
		};
	}, "email-id is not valid"); 
//------------------------------------------------------------------------------
</script>
<?php if (config('constants.GOOGLE_API_KEY')) { ?>
<script src="https://maps.googleapis.com/maps/api/js?key={{config('constants.GOOGLE_API_KEY')}}&libraries=places&callback=<?php echo isset($googleinit) ? $googleinit : 'initMap'; ?>" async defer></script>
<?php }?>
@yield('js_footer_after_content')