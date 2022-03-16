<?php


return [
    'application_name' => 'Admin Panel',
	'application_author' => 'Anupam singh',
	'application_author_link' => 'https://www.myprayagraj.in/',
    'ios_app_link' => '#',
    'android_app_link' => '#',

    'APP_DATE_FORMAT' => 'jS M, Y',
    
    'url' =>  env('APP_URL',''),
    
    // Admin
    'ADMIN_URL' => env('ADMIN_URL', 'admin/'),
    'ADMIN_THEME' => 'metronic',
    
    'SITE_URL' => env('SITE_URL', 'web/'),
    //'WEB_THEME' => 'web',

    // SubContractor
    'SUBCONTRACTOR_URL' => env('SUBCONTRACTOR_URL', 'subcontractor/'),
    'SUBCONTRACTOR_THEME' => 'metronic',

// SubContractor
    'TECHNICIAN_URL' => env('TECHNICIAN_URL', 'technician/'),
    'TECHNICIAN_THEME' => 'metronic',


    // USER TYPE
    'DD_USER_TYPE' => 1,


    //Shipment
    'ShipmentDetail' => [

    	'Incoming' => 'Incoming',
    	'Outgoing' => 'Outgoing',
    ],

    //Carrier
    'CarrierDetail' => [

    	'Fedex' => 'Fedex',
    	//'DHL' => 'DHL',
    	'UPS' => 'UPS',
    ],

    //Sla
    'SlaDetail' => [

        'sla' => 'sla',
        'no sla' => 'no sla',
    ],

    //Priority
    'PriorityDetail' => [

        'High' => 'High',
        'Low' => 'Low',
    ],
    'DigitalDream' => [

        'Ben' => '1',
    ],
    
    'TicketStatus' => [
        'assigned' => 'Assigned',
        'reassigned' => 'Reassigned',
        'rejected' => 'Rejected',
        'inProgress' => 'In Progress',
        'paused' => 'Paused/ On Hold',
        'completed' => 'Completed',
        'closed' => 'Closed',
    ],
    'EditTicketStatus' => [
        'completed' => 'Completed',
        'closed' => 'Closed',
    ],
    'Color' => [
        'green' => 'Green',
        'red' => 'Red',
        'blue' => 'Blue',
        'sky blue' => 'Sky Blue',
        'yellow' => 'Yellow',
        'black' => 'Black',
        'grey' => 'Grey',
        'pink' => 'Pink',
        'violet' => 'Violet',
        'brown' => 'Brown',
    ],
	'GOOGLE_API_KEY' => 'AIzaSyA31yWzLU8DXXblIekxWRFg7SUxjlZIQIo',
    
];