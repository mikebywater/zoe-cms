@extends('layouts.master')



@section('content')
    <!-- content -->
    <header>
        <!-- header-banner -->
        <div id="header-banner">
            <div class="banner-content single-page text-center">
                <div class="banner-info">
                    <h1>Reviews</h1>
                    <p>Hear what my customers have said about me</p>
                </div><!-- / banner-info -->
            </div><!-- / banner-content -->
        </div>
        <!-- / header-banner -->
    </header>
    <!-- / header -->

    @foreach($reviews as $review)

        <div class="row">
            <!-- post-block -->
            <div class="col-sm-4">
                <div class="post-block">
                    <a href="single-post.html"><img src="images/post-img1.jpg" alt=""></a>
                    <div class="small-post-text">
                        <h5>{{$review->author_name}}</h5>
                        <p class="small-post-meta">{{\Carbon\Carbon::createFromTimestamp($review->time)->toFormattedDateString()}}</p>
                        <p class="space-bottom">{{$review->text}}</p>
                        <p class="small-post-footer">
                            <a href="{{$review->author_url}}" target="_blank">READ MORE</a>
                            <span class="post-icons pull-right">
                                @for($i=0; $i<$review->rating; $i++)
                                    <i class="primary fa fa-star"></i>
                                @endfor
                                @for($i=5; $i>$review->rating; $i--)
                                    <i class="primary fa fa-star-o"></i>
                                @endfor
                            </span>
                        </p>
                    </div><!-- / small-post-text -->
                </div><!-- / post-block -->
            </div>
        </div>

    @endforeach
    <br>
@endsection