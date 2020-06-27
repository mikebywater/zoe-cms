@extends('layouts.master')

@section('facebook_event')
    fbq('track', 'Contact');
@endsection

@section('content')

<!-- header-banner -->
    <div id="header-banner">
        <div class="banner-content single-page text-center">
            <div class="banner-info">
                <h1>{{$fields->title}}</h1>
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
            <p class="social-contact">Facebook: <a href="https://www.facebook.com/{{$fields->facebook}}"><i class="fa fa-facebook"></i></a></p>
            <p class="social-contact">Instagram: <a href="https://www.instagram.com/{{$fields->instagram}}"><i class="fa fa-instagram"></i></a></p>
        </div><!-- / fcontact-info -->

        <div class="col-sm-4 contact-info text-center space-bottom">
            <div class="contact-icon">
                <i class="lnr lnr-smartphone"></i>
            </div>
            <h5>PHONE</h5>
                <p>Mobile: <a href="tel:+{{$fields->phone}}">+{{$fields->phone}}</a></p>
        </div><!-- / contact-info -->

        <div class="col-sm-4 contact-info text-center space-bottom">
            <div class="contact-icon">
                <i class="lnr lnr-envelope"></i>
            </div>
            <h5>EMAIL</h5>
            <p>Personal: <a href="mailto:{{$fields->email}}">{{$fields->email}}</a></p>
        </div><!-- / contact-info -->

    </div><!-- / row -->

    <div class="row contact-area">


        <div class="col-sm-12 contact-form-area">
            <!-- contact form 1col -->
            <div id="contact-form">
                <form id="contactForm" action="/send" method="post" data-toggle="validator">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="FULL NAME" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="email" placeholder="EMAIL" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <textarea id="message" class="form-control" name="message" rows="5" placeholder="MESSAGE" required></textarea>
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