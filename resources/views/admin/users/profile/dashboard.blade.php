<?php
$theme = config('constants.ADMIN_THEME');
?>
@extends('admin.layouts.'. $theme .'.template')
@section('title', 'Dashboard')

@section('content')

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
            <div class="row m-row--no-padding m-row--col-separator-xl">
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::Total Profit-->
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                <a href="tickets.php">Total Tickets</a>
                            </h4>
                            <br>
                            <span class="m-widget24__desc">
                                Tickets Created
                            </span>

                            <span class="m-widget24__stats m--font-brand">
                                1822
                            </span>


                            <div class="m--space-10"></div>
                            <!--
                                                                                                                            <div class="progress m-progress--sm">
                                                                                                                                    <div class="progress-bar m--bg-brand" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                                                                            </div>
                            -->
                            <!--
                                                                                                                            <span class="m-widget24__change">
                                                                                                                                    Change
                                                                                                                            </span>
                                                                                                                            <span class="m-widget24__number">
                                                                                                                                    100%
                                                                                                                            </span>
                            -->
                        </div>
                    </div>
                    <!--end::Total Profit-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Feedbacks-->
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                <a href="tickets.php">Open Tickets</a>
                            </h4>
                            <br>
                            <!--<span class="m-widget24__desc">
                                    Customer Review
                            </span>-->
                            <span class="m-widget24__stats m--font-danger">
                                274
                            </span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar m--bg-danger" role="progressbar" style="width: 20%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="m-widget24__change">
                                Change
                            </span>
                            <span class="m-widget24__number">
                                20%
                            </span>
                        </div>
                    </div>
                    <!--end::New Feedbacks-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Orders-->
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                <a href="tickets.php">Closed Tickets</a>
                            </h4>
                            <br>
                            <!--<span class="m-widget24__desc">
                                    Fresh Order Amount
                            </span>-->
                            <span class="m-widget24__stats m--font-success">
                                1548
                            </span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar m--bg-success" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="m-widget24__change">
                                Change
                            </span>
                            <span class="m-widget24__number">
                                80%
                            </span>
                        </div>
                    </div>
                    <!--end::New Orders-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">
                    <!--begin::New Users-->
                    <div class="m-widget24">
                        <div class="m-widget24__item">
                            <h4 class="m-widget24__title">
                                <a href="tickets.php">Tickets on Hold</a>
                            </h4>
                            <br>
                            <!--<span class="m-widget24__desc">
                                    Joined New User
                            </span>-->
                            <span class="m-widget24__stats m--font-info">
                                276
                            </span>
                            <div class="m--space-10"></div>
                            <div class="progress m-progress--sm">
                                <div class="progress-bar m--bg-info" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <span class="m-widget24__change">
                                Change
                            </span>
                            <span class="m-widget24__number">
                                90%
                            </span>
                        </div>
                    </div>
                    <!--end::New Users-->
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xl-8">
            <!--begin:: Widgets/New Users-->
            <div class="m-portlet " id="m_portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <span class="m-portlet__head-icon">
                                <i class="flaticon-map-location"></i>
                            </span>
                            <h3 class="m-portlet__head-text">
                                Calendar
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="#" class="btn btn-outline-accent btn-sm 	m-btn m-btn--icon m-btn--pill">
                                    <span>
                                        <i class="la la-plus"></i>
                                        <span>
                                            Add Ticket
                                        </span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div id="m_calendar"></div>
                </div>
            </div>
            <!--end:: Widgets/New Users-->
        </div>

        <div class="col-xl-4">
            <!--begin:: Widgets/Top Products-->
            <div class="m-portlet m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                To Dos
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="to-do.php" class="btn btn-outline-accent btn-sm 	m-btn m-btn--icon m-btn--pill">
                                    <span>
                                        <i class="fa fa-eye"></i>
                                        <span>
                                            View All
                                        </span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="m_widget2_tab1_content">
                            <div class="m-widget2">
                                <div class="m-widget2__item m-widget2__item--primary">
                                    <div class="m-widget2__checkbox">
                                        <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="m-widget2__desc">
                                        <span class="m-widget2__text">
                                            To take along insulated gloves
                                        </span>
                                        <br>
                                        <span class="m-widget2__user-name">
                                            <a href="#" class="m-widget2__link">
                                                By Bob
                                            </a>
                                        </span>
                                    </div>

                                </div>
                                <div class="m-widget2__item m-widget2__item--warning">
                                    <div class="m-widget2__checkbox">
                                        <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="m-widget2__desc">
                                        <span class="m-widget2__text">
                                            Prepare Docs For Metting On Monday
                                        </span>
                                        <br>
                                        <span class="m-widget2__user-name">
                                            <a href="#" class="m-widget2__link">
                                                By Sean
                                            </a>
                                        </span>
                                    </div>

                                </div>
                                <div class="m-widget2__item m-widget2__item--brand">
                                    <div class="m-widget2__checkbox">
                                        <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="m-widget2__desc">
                                        <span class="m-widget2__text">
                                            Take 200M of wire
                                        </span>
                                        <br>
                                        <span class="m-widget2__user-name">
                                            <a href="#" class="m-widget2__link">
                                                By Aziko
                                            </a>
                                        </span>
                                    </div>

                                </div>
                                <div class="m-widget2__item m-widget2__item--success">
                                    <div class="m-widget2__checkbox">
                                        <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="m-widget2__desc">
                                        <span class="m-widget2__text">
                                            Make Metronic Great Again.Lorem Ipsum
                                        </span>
                                        <br>
                                        <span class="m-widget2__user-name">
                                            <a href="#" class="m-widget2__link">
                                                By James
                                            </a>
                                        </span>
                                    </div>

                                </div>
                                <div class="m-widget2__item m-widget2__item--danger">
                                    <div class="m-widget2__checkbox">
                                        <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="m-widget2__desc">
                                        <span class="m-widget2__text">
                                            Completa Financial Report For Emirates Airlines
                                        </span>
                                        <br>
                                        <span class="m-widget2__user-name">
                                            <a href="#" class="m-widget2__link">
                                                By Bob
                                            </a>
                                        </span>
                                    </div>

                                </div>
                                <div class="m-widget2__item m-widget2__item--info">
                                    <div class="m-widget2__checkbox">
                                        <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                            <input type="checkbox">
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="m-widget2__desc">
                                        <span class="m-widget2__text">
                                            Completa Financial Report For Emirates Airlines
                                        </span>
                                        <br>
                                        <span class="m-widget2__user-name">
                                            <a href="#" class="m-widget2__link">
                                                By Sean
                                            </a>
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="m_widget2_tab2_content"></div>
                        <div class="tab-pane" id="m_widget2_tab3_content"></div>
                    </div>
                </div>
            </div>
            <!--end:: Widgets/Top Products-->
        </div>
    </div>
    <!--End::Section-->


    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-6 col-lg-12">
            <!--Begin::Portlet-->
            <div class="m-portlet  m-portlet--full-height ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Recent Activities
                            </h3>
                        </div>
                    </div>

                </div>
                <div class="m-portlet__body">
                    <div class="m-scrollable mCustomScrollbar _mCS_5 mCS-autoHide" data-scrollbar-shown="true" data-scrollable="true" data-max-height="380" style="overflow: visible; height: 380px; max-height: 380px; position: relative;">
                        <!--Begin::Timeline 2 -->
                        <div class="m-timeline-2">
                            <div class="m-timeline-2__items  m--padding-top-25 m--padding-bottom-30">
                                <div class="m-timeline-2__item">
                                    <span class="m-timeline-2__item-time">
                                        10:00
                                    </span>
                                    <div class="m-timeline-2__item-cricle">
                                        <i class="fa fa-genderless m--font-danger"></i>
                                    </div>
                                    <div class="m-timeline-2__item-text  m--padding-top-5">
                                        Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                        <br>
                                        incididunt ut labore et dolore magna
                                    </div>
                                </div>
                                <div class="m-timeline-2__item m--margin-top-30">
                                    <span class="m-timeline-2__item-time">
                                        12:45
                                    </span>
                                    <div class="m-timeline-2__item-cricle">
                                        <i class="fa fa-genderless m--font-success"></i>
                                    </div>
                                    <div class="m-timeline-2__item-text m-timeline-2__item-text--bold">
                                        AEOL Meeting With
                                    </div>
                                    <div class="m-list-pics m-list-pics--sm m--padding-left-20">
                                        <a href="#">
                                            <img src="{{ asset(env('ASSETS_PATH').'assets/metronic/app/media/img/users/100_4.jpg') }}" title="">
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset(env('ASSETS_PATH').'assets/metronic/app/media/img/users/100_13.jpg') }}" title="">
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset(env('ASSETS_PATH').'assets/metronic/app/media/img/users/100_11.jpg') }}" title="">
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset(env('ASSETS_PATH').'assets/metronic/app/media/img/users/100_14.jpg') }}" title="">
                                        </a>
                                    </div>
                                </div>
                                <div class="m-timeline-2__item m--margin-top-30">
                                    <span class="m-timeline-2__item-time">
                                        14:00
                                    </span>
                                    <div class="m-timeline-2__item-cricle">
                                        <i class="fa fa-genderless m--font-brand"></i>
                                    </div>
                                    <div class="m-timeline-2__item-text m--padding-top-5">
                                        Make Deposit
                                        <a href="#" class="m-link m-link--brand m--font-bolder">
                                            USD 700
                                        </a>
                                        To ESL.
                                    </div>
                                </div>
                                <div class="m-timeline-2__item m--margin-top-30">
                                    <span class="m-timeline-2__item-time">
                                        16:00
                                    </span>
                                    <div class="m-timeline-2__item-cricle">
                                        <i class="fa fa-genderless m--font-warning"></i>
                                    </div>
                                    <div class="m-timeline-2__item-text m--padding-top-5">
                                        Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                        <br>
                                        incididunt ut labore et dolore magna elit enim at minim
                                        <br>
                                        veniam quis nostrud
                                    </div>
                                </div>
                                <div class="m-timeline-2__item m--margin-top-30">
                                    <span class="m-timeline-2__item-time">
                                        17:00
                                    </span>
                                    <div class="m-timeline-2__item-cricle">
                                        <i class="fa fa-genderless m--font-info"></i>
                                    </div>
                                    <div class="m-timeline-2__item-text m--padding-top-5">
                                        Placed a new order in
                                        <a href="#" class="m-link m-link--brand m--font-bolder">
                                            SIGNATURE MOBILE
                                        </a>
                                        marketplace.
                                    </div>
                                </div>
                                <div class="m-timeline-2__item m--margin-top-30">
                                    <span class="m-timeline-2__item-time">
                                        16:00
                                    </span>
                                    <div class="m-timeline-2__item-cricle">
                                        <i class="fa fa-genderless m--font-brand"></i>
                                    </div>
                                    <div class="m-timeline-2__item-text m--padding-top-5">
                                        Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                        <br>
                                        incididunt ut labore et dolore magna elit enim at minim
                                        <br>
                                        veniam quis nostrud
                                    </div>
                                </div>
                                <div class="m-timeline-2__item m--margin-top-30">
                                    <span class="m-timeline-2__item-time">
                                        17:00
                                    </span>
                                    <div class="m-timeline-2__item-cricle">
                                        <i class="fa fa-genderless m--font-danger"></i>
                                    </div>
                                    <div class="m-timeline-2__item-text m--padding-top-5">
                                        Received a new feedback on
                                        <a href="#" class="m-link m-link--brand m--font-bolder">
                                            FinancePro App
                                        </a>
                                        product.
                                    </div>
                                </div>
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
                                Recent Notifications
                            </h3>
                        </div>
                    </div>

                </div>
                <div class="m-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="m_widget2_tab1_content">
                            <!--Begin::Timeline 3 -->
                            <div class="m-timeline-3">
                                <div class="m-timeline-3__items">
                                    <div class="m-timeline-3__item m-timeline-3__item--info">
                                        <span class="m-timeline-3__item-time">
                                            09:00
                                        </span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                            </span>
                                            <br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By Bob
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--warning">
                                        <span class="m-timeline-3__item-time">
                                            10:00
                                        </span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Lorem ipsum dolor sit amit
                                            </span>
                                            <br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By Sean
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--brand">
                                        <span class="m-timeline-3__item-time">
                                            11:00
                                        </span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Lorem ipsum dolor sit amit eiusmdd tempor
                                            </span>
                                            <br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By James
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--success">
                                        <span class="m-timeline-3__item-time">
                                            12:00
                                        </span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Lorem ipsum dolor
                                            </span>
                                            <br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By James
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--danger">
                                        <span class="m-timeline-3__item-time">
                                            14:00
                                        </span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Lorem ipsum dolor sit amit,consectetur eiusmdd
                                            </span>
                                            <br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By Derrick
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--info">
                                        <span class="m-timeline-3__item-time">
                                            15:00
                                        </span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Lorem ipsum dolor sit amit,consectetur
                                            </span>
                                            <br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By Iman
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--brand">
                                        <span class="m-timeline-3__item-time">
                                            17:00
                                        </span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Lorem ipsum dolor sit consectetur eiusmdd tempor
                                            </span>
                                            <br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By Aziko
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End::Timeline 3 -->
                        </div>
                        <div class="tab-pane" id="m_widget2_tab2_content">
                            <!--Begin::Timeline 3 -->
                            <div class="m-timeline-3">
                                <div class="m-timeline-3__items">
                                    <div class="m-timeline-3__item m-timeline-3__item--info">
                                        <span class="m-timeline-3__item-time m--font-focus">
                                            09:00
                                        </span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text.
                                            </span>
                                            <br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By Bob
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--warning">
                                        <span class="m-timeline-3__item-time m--font-warning">
                                            10:00
                                        </span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                There are many variations of passages of Lorem Ipsum available.
                                            </span>
                                            <br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By Sean
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--brand">
                                        <span class="m-timeline-3__item-time m--font-primary">
                                            11:00
                                        </span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text.
                                            </span>
                                            <br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By James
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--success">
                                        <span class="m-timeline-3__item-time m--font-success">
                                            12:00
                                        </span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                The standard chunk of Lorem Ipsum used since the 1500s is reproduced.
                                            </span>
                                            <br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By James
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--danger">
                                        <span class="m-timeline-3__item-time m--font-warning">
                                            14:00
                                        </span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Latin words, combined with a handful of model sentence structures.
                                            </span>
                                            <br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By Derrick
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--info">
                                        <span class="m-timeline-3__item-time m--font-info">
                                            15:00
                                        </span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Contrary to popular belief, Lorem Ipsum is not simply random text.
                                            </span>
                                            <br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By Iman
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-timeline-3__item m-timeline-3__item--brand">
                                        <span class="m-timeline-3__item-time m--font-danger">
                                            17:00
                                        </span>
                                        <div class="m-timeline-3__item-desc">
                                            <span class="m-timeline-3__item-text">
                                                Lorem Ipsum is therefore always free from repetition, injected humour.
                                            </span>
                                            <br>
                                            <span class="m-timeline-3__item-user-name">
                                                <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                                    By Aziko
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End::Timeline 3 -->
                        </div>
                    </div>
                </div>
            </div>
            <!--End::Portlet-->




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
                                Technicians Location
                            </h3>
                        </div>
                    </div>
                    <!--<div class="m-portlet__head-tools">
                            <ul class="m-portlet__nav">
                                    <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                            <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                    <div class="m-dropdown__inner">
                                                            <div class="m-dropdown__body">
                                                                    <div class="m-dropdown__content">
                                                                            <ul class="m-nav">
                                                                                    <li class="m-nav__section m-nav__section--first">
                                                                                            <span class="m-nav__section-text">
                                                                                                    Quick Actions
                                                                                            </span>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                    <i class="m-nav__link-icon flaticon-share"></i>
                                                                                                    <span class="m-nav__link-text">
                                                                                                            Activity
                                                                                                    </span>
                                                                                            </a>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                                                    <span class="m-nav__link-text">
                                                                                                            Messages
                                                                                                    </span>
                                                                                            </a>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                    <i class="m-nav__link-icon flaticon-info"></i>
                                                                                                    <span class="m-nav__link-text">
                                                                                                            FAQ
                                                                                                    </span>
                                                                                            </a>
                                                                                    </li>
                                                                                    <li class="m-nav__item">
                                                                                            <a href="" class="m-nav__link">
                                                                                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                                                    <span class="m-nav__link-text">
                                                                                                            Support
                                                                                                    </span>
                                                                                            </a>
                                                                                    </li>
                                                                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                                                                    <li class="m-nav__item">
                                                                                            <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                                                    Cancel
                                                                                            </a>
                                                                                    </li>
                                                                            </ul>
                                                                    </div>
                                                            </div>
                                                    </div>
                                            </div>
                                    </li>
                            </ul>
                    </div>-->
                </div>
                
                <div class="m-portlet__body">
                    <div id="map" style="height: 650px; width: 100%;"></div>
                </div>
                
            </div>
            <!--End::Portlet-->
        </div>
    </div>

</div>
@stop





@section('js_footer_after_content')

    <script src="{{ asset(env('ASSETS_PATH').'assets/metronic/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset(env('ASSETS_PATH').'assets/metronic/demo/default/custom/components/calendar/external-events.js') }}" type="text/javascript"></script>

    <link href="{{ asset(env('ASSETS_PATH').'assets/metronic/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>

    <script type="text/javascript">
        var locations = [
            ['Yorba Linda, CA, USA', 33.888504, -117.813255, 4],
            ['Smiths Station, AL, USA', 32.540138, -85.098549, 5],
            ['Rapid City, SD, USA', 44.080544, -103.231018, 3],
            ['Hillsboro, OR, USA', 45.522896, -122.989830, 2],
            ['Elkhart, IN, USA', 41.681992, -85.976669, 1],
            ['Providence, RI, USA', 41.825226, -71.418884, 1],
            ['Rancho Cucamonga, CA, USA', 34.110489, -117.594429, 1],
            ['Orange, CA, USA', 33.787914, -117.853104, 1]
        ];

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 5,
            center: new google.maps.LatLng(44.080544, -103.231018),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });

            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    </script>

@stop