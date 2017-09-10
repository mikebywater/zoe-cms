@extends('layouts.master')

@section('content')

<!-- header-banner -->
    <div id="header-banner">
        <div class="banner-content single-page text-center">
            <div class="banner-info">
                <h1>CONTACT ME</h1>
                <p>Get in touch with me.</p>
            </div><!-- / banner-info -->
        </div><!-- / banner-content -->
    </div>
    <!-- / header-banner -->
</header>
<!-- / header -->

<!-- content -->

<div id="page-content" class="container">
    <div class="row">
        <div class="col-sm-4 contact-info text-center space-bottom">
            <div class="contact-icon">
                <i class="lnr lnr-sync"></i>
            </div>
            <h5>SOCIAL</h5>
            <p class="social-contact">Facebook: <a href="#x"><i class="fa fa-facebook"></i></a></p>
            <p class="social-contact">Twitter: <a href="#x"><i class="fa fa-twitter"></i></a></p>
        </div><!-- / fcontact-info -->

        <div class="col-sm-4 contact-info text-center space-bottom">
            <div class="contact-icon">
                <i class="lnr lnr-smartphone"></i>
            </div>
            <h5>PHONE</h5>
            <p>Office: <a href="tel:+0123456789">+0123 456 789</a></p>
            <p>Support: <a href="tel:+0987654321">+0987 654 321</a></p>
        </div><!-- / contact-info -->

        <div class="col-sm-4 contact-info text-center space-bottom">
            <div class="contact-icon">
                <i class="lnr lnr-envelope"></i>
            </div>
            <h5>EMAIL</h5>
            <p>Office: <a href="mailto:office@yoursite.com">office@yoursite.com</a></p>
            <p>Support: <a href="mailto:hello@yoursite.com">hello@yoursite.com</a></p>
        </div><!-- / contact-info -->

    </div><!-- / row -->

    <div class="row contact-area">
        <div class="col-sm-6 contact-text">
            <img src="images/contact-img.jpg" alt="">
            <p>Duis pharetra sem in tempor accumsan. Donec eget felis ut augue scelerisque maximus non suscipit neque. Vivamus luctus, felis eget.</p>
        </div><!-- / contact-text -->

        <div class="col-sm-6 contact-form-area">
            <!-- contact form 1col -->
            <div id="contact-form">
                <form id="contactForm" data-toggle="validator">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="FULL NAME" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="EMAIL" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <textarea id="message" class="form-control" rows="5" placeholder="MESSAGE" required></textarea>
                    <div class="help-block with-errors"></div>
                    </div>
                    <button type="submit" id="form-submit" class="btn btn-md btn-primary-filled btn-form-submit">SUBMIT FORM</button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </form>
            </div><!-- / contact form 1col -->
        </div><!-- / col-sm-6 -->
    </div><!-- / contact-area -->

</div><!-- / container -->

<!-- / content -->
@endsection