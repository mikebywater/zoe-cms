@extends('layouts.master')



@section('content')
<!-- content -->

<!-- portfolio section -->
<section id="portfolio">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators hidden-sm hidden-xs">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="/images/2face.jpg" alt="...">
                </div>
                <div class="item">
                    <img src="/images/goodbye.jpg" alt="...">
                </div>
                <div class="item">
                    <img src="/images/face.jpg" alt="...">
                </div>
                <div class="item">
                    <img src="/images/couple.jpg" alt="...">
                </div>
                <div class="item">
                    <img src="/images/photoshoot.jpg" alt="...">
                </div>


            </div>

            <!-- Controls -->
            <a class="left carousel-control hidden-sm hidden-xs" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="fa fa-arrow-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control hidden-sm hidden-xs" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="fa fa-arrow-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

</section>
<!-- / portfolio section -->

<!-- team section 4col -->
<section id="team">
    <div class="row">
        <div class="section-w-image">
            <div class="row">
                <div class="col-sm-6 about-me-img"><p></p></div>
                <div class="col-sm-6 col-sm-offset-6 about-description">
                    <h4>ABOUT ZOE</h4>
                    <p>
                        Shropshires luxury IMA qualified bridal and special occasion makeup artist, Zoe Bywater provides on-location makeup services. Committed to offering the absolute best services in her market, she has an extensive knowledge of her field.
                    </p>

                    <p>
                        Zoe offers a level of expertise and client care at the highest standard. Although a newly established business, to date she has made up numerous clients for both weddings and special occasions, resulting in an excellent reputation. Taking a limited amount of bookings per year.
                    </p>
                    <img class="visible-xs" src="/images/ima-logo2.png">
                    <p>
                        If you've got a big event coming up and your looking for a professional makeup artist in Telford, Bridgnorth, and other areas in Shropshire Zoe will make you a perfectly polished version of yourself. Starting with the absolutely flawless base and discussing all of your wants and needs. Whether this be for your big day, a work event, photo shoot or a great night out.
                    </p>
                    <p>
                        Freelance makeup artist covering Telford, Newport, Bridgnorth and Shrewsbury. Basically a Shropshire makeup artist. Zoe offers the ultimate luxury service in bridal makeup, these appointments are limited wedding and special occasion appointments, so that Zoe can provide the highest quality care and attention to all of her brides and clients, giving an altogether more intimate and tailored experience.
                    </p>
                    <p>
                        For Zoe there is absolutely nothing better than making someone feel extra special through the application of make up. Zoe is here to make you feel and look more beautiful than your already beautiful self.
                    </p>
                    <p>
                        Have a look at the q&a page for extra information.
                    </p>


                </div><!-- / about-description -->
            </div><!-- / row -->
        </div><!-- / section-w-image -->

    </div>
</section>

<!-- blog section 3col -->
<section id="blog-small">
    <div class="container">
        <div class="page-header no-margin text-center">
            <h2>LATEST POSTS</h2>
        </div>
        <div class="row">

        @foreach ($posts as $post)
            <!-- post-block -->
                <div class="col-sm-4">
                    <div class="post-block">
                        <a href="/pages/{{$post->name}}"><img src="data:image/png;base64,{{$post->field('mainImage')->value}}" alt=""></a>
                        <div class="small-post-text">
                            <h5><a href="/pages/{{$post->name}}">{{strtoupper($post->name)}}</a></h5>
                            <p class="small-post-meta">{{$post->created_at->format('d/m/Y')}}</p>
                            <p class="space-bottom">{!!$post->field('summary')->value!!}</p>
                            <p class="small-post-footer">
                                <a href="/pages/{{$post->name}}">READ MORE</a>
                            </p>
                        </div><!-- / small-post-text -->
                    </div><!-- / post-block -->
                </div><!-- / col-md-4 -->
                <!-- / post-block -->
            @endforeach

        </div><!-- / row -->
    </div><!-- / container -->
</section>
<!-- / blog section 3col -->




<!-- / content -->
@endsection
