@extends('layouts.master')



@section('content')
        <header>
            <!-- header-banner -->
                <div id="header-banner">
                    <div class="banner-content single-page text-center">
                        <div class="banner-info">
                            <h1>{{$fields->title}}</h1>
                            <p>{!!$fields->summary!!}</p>
                        </div><!-- / banner-info -->
                    </div><!-- / banner-content -->
                </div>
                <!-- / header-banner -->
            </header>
            <!-- / header -->


        <div id="page-content" class="container">
            <!-- post full-width -->
            <section id="blog">
                <div class="row">
                    <!-- post content area -->
                    <div class="col-xs-12">
                        <div class="blog block post-content-area">
                            <img style="height: 200px" src="data:image/png;base64,{{$fields->mainImage}}" alt="{{$fields->title}}">
                            <div class="post-info-box">
                                <h3>{{$fields->heading1}}</h3>
                                <p class="post-meta">Posted by <a href="#">Zoe Bywater</a> on {{$page->created_at->format('d/m/Y')}}</p>
                                {!! $fields->section1!!}
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#">
                                            <img class="media-object" src="data:image/png;base64,{{$fields->image1}}" alt="">
                                        </a>
                                    </div><!-- media-alignment -->
                                    <div class="media-body">
                                        <h4 class="media-heading">{{$fields->heading2}}</h4>
                                        {!! $fields->section2 !!}
                                    </div><!-- / media-body -->
                                </div><!-- / media -->

                                <div class="media">
                                    <div class="media-right">
                                        <a href="#">
                                            <img class="media-object" src="data:image/png;base64,{{$fields->image2}}" alt="">
                                        </a>
                                    </div><!-- media-alignment -->
                                    <div class="media-body">
                                        <h4 class="media-heading">{{$fields->heading3}}</h4>
                                        {!! $fields->section3!!}
                                    </div><!-- / media-body -->
                                </div><!-- / media -->

                            </div><!-- / post-info-box -->
                        </div><!-- / blog-block -->

                </div><!-- / row -->
            </section>
            <!-- / post full-width -->

        </div><!-- / container -->

        <!-- / content -->

@endsection