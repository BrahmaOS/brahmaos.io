<!DOCTYPE HTML>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Brahma OS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Brahma OS" />


    <!-- <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet"> -->
    <link rel="shortcut icon" href="{{asset('logo.png')}}"/>
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/site/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/site/icomoon.css')}}">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="{{asset('css/site/themify-icons.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/site/bootstrap.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/site/magnific-popup.css')}}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{asset('css/site/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/site/owl.theme.default.min.css')}}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('css/site/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('js/site/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{asset('js/site/respond.min.js')}}"></script>
    <![endif]-->

</head>
<body>
<div class="gtco-loader"></div>

<div id="page">
    <!-- 导航 -->
    <nav class="gtco-nav" role="navigation">
        <div class="gtco-container">
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <div id="gtco-logo"><a href="index.html"><img src="{{asset('logo.png')}}" style="width:32px; height: 32px; position: relative; top: -3px" alt=""> &nbsp;&nbsp;Brahma OS <em>.</em></a></div>
                </div>
                <div class="col-xs-8 text-right menu-1">
                    <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>

    <!-- 介绍语 -->
    <header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url({{asset('images/img_bg_1.jpg')}}});">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-left">
                    <div class="display-t">
                        <div class="display-tc">
                            <h1 class="animate-box" data-animate-effect="fadeInUp">Brahma OS</h1>
                            <h2 class="animate-box" data-animate-effect="fadeInUp">
                                是⼀种承载去中⼼化⽹络的操作系统，它通过解构已有服务并使⽤各类去中⼼化服务和组件得以实现，
                                确保⽤户可以安全、⽆障碍的使⽤区块链之上的服务和应⽤。
                            </h2>
                            <p class="animate-box" data-animate-effect="fadeInUp"><a href="#" class="btn btn-white btn-lg btn-outline">Get In Touch</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <div id="gtco-subscribe">
        <div class="gtco-container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2>Subscribe</h2>
                    <p>Be the first to know about the new templates.</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-12">
                    <form class="form-inline">
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <label for="name" class="sr-only">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <button type="submit" class="btn btn-default btn-block">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer id="gtco-footer" role="contentinfo">
        <div class="gtco-container">
            <div class="row row-p	b-md">

                <div class="col-md-4">
                    <div class="gtco-widget">
                        <h3>About Us</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eos molestias quod sint ipsum possimus temporibus officia iste perspiciatis consectetur in fugiat repudiandae cum. Totam cupiditate nostrum ut neque ab?</p>
                    </div>
                </div>

                <div class="col-md-4 col-md-push-1">
                    <div class="gtco-widget">
                        <h3>Links</h3>
                        <ul class="gtco-footer-links">
                            <li><a href="#">Knowledge Base</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">Terms of services</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="gtco-widget">
                        <h3>Get In Touch</h3>
                        <ul class="gtco-quick-contact">
                            <li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
                            <li><a href="#"><i class="icon-mail2"></i> info@gettemplates.co</a></li>
                            <li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="row copyright">
                <div class="col-md-12">
                    <p class="pull-left">
                        <small class="block">&copy; 2018 Brahma OS.</small>
                    </p>
                    <p class="pull-right">
                    <ul class="gtco-social-icons pull-right">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>
                    </p>
                </div>
            </div>

        </div>
    </footer>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="{{asset('js/site/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('js/site/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/site/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('js/site/jquery.waypoints.min.js')}}"></script>
<!-- Carousel -->
<script src="{{asset('js/site/owl.carousel.min.js')}}"></script>
<!-- countTo -->
<script src="{{asset('js/site/jquery.countTo.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{asset('js/site/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/site/magnific-popup-options.js')}}"></script>
<!-- Main -->
<script src="{{asset('js/site/main.js')}}"></script>

</body>
</html>
