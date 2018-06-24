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
                        <iframe width="560" height="315" src="{{$fields->video_url}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        <div class="post-info-box">


                        </div><!-- / post-info-box -->
                    </div><!-- / blog-block -->

                </div><!-- / row -->
        </section>
        <!-- / post full-width -->

    </div><!-- / container -->

    <!-- / content -->

@endsection