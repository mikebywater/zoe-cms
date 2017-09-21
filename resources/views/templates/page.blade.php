@extends('layouts.master')



@section('content')
        <!-- header-banner -->
            <div id="header-banner">
                <div class="banner-content single-page text-center">
                    <div class="banner-info">
                        <h1>{{$fields->title}}</h1>
                        <p>{{$fields->description}}</p>
                    </div><!-- / banner-info -->
                </div><!-- / banner-content -->
            </div>
            <!-- / header-banner -->
            </header>
            <!-- / header -->


            <div id="page-content" class="container">
                <div class="row">
                    {!! $fields->content!!}
                </div>
            </div><!-- / container -->

            <!-- / content -->
@endsection