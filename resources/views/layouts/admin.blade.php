<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Minimal Portfolio Theme">
    <meta name="keywords" content="responsive, retina ready, html5, css3, creative, portfolio, bootstrap theme" />
    <meta name="author" content="Mike Bywater">

    <!-- favicon -->
    <link rel="icon" href="images/favicon.png">
    <!-- page title -->
    <title>Zoe Bywater Make Up Artist</title>
    <!-- bootstrap css -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- css -->


    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/magnific-popup.css" rel="stylesheet">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,800,900" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='/fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/linear-icons.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- preloader -->
<div id="preloader">
    <div class="spinner spinner-round"></div>
</div>
<!-- / preloader -->

<!-- header -->
<header>

    <!-- nav -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="/images/logo.jpg" class="logo-small" alt="logo"></a>
            </div><!-- / navbar-header -->
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/admin/photos"><span>PHOTOS</span></a></li>
                    <li><a href="/admin/categories"><span>CATEGORIES</span></a></li>
                    <li><a href="/admin/pages"><span>PAGES</span></a></li>

                </ul>
            </div><!--/ nav-collapse -->
        </div><!-- / container -->
    </nav>
    <!-- / nav -->

</header>
<!-- / header -->

<br/>
@yield('content')


<!-- footer -->
<footer class="dark">
    <div class="container">
        <p class="footer-info">© ZOE BYWATER
            <span class="social pull-right">
   <!--             <a href="#x"><i class="fa fa-facebook"></i></a>
                <a href="#x"><i class="fa fa-twitter"></i></a> -->
                <a href="https://www.instagram.com/zoebywatermua/"><i class="fa fa-instagram"></i></a>
            </span>
        </p>
    </div><!-- / container -->
</footer>
<!-- / footer -->

<!-- javascript -->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.easing.min.js"></script>

<!-- include summernote css/js-->
<link href="/css/style.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 200,
            minHeight: 100,
            styleTags: ['pre', 'h1', 'h2' , 'h3' , 'h4' , 'p'],
            toolbar: [
                ["style", ["style"]],
                ['undo' , ['undo']],
                ['redo' , ['redo']],
                ['font', ['bold', 'italic', 'underline']],
                ['para', ['ol', 'paragraph']],
                ['link' , ['link']],
                ['fullscreen' , ['fullscreen']],
            ]
        });
    });
</script>



<!-- preloader -->
<script src="/js/preloader.js"></script>
<!-- / preloader -->

<!-- / javascript -->
</body>

</html>