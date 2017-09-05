@extends('layouts.master')



@section('content')
<!-- content -->

<!-- portfolio section -->
<section id="portfolio" class="no-gutter">
    <div class="container">
        <!-- portfolio filter -->
        <ul class="portfolio-filter list-inline text-center">
            <li><a href="#" data-group="all" class="active">ALL</a></li>
            @foreach($categories as $category)
                <li><a href="#" data-group="{{$category->name}}">{{$category->name}}</a></li>
            @endforeach
        </ul><!--end portfolio filter -->
        <ul class="row portfolio list-unstyled lightbox" id="grid">

        @foreach($photos as $photo)
            <!-- project -->
            <li class="col-xs-6 col-md-4 project" data-groups='["{{$photo->category->name}}"]'>
                <div class="img-bg-color primary">
                    <a href="single-project.html" class="project-link"></a>
                    <!-- / project-link -->
                    <img src="{{$photo->url}}" alt="">
                    <!-- / project-image -->

                    <!-- project-hover-tools -->
                    <div class="project-hover-tools">

                        <a href="{{$photo->url}}" class="open-gallery">
                            <i class="lnr lnr-frame-expand"></i>
                        </a>
                    </div><!-- / project-hover-tools -->

                    <!-- project-details -->
                    <div class="project-details">
                        <h5 class="project-title">{{$photo->title}}</h5>
                     <!--   <p class="skill">SKILLS</p> -->
                    </div><!-- / project-details -->
                </div><!-- / img-bg-color -->
            </li>
            <!-- / proj ect -->
         @endforeach


            <!-- sizer -->
            <li class="col-xs-6 col-md-4 shuffle_sizer"></li>
        </ul> <!-- / projects -->
    </div><!-- / container -->

</section>
<!-- / portfolio section -->



<!-- / content -->
@endsection
