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
                            <a href="/pages/{{$post->name}}"><img src="images/post-img.jpg" alt=""></a>
                            <div class="small-post-text">
                                <h5><a href="single-post.html">{{strtoupper($post->name)}}</a></h5>
                                <p class="small-post-meta">AUG 16, 2016</p>
                                <p class="space-bottom">Suspendisse in mattis neque, sed accumsan erat. Maecenas eget metus dui. Vestibulum accumsan massa quam...</p>
                                <p class="small-post-footer">
                                    <a href="/pages/{{$post->name}}">READ MORE</a>
                                    <span class="post-icons pull-right">
                                <a href="#x"><i class="lnr lnr-thumbs-up"></i></a>
                                <a href="#x"><i class="lnr lnr-bubble"></i></a>
                            </span>
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