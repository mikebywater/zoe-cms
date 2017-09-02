@extends('layouts.master')



@section('content')
<!-- content -->

<!-- portfolio section -->
<section id="portfolio" class="no-gutter">
    <div class="container">
        <!-- portfolio filter -->
        <ul class="portfolio-filter list-inline text-center">
            <li><a href="#" data-group="all" class="active">ALL</a></li>
            <li><a href="#" data-group="wedding">WEDDING</a></li>
            <li><a href="#" data-group="prom">PROM</a></li>
            <li><a href="#" data-group="occasion">SPECIAL OCCASION</a></li>
        </ul><!--end portfolio filter -->
        <ul class="row portfolio list-unstyled lightbox" id="grid">
            <!-- project -->
            <li class="col-xs-6 col-md-4 project" data-groups='["illustration"]'>
                <div class="img-bg-color primary">
                    <a href="single-project.html" class="project-link"></a>
                    <!-- / project-link -->
                    <img src="images/project.jpg" alt="">
                    <!-- / project-image -->

                    <!-- project-hover-tools -->
                    <div class="project-hover-tools">

                        <a href="images/project.jpg" class="open-gallery">
                            <i class="lnr lnr-frame-expand"></i>
                        </a>
                    </div><!-- / project-hover-tools -->

                    <!-- project-details -->
                    <div class="project-details">
                        <h5 class="project-title">PROJECT TITLE</h5>
                        <p class="skill">SKILLS</p>
                    </div><!-- / project-details -->
                </div><!-- / img-bg-color -->
            </li>
            <!-- / project -->

            <!-- project -->
            <li class="col-xs-6 col-md-4 project" data-groups='["wedding"]'>
                <div class="img-bg-color primary">
                    <a href="single-project.html" class="project-link"></a>
                    <!-- / project-link -->
                    <img src="images/project.jpg" alt="">
                    <!-- / project-image -->

                    <!-- project-hover-tools -->
                    <div class="project-hover-tools">
                        <a href="single-project.html" class="view-btn">
                            <i class="lnr lnr-eye"></i>
                        </a>
                        <a href="images/project.jpg" class="open-gallery">
                            <i class="lnr lnr-frame-expand"></i>
                        </a>
                    </div><!-- / project-hover-tools -->

                    <!-- project-details -->
                    <div class="project-details">
                        <h5 class="project-title">PROJECT TITLE</h5>
                        <p class="skill">SKILLS</p>
                    </div><!-- / project-details -->
                </div><!-- / img-bg-color -->
            </li>
            <!-- / project -->

            <!-- project -->
            <li class="col-xs-6 col-md-4 project" data-groups='["prom"]'>
                <div class="img-bg-color primary">
                    <a href="single-project.html" class="project-link"></a>
                    <!-- / project-link -->
                    <img src="images/project.jpg" alt="">
                    <!-- / project-image -->

                    <!-- project-hover-tools -->
                    <div class="project-hover-tools">
                        <a href="single-project.html" class="view-btn">
                            <i class="lnr lnr-eye"></i>
                        </a>
                        <a href="images/project.jpg" class="open-gallery">
                            <i class="lnr lnr-frame-expand"></i>
                        </a>
                    </div><!-- / project-hover-tools -->

                    <!-- project-details -->
                    <div class="project-details">
                        <h5 class="project-title">PROJECT TITLE</h5>
                        <p class="skill">SKILLS</p>
                    </div><!-- / project-details -->
                </div><!-- / img-bg-color -->
            </li>
            <!-- / project -->

            <!-- project -->
            <li class="col-xs-6 col-md-4 project" data-groups='["illustration", "prom", "branding"]'>
                <div class="img-bg-color primary">
                    <a href="single-project.html" class="project-link"></a>
                    <!-- / project-link -->
                    <img src="images/project.jpg" alt="">
                    <!-- / project-image -->

                    <!-- project-hover-tools -->
                    <div class="project-hover-tools">
                        <a href="single-project.html" class="view-btn">
                            <i class="lnr lnr-eye"></i>
                        </a>
                        <a href="images/project.jpg" class="open-gallery">
                            <i class="lnr lnr-frame-expand"></i>
                        </a>
                    </div><!-- / project-hover-tools -->

                    <!-- project-details -->
                    <div class="project-details">
                        <h5 class="project-title">PROJECT TITLE</h5>
                        <p class="skill">SKILLS</p>
                    </div><!-- / project-details -->
                </div><!-- / img-bg-color -->
            </li>
            <!-- / project -->

            <!-- project -->
            <li class="col-xs-6 col-md-4 project" data-groups='["graphic-design", "prom", "branding"]'>
                <div class="img-bg-color primary">
                    <a href="single-project.html" class="project-link"></a>
                    <!-- / project-link -->
                    <img src="images/project.jpg" alt="">
                    <!-- / project-image -->

                    <!-- project-hover-tools -->
                    <div class="project-hover-tools">
                        <a href="single-project.html" class="view-btn">
                            <i class="lnr lnr-eye"></i>
                        </a>
                        <a href="images/project.jpg" class="open-gallery">
                            <i class="lnr lnr-frame-expand"></i>
                        </a>
                    </div><!-- / project-hover-tools -->

                    <!-- project-details -->
                    <div class="project-details">
                        <h5 class="project-title">PROJECT TITLE</h5>
                        <p class="skill">SKILLS</p>
                    </div><!-- / project-details -->
                </div><!-- / img-bg-color -->
            </li>
            <!-- / project -->

            <!-- project -->
            <li class="col-xs-6 col-md-4 project" data-groups='["wedding"]'>
                <div class="img-bg-color primary">
                    <a href="single-project.html" class="project-link"></a>
                    <!-- / project-link -->
                    <img src="images/project.jpg" alt="">
                    <!-- / project-image -->

                    <!-- project-hover-tools -->
                    <div class="project-hover-tools">
                        <a href="single-project.html" class="view-btn">
                            <i class="lnr lnr-eye"></i>
                        </a>
                        <a href="images/project.jpg" class="open-gallery">
                            <i class="lnr lnr-frame-expand"></i>
                        </a>
                    </div><!-- / project-hover-tools -->

                    <!-- project-details -->
                    <div class="project-details">
                        <h5 class="project-title">PROJECT TITLE</h5>
                        <p class="skill">SKILLS</p>
                    </div><!-- / project-details -->
                </div><!-- / img-bg-color -->
            </li>
            <!-- / project -->

            <!-- project -->
            <li class="col-xs-6 col-md-4 project" data-groups='["graphic-design", "branding"]'>
                <div class="img-bg-color primary">
                    <a href="single-project.html" class="project-link"></a>
                    <!-- / project-link -->
                    <img src="images/project.jpg" alt="">
                    <!-- / project-image -->

                    <!-- project-hover-tools -->
                    <div class="project-hover-tools">
                        <a href="single-project.html" class="view-btn">
                            <i class="lnr lnr-eye"></i>
                        </a>
                        <a href="images/project.jpg" class="open-gallery">
                            <i class="lnr lnr-frame-expand"></i>
                        </a>
                    </div><!-- / project-hover-tools -->

                    <!-- project-details -->
                    <div class="project-details">
                        <h5 class="project-title">PROJECT TITLE</h5>
                        <p class="skill">SKILLS</p>
                    </div><!-- / project-details -->
                </div><!-- / img-bg-color -->
            </li>
            <!-- / project -->

            <!-- project -->
            <li class="col-xs-6 col-md-4 project" data-groups='["illustration", "prom"]'>
                <div class="img-bg-color primary">
                    <a href="single-project.html" class="project-link"></a>
                    <!-- / project-link -->
                    <img src="images/project.jpg" alt="">
                    <!-- / project-image -->

                    <!-- project-hover-tools -->
                    <div class="project-hover-tools">
                        <a href="single-project.html" class="view-btn">
                            <i class="lnr lnr-eye"></i>
                        </a>
                        <a href="images/project.jpg" class="open-gallery">
                            <i class="lnr lnr-frame-expand"></i>
                        </a>
                    </div><!-- / project-hover-tools -->

                    <!-- project-details -->
                    <div class="project-details">
                        <h5 class="project-title">PROJECT TITLE</h5>
                        <p class="skill">SKILLS</p>
                    </div><!-- / project-details -->
                </div><!-- / img-bg-color -->
            </li>
            <!-- / project -->

            <!-- project -->
            <li class="col-xs-6 col-md-4 project" data-groups='["wedding"]'>
                <div class="img-bg-color primary">
                    <a href="single-project.html" class="project-link"></a>
                    <!-- / project-link -->
                    <img src="images/project.jpg" alt="">
                    <!-- / project-image -->

                    <!-- project-hover-tools -->
                    <div class="project-hover-tools">
                        <a href="single-project.html" class="view-btn">
                            <i class="lnr lnr-eye"></i>
                        </a>
                        <a href="images/project.jpg" class="open-gallery">
                            <i class="lnr lnr-frame-expand"></i>
                        </a>
                    </div><!-- / project-hover-tools -->

                    <!-- project-details -->
                    <div class="project-details">
                        <h5 class="project-title">PROJECT TITLE</h5>
                        <p class="skill">SKILLS</p>
                    </div><!-- / project-details -->
                </div><!-- / img-bg-color -->
            </li>
            <!-- / project -->

            <!-- project -->
            <li class="col-xs-6 col-md-4 project" data-groups='["graphic-design", "branding"]'>
                <div class="img-bg-color primary">
                    <a href="single-project.html" class="project-link"></a>
                    <!-- / project-link -->
                    <img src="images/project.jpg" alt="">
                    <!-- / project-image -->

                    <!-- project-hover-tools -->
                    <div class="project-hover-tools">
                        <a href="single-project.html" class="view-btn">
                            <i class="lnr lnr-eye"></i>
                        </a>
                        <a href="images/project.jpg" class="open-gallery">
                            <i class="lnr lnr-frame-expand"></i>
                        </a>
                    </div><!-- / project-hover-tools -->

                    <!-- project-details -->
                    <div class="project-details">
                        <h5 class="project-title">PROJECT TITLE</h5>
                        <p class="skill">SKILLS</p>
                    </div><!-- / project-details -->
                </div><!-- / img-bg-color -->
            </li>
            <!-- / project -->

            <!-- project -->
            <li class="col-xs-6 col-md-4 project" data-groups='["prom", "branding"]'>
                <div class="img-bg-color primary">
                    <a href="single-project.html" class="project-link"></a>
                    <!-- / project-link -->
                    <img src="images/project.jpg" alt="">
                    <!-- / project-image -->

                    <!-- project-hover-tools -->
                    <div class="project-hover-tools">
                        <a href="single-project.html" class="view-btn">
                            <i class="lnr lnr-eye"></i>
                        </a>
                        <a href="images/project.jpg" class="open-gallery">
                            <i class="lnr lnr-frame-expand"></i>
                        </a>
                    </div><!-- / project-hover-tools -->

                    <!-- project-details -->
                    <div class="project-details">
                        <h5 class="project-title">PROJECT TITLE</h5>
                        <p class="skill">SKILLS</p>
                    </div><!-- / project-details -->
                </div><!-- / img-bg-color -->
            </li>
            <!-- / project -->

            <!-- project -->
            <li class="col-xs-6 col-md-4 project" data-groups='["illustration"]'>
                <div class="img-bg-color primary">
                    <a href="single-project.html" class="project-link"></a>
                    <!-- / project-link -->
                    <img src="images/project.jpg" alt="">
                    <!-- / project-image -->

                    <!-- project-hover-tools -->
                    <div class="project-hover-tools">
                        <a href="single-project.html" class="view-btn">
                            <i class="lnr lnr-eye"></i>
                        </a>
                        <a href="images/project.jpg" class="open-gallery">
                            <i class="lnr lnr-frame-expand"></i>
                        </a>
                    </div><!-- / project-hover-tools -->

                    <!-- project-details -->
                    <div class="project-details">
                        <h5 class="project-title">PROJECT TITLE</h5>
                        <p class="skill">SKILLS</p>
                    </div><!-- / project-details -->
                </div><!-- / img-bg-color -->
            </li>
            <!-- / project -->

            <!-- sizer -->
            <li class="col-xs-6 col-md-4 shuffle_sizer"></li>
        </ul> <!-- / projects -->
    </div><!-- / container -->

</section>
<!-- / portfolio section -->



<!-- / content -->
@endsection
