@extends('layouts.master')



@section('content')
    <!-- content -->

    <!-- header-banner -->
    <div id="header-banner">
        <div class="banner-content single-page text-center">
            <div class="banner-info">
                <h1>BLOG</h1>
                <p>Our latest blog posts.</p>
            </div><!-- / banner-info -->
        </div><!-- / banner-content -->
    </div>
    <!-- / header-banner -->
    </header>
    <!-- / header -->
        <!-- content -->

        <!-- blog section 3col masonry -->
        <section id="blog-masonry">
            <div class="container">
                <div id="grid" class="row">
                    @foreach ($posts as $post)
                    <!-- post-block -->
                    <div class="col-sm-4">
                        <div class="post-block">
                            <a href="/pages/{{$post->name}}"><img src="data:image/png;base64,{{$post->field('mainImage')->value}}" alt=""></a>
                            <div class="small-post-text">
                                <h5><a href="/pages/{{$post->name}}">{{strtoupper($post->name)}}</a></h5>
                                <p class="small-post-meta">{{$post->created_at->format('d/m/Y')}}</p>
                                <p class="space-bottom">{{$post->field('summary')->value}}</p>
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