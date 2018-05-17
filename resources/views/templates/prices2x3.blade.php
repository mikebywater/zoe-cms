@extends('layouts.master')
@section('content')
    <header>
        <!-- header-banner -->
        <div id="header-banner">
            <div class="banner-content single-page text-center">
                <div class="banner-info">
                    <h1>{{$fields->heading}}</h1>
                    <p>{{$fields->subheading}}</p>
                </div><!-- / banner-info -->
            </div><!-- / banner-content -->
        </div>
        <!-- / header-banner -->
    </header>
    <!-- / header -->

    <div id="page-content" class="container">

        <div id="pricing">
            <div class="row stacked">
                <!-- pricing-table -->
                <div class="col-sm-4">
                    <div class="pricing-table">
                        <div class="pricing-table-title">
                            <h5 class="pricing-title">{{$fields->list1_title1}}</h5>
                        </div>
                        <div class="pricing-table-price">
                            <p>
                                <span class="pricing-currency">£</span>
                                <span class="pricing-price">{{$fields->list1_price1}}</span>
                            </p>
                        </div>
                        <div class="pricing-table-content">
                            {!! $fields->list1_description1 !!}
                            <div class="pricing-table-button">
                                <a href="/pages/Contact" class="btn btn-primary-filled"><strong>BOOK NOW</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / pricing-table -->
                <!-- pricing-table -->
                <div class="col-sm-4">
                    <div class="featured pricing-table">
                        <div class="pricing-table-title">
                            <h5 class="pricing-title">{{$fields->list1_title2}}</h5>
                        </div>
                        <div class="pricing-table-price">
                            <p>
                                <span class="pricing-currency">£</span>
                                <span class="pricing-price">{{$fields->list1_price2}}</span>
                            </p>
                        </div>
                        <div class="pricing-table-content">
                            {!! $fields->list1_description2 !!}
                            <div class="pricing-table-button">
                                <a href="/pages/Contact" class="btn btn-lg btn-primary-filled"><strong>BOOK NOW</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / pricing-table -->
                <!-- pricing-table -->
                <div class="col-sm-4">
                    <div class="pricing-table">
                        <div class="pricing-table-title">
                            <h5 class="pricing-title">{{$fields->list1_title3}}</h5>
                        </div>
                        <div class="pricing-table-price">
                            <p>
                                <span class="pricing-currency">£</span>
                                <span class="pricing-price">{{$fields->list1_price3}}</span>
                            </p>
                        </div>
                        <div class="pricing-table-content">
                            {!! $fields->list1_description3 !!}
                            <div class="pricing-table-button">
                                <a href="/pages/Contact" class="btn btn-primary-filled"><strong>BOOK NOW</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / pricing-table -->
            </div><!-- / row -->
        </div><!-- / pricing -->
        <!-- / stacked pricing table 3col -->
        <div id="pricing">
            <div class="row stacked">
                <!-- pricing-table -->
                <div class="col-sm-4">
                    <div class="pricing-table">
                        <div class="pricing-table-title">
                            <h5 class="pricing-title">{{$fields->list2_title1}}</h5>
                        </div>
                        <div class="pricing-table-price">
                            <p>
                                <span class="pricing-currency">£</span>
                                <span class="pricing-price">{{$fields->list2_price1}}</span>
                            </p>
                        </div>
                        <div class="pricing-table-content">
                            {!! $fields->list2_description1 !!}
                            <div class="pricing-table-button">
                                <a href="/pages/Contact" class="btn btn-primary-filled"><strong>BOOK NOW</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / pricing-table -->
                <!-- pricing-table -->
                <div class="col-sm-4">
                    <div class="pricing-table">
                        <div class="pricing-table-title">
                            <h5 class="pricing-title">{{$fields->list2_title2}}</h5>
                        </div>
                        <div class="pricing-table-price">
                            <p>
                                <span class="pricing-currency">£</span>
                                <span class="pricing-price">{{$fields->list2_price2}}</span>
                            </p>
                        </div>
                        <div class="pricing-table-content">
                            {!! $fields->list2_description2 !!}
                            <div class="pricing-table-button">
                                <a href="/pages/Contact" class="btn btn-lg btn-primary-filled"><strong>BOOK NOW</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / pricing-table -->
                <!-- pricing-table -->
                <div class="col-sm-4">
                    <div class="pricing-table">
                        <div class="pricing-table-title">
                            <h5 class="pricing-title">{{$fields->list2_title3}}</h5>
                        </div>
                        <div class="pricing-table-price">
                            <p>
                                <span class="pricing-currency">£</span>
                                <span class="pricing-price">{{$fields->list2_price3}}</span>
                            </p>
                        </div>
                        <div class="pricing-table-content">
                            {!! $fields->list2_description3 !!}
                            <div class="pricing-table-button">
                                <a href="/pages/Contact" class="btn btn-primary-filled"><strong>BOOK NOW</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / pricing-table -->
            </div><!-- / row -->
        </div><!-- / pricing -->
        <!-- / stacked pricing table 3col -->
        <div class="row">
                {!!$fields->footer!!}
        </div>
    </div>
@endsection