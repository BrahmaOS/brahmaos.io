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
    <link rel="stylesheet" href="/css/site2/style_h2sdfhu23e9se.css"/>

    <link rel="stylesheet" id="scheme-source" href="/css/site2/schemes/gray.css"/>
    @yield("css")
    <script src="https://cdn.bootcss.com/jquery/1.11.2/jquery.js"></script>
    <style>
        .site-name {
            color: #fff;
            font-family: 'Raleway', sans-serif;
            font-size: 24px;
            padding: 14px 15px 8px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        #back-to-top1{
            position:fixed;
            bottom:40px;
            right:30px;
            width: 40px;
            height: 40px;
            margin: 0;
            /*border:1px solid #f4645f;*/
            border-radius: 4px;
            /*background: #f4645f;*/
            /*background: linear-gradient(to bottom, #6b00ce, #114cf6 );*/
            background: rgba(216, 216, 216, 0.9);
            color:rgba(0, 0, 0, 0.3);
            text-align: center;
            z-index: 100;
        }
        #back-to-top1 > i {
            margin-top: 10px;
        }
    </style>
</head>
<body>
<!--=== Preloader section starts ===-->
<section id="preloader" >
    <div class="loading-circle fa-spin"></div>
</section>
<!--=== Preloader section Ends ===-->
@yield('content')

<!--=== Footer section Starts ===-->
<div id="section-footer" class="footer-wrap">
    <div class="container footer center">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="footer-title"><!-- Footer Title -->
                    <a class="site-name navbar-brand" href="">
                        <img src="/logo-512-2.png" style="" alt="">
                    </a>
                </h4>

                <!-- Social Links -->
                <div class="social-icons">
                    <ul>
                        <li><a target="_blank" href="https://medium.com/brahmalabs"><img src="/images/site2/footer-logo/mudium.png" style="width: 28px; height: 28px" alt=""></a></li>
                        <li><a target="_blank" href="https://twitter.com/brahma_os"><img src="/images/site2/footer-logo/twitter_F Copy.png" style="width: 28px; height: 28px" alt=""></a></li>
                        <li><a target="_blank" href="https://t.me/BrahmaOS"><img src="/images/site2/footer-logo/telegram copy.png" style="width: 28px; height: 28px" alt=""></a></li>
                        <li><a target="_blank" href="https://bitcointalk.org/index.php?topic=2992872.new#new"><img src="/images/site2/footer-logo/bitcoin-2.png" style="width: 28px; height: 28px" alt=""></a></li>
                        <li><a target="_blank" href="https://github.com/BrahmaOS/"><img src="/images/site2/footer-logo/github.png" style="width: 28px; height: 28px" alt=""></a></li>
                    </ul>
                </div>

                <p class="copyright" style="font-size: 14px">Copyright ©️2018 BRAHMACARIYA FOUNDATION LTD.</p>
            </div>
        </div>
    </div>
</div>

<a href="#top" id="back-to-top1"><i class="fa fa-chevron-up fa-lg"></i></a>


<!--=== Footer section Ends ===-->

<!--==== Js files ====-->
<!--==== Essential files ====-->

<script type="text/javascript" src="/js/site2/bootstrap.min.js"></script>
{{--<script type="text/javascript" src="{{asset('js/site2/bootstrapValidator.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{asset('js/site2/modernizr.js')}}"></script>--}}
<script type="text/javascript" src="/js/site2/jquery.easing.1.3.js"></script>

<!--==== Slider and Card style plugin ====-->
<script type="text/javascript" src="/js/site2/jquery.baraja.js"></script>
<script type="text/javascript" src="/js/site2/jquery.vegas.min.js"></script>
<script type="text/javascript" src="/js/site2/jquery.bxslider.min.js"></script>

<!--==== MailChimp Widget plugin ====-->
<script type="text/javascript" src="/js/site2/jquery.ajaxchimp.min.js"></script>

<!--==== Scroll and navigation plugins ====-->
<script type="text/javascript" src="/js/site2/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="/js/site2/jquery.nav.js"></script>
<script type="text/javascript" src="/js/site2/jquery.appear.js"></script>
<script type="text/javascript" src="/js/site2/jquery.fitvids.js"></script>

<!--==== Custom Script files ====-->
<script type="text/javascript" src="/js/site2/custom.js"></script>
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
		// $("#back-to-top1").click(function(e){
		// 	// e.preventDefault();
		// 	// console.log(12345678);
		// 	// $('body').animate({scrollTop:0},1000);
		// });
	})
</script>

</body>
</html>