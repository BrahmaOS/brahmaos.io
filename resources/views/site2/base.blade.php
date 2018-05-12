<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Brahma OS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
          content="brm,Brahma,os,blockchain,ico,cryptocurrency">
    <meta name="description" content="Brahma OS is an operating system that hosts decentralized networks by enabling the deconstruction of existing services and the use of a wide range of decentralized services and components to ensure that users can safely and easily access services on the blockchain and application. "/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/logo-icon-38.png"/>
    <link rel="stylesheet" href="/css/site2/bootstrap.css"/>
    <link rel="stylesheet" href="/css/site2/font-awesome.min.css"/>
    <link rel="stylesheet" href="/css/site2/linea-icon.css"/>
    <link rel="stylesheet" href="/css/site2/fancy-buttons.css"/>

    <!--=== Other CSS files ===-->
    <link rel="stylesheet" href="/css/site2/animate.css"/>
    <link rel="stylesheet" href="/css/site2/jquery.vegas.css"/>
    <link rel="stylesheet" href="/css/site2/baraja.css"/>
    <link rel="stylesheet" href="/css/site2/jquery.bxslider.css"/>

    <!--=== Main Stylesheets ===-->
    <link rel="stylesheet" href="/css/site2/style_923.css"/>

    <link rel="stylesheet" id="scheme-source" href="/css/site2/schemes/gray.css"/>
    <link rel="stylesheet" id="scheme-source" href="/css/site2/video-js.min.css"/>
    @yield("css")
    <script src="https://cdn.bootcss.com/jquery/1.11.2/jquery.js"></script>
</head>
<body>

<section id="preloader" >
    <div class="loading-circle fa-spin"></div>
</section>

<div id="root">
    @yield('content')

</div>
<div id="section-footer">
    <div class="container center">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="footer-title"><!-- Footer Title -->
                    <img src="/logo-icon-01.png" style="" alt="">
                </h4>
                <div class="social-icons">
                    <ul>
                        <li><a target="_blank" href="https://medium.com/brahmalabs"><img src="/images/site2/footer/mudium.png" alt=""></a></li>
                        <li><a target="_blank" href="https://twitter.com/brahma_os"><img src="/images/site2/footer/twitter.png" alt=""></a></li>
                        <li><a target="_blank" href="https://t.me/BrahmaOS"><img src="/images/site2/footer/telegram.png" alt=""></a></li>
                        <li><a target="_blank" href="https://bitcointalk.org/index.php?topic=2992872.new#new"><img src="/images/site2/footer/bitcoin.png" alt=""></a></li>
                        <li><a target="_blank" href="https://github.com/BrahmaOS/"><img src="/images/site2/footer/github.png" alt=""></a></li>
                    </ul>
                </div>
                <p class="copyright" style="margin-top: 2vw">Copyright ©️2018 BRAHMACARIYA FOUNDATION LTD.</p>
            </div>
        </div>
    </div>
</div>


{{--<a href="#top" id="back-to-top1"><i class="fa fa-chevron-up fa-lg"></i></a>--}}

<script type="text/javascript" src="/js/site2/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/site2/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="/js/site2/jquery.vegas.min.js"></script>
<script type="text/javascript" src="/js/site2/jquery.nav.js"></script>
<script type="text/javascript" src="/js/site2/jquery.appear.js"></script>
<script type="text/javascript" src="/js/site2/video.min.js"></script>
<script type="text/javascript" src="/js/site2/videojs-contrib-hls.min.js"></script>
<script type="text/javascript" src="/js/site2/custom.js"></script>
<script type="text/javascript" src="/js/site2/jquery.bxslider.min.js"></script>

<script>
	$(function () {
		$(document).bind('scroll',function(){
			var len = $(this).scrollTop();
			if(len >= 200){
				$("#back-to-top1").show();
			}else{
				$("#back-to-top1").hide();
			}
		});
	})
</script>

</body>
</html>