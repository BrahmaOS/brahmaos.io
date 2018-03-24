@extends('site2.base')

@section('content')
<a href="" id="top"></a>

    <!--=== Header section Starts ===-->
<div id="header" class="header-section">
    <!-- sticky-bar Starts-->
    <div class="sticky-bar-wrap">
        <div class="sticky-section">
            <div id="topbar-hold" class="nav-hold container">
                <nav class="navbar" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target=".navbar-responsive-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--=== Site Name ===-->
                        {{--<a class="site-name navbar-brand" href="#"><span>E</span>gret</a>--}}
                        <a class="site-name navbar-brand" href="">
                            <img src="/logo-512-2.png" style="margin-top: -10px" alt="">
                        </a>
                    </div>

                    <!-- Main Navigation menu Starts -->
                    <div class="collapse navbar-collapse navbar-responsive-collapse n-nav">
                        <ul class="nav navbar-nav navbar-right">
                            {{--<li class="current"><a href="/">Home</a></li>--}}
                            <li><a href="#section-pricing">OS Demand</a></li>
                            {{--<li><a href="#section-services">Services</a></li>--}}
                            {{--<li><a href="#section-video">Describe</a></li>--}}
                            <li><a href="#section-team">Members</a></li>
                            <li><a href="#section-distribution">Token Distribution</a></li>
                            <li><a href="#section-Partners">Partners</a></li>
                            <li><a href="#section-Media">Media</a></li>
                            <li><a href="#section-contact">Contact</a></li>
                            <li><a href="https://medium.com/brahmalabs" target="_blank">Blog</a></li>
                            {{--<li><a href="#section-screenshots">Screenshots</a></li>--}}
                            {{--<li><a href="#section-pricing">Pricing</a></li>--}}
                        </ul>
                    </div>
                    <!-- Main Navigation menu ends-->
                </nav>
            </div>
        </div>
    </div>
    <!-- sticky-bar Ends-->
    <!--=== Header section Ends ===-->

    <!--=== Home Section Starts ===-->
    <div id="section-home" class="home-section-wrap center">
        <div class="section-overlay"></div>
        <div class="container home">
            <div class="row">
                <h1 class="well-come" data-animation="fadeInUp" data-animation-delay="700">
                    {{--<span style="border-bottom: 1px solid #fff; padding-bottom: 10px">--}}
                        Brahma OS
                    {{--</span>--}}
                </h1>

                <div class="col-md-8 col-md-offset-2">
                    <p class="intro-message" >
                        Brahma OS is an operating system that hosts decentralized networks by enabling the deconstruction of existing services
                        and the use of a wide range of decentralized services and components to ensure that users can safely and easily access services
                        on the blockchain and application.
                    </p>

                    <div class="home-buttons" style="margin-bottom: 20px">
                        <a href="/abstract/1.html" style="margin:5px 20px; min-width: 220px" target="_blank" class="fancy-button WhitePaper button-line button-white vertical">Online WhitePaper</a>
                        <a href="/Brahma_Whitepaper_v1.0.0.pdf" style="margin:5px 20px; min-width: 220px" target="_blank" class="fancy-button WhitePaper button-line button-white vertical">Download WhitePaper</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=== Home Section Ends ===-->
</div>

<section id="section-pricing" class="pricing-wrap">
    <div class="container pricing OS">
        <div class="row center">
            <div class="center section-title" style="margin-bottom: 70px">
                <h3 style="margin-bottom: 0px">Decentralized OS Demand</h3>
            </div>

            <div class="center" style="display: flex; align-content: center;justify-content: center; flex-wrap: wrap">

            <!-- Single Price Starts -->
            <div class="single-pricing-wrap center animated" data-animation="bounceInLeft" data-animation-delay="500">
                <div class="single-pricing">
                    <img src="/images/site2/data-privacy.png" alt="">

                    <div class="sign-up">
                        <div  class="single-title">
                            <p>Data Privacy</p>
                            <p>&nbsp;</p>
                        </div>
                        <a href="/abstract/1.html#DataPrivacy" target="_blank" class="fancy-button button-line btn-col zoom">
                            Details
                            <span class="icon">
                            <i class="fa fa-angle-right"></i>
                        </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Single Price Ends -->

            <!-- Single Price Starts -->
            <div class="single-pricing-wrap center animated" data-animation="bounceInLeft" data-animation-delay="500">
                <div class="single-pricing">
                    <img src="/images/site2/decentralized-storage.png" alt="">
                    <div class="sign-up">
                        <div  class="single-title">
                            <p>Decentralized Storage</p>
                            <p>&nbsp;</p>
                        </div>
                        <a href="/abstract/1.html#DecentralizedStorage"  target="_blank" class="fancy-button button-line btn-col zoom">
                            Details
                            <span class="icon">
                            <i class="fa fa-angle-right"></i>
                        </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Single Price Ends -->

            <!-- Single Price Starts -->
            <div class="single-pricing-wrap center animated" data-animation="bounceInLeft" data-animation-delay="500">
                <div class="single-pricing">
                    <img src="/images/site2/accessible-network-communication.png" alt="">
                    <div class="sign-up">
                        <div  class="single-title">
                            <p>Accessible Network</p>
                            <p>Communication</p>
                        </div>
                        <a href="/abstract/1.html#AccessibleNetworkCommunication"  target="_blank" class="fancy-button button-line btn-col zoom">
                            Details
                            <span class="icon">
                            <i class="fa fa-angle-right"></i>
                        </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Single Price Ends -->

            <!-- Single Price Starts -->
            <div class="single-pricing-wrap center animated" data-animation="bounceInLeft" data-animation-delay="500">
                <div class="single-pricing">
                    <img src="/images/site2/autonomous-economic-system.png" alt="">

                    <div class="sign-up">
                        <div  class="single-title">
                            <p>Autonomous Economic </p>
                            <p>System</p>
                        </div>
                        <a href="/abstract/1.html#AutonomousEconomicSystem" target="_blank" class="fancy-button button-line btn-col zoom">
                            Details
                            <span class="icon">
                            <i class="fa fa-angle-right"></i>
                        </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Single Price Ends -->

            <!-- Single Price Starts -->
            <div class="single-pricing-wrap center animated" data-animation="bounceInLeft" data-animation-delay="500">
                <div class="single-pricing">
                    <img src="/images/site2/management-of-cryptographic-assets.png" alt="">
                    <div class="sign-up">
                        <div  class="single-title">
                            <p>Management Of</p>
                            <p>Cryptographic Assets</p>
                        </div>
                        <a href="/abstract/1.html#ManagementofCryptographicAssets" target="_blank" class="fancy-button button-line btn-col zoom">
                            Details
                            <span class="icon">
                            <i class="fa fa-angle-right"></i>
                        </span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Single Price Ends -->
            </div>

        </div>
    </div>
</section>

<!--=== Services section Starts ===-->
<section id="section-team" class="services-wrap">
    <div class="container services">
        <div class="row" style="margin-bottom: 10px">

            <div class="col-md-12 center section-title">
                <h3 data-animation="fadeInUp" data-animation-delay="700">Members</h3>
            </div>
            <div class="col-md-12">
                <!-- Single Service Starts -->
                <div class="col-md-6 col-sm-6 service animated" data-animation="fadeInLeft" data-animation-delay="700">
                    <div class="service-desc">

                        <h4 class="service-title color-scheme">
                        <span class="team-member">
                            Lorna Chen <span style="color: #666">|</span>
                            <span style="font-size: 16px">Founder</span>
                        </span>
                        </h4>
                        <p class="service-description justify">
                            12 years’ experiences in the Internet industry, 6 times start-up experiences, outstanding ability in economic design of product.
                            Important position in top Internet company.
                            Work on the product background of billions of users.
                            Rich asset investment operating experiences in international projects over the past few years.
                        </p>
                    </div>
                </div>
                <!-- Single Service Ends -->

                <!-- Single Service Starts -->
                <div class="col-md-6 col-sm-6 service animated" data-animation="fadeInLeft" data-animation-delay="700">
                    <div class="service-desc">

                        <h4 class="service-title color-scheme">
                        <span class="team-member">
                            Steven Hu <span style="color: #666">|</span>
                            <span style="font-size: 16px">CTO</span>
                        </span>
                        </h4>
                        <p class="service-description justify">
                            10 years’ experiences in architecture design and R&D management in the telecommunication industry and the Internet industry.
                            In charge of the the architecture design work in the programmable virtual router team.
                            Participate in distributed architecture design in the initial stage.
                            Consumer BG, in charge of the R&D management and design of the IM system and cloud note system.
                        </p>
                    </div>
                </div>
                <!-- Single Service Ends -->
            </div>
            <div class="col-md-12">
                <!-- Single Service Starts -->
                <div class="col-md-6 col-sm-6 service animated" data-animation="fadeInUp" data-animation-delay="700">
                    <div class="service-desc">
                        <h4 class="service-title color-scheme">
                        <span class="team-member">
                        Trevor Smith <span style="color: #666">|</span>
                            <span style="font-size: 16px">OS architect</span>
                        </span>
                        </h4>
                        <p class="service-description justify">
                            Trevor Smith has achieved PHD degree in University of Edinburgh. 
                            He is one of the few early iOS developers worked on Salesforce and Oracle. He also worked on early prototypes of iOS and Android app for start-up and successfully leading the product launch and acquisition. 
                            Trevor is also specialized on website design and computer algorithm and is currently working decentralized blockchain technology research.
                        </p>
                    </div>
                </div>
                <!-- Single Service ends -->

                <!-- Single Service Starts -->
                <div class="col-md-6 col-sm-6 service animated" data-animation="fadeInLeft" data-animation-delay="700">

                    <div class="service-desc">
                        <h4 class="service-title color-scheme">
                        <span class="team-member">
                            Shu Collins <span style="color: #666">|</span>
                            <span style="font-size: 16px">Economic Model Architect</span>
                        </span>
                        </h4>
                        <p class="service-description justify">
                            Shu Colins achieved her Master of Science in statistics in University of Oxford, UK. 
                            She has over 10 years of work experience on data science, machine learning and AI in automotive, gaming, technology,  entertainment and digital insurance industries. 
                            She had lead data science projects in multiple fortune 500 companies or IPO companies like British Gas, Royal bank of Scotland, and specialized in blockchain application and cryptocurrency.
                        </p>
                    </div>
                </div>
                <!-- Single Service Ends -->
            </div>
            <div class="col-md-12">
                <!-- Single Service Starts -->
                <div class="col-md-6 col-sm-6 service animated" data-animation="fadeInRight" data-animation-delay="700">
                    <div class="service-desc">

                        <h4 class="service-title color-scheme">
                        <span class="team-member">
                            Srikanth Bodla <span style="color: #666">|</span>
                            <span style="font-size: 16px">DNA graph manager</span>
                        </span>
                        </h4>
                        <p class="service-description justify">
                            Srikanth Bodla is a Solutions Architect/Project lead with a strong background in Business
                            Intelligence & Data Warehousing,
                            a proven track record for successfully delivering end to end Solutions addressing problems &
                            requirements and a passion for emerging technologies Qlikview, Big Data, SAP Hana, SAP BI/BW
                            technologies and the Apache Hadoop Ecosystem
                        </p>
                    </div>
                </div>
                <!-- Single Service Ends -->

                <!-- Single Service Starts -->
                <div class="col-md-6 col-sm-6 service animated" data-animation="fadeInLeft" data-animation-delay="700">
                    <div class="service-desc">

                        <h4 class="service-title color-scheme">
                        <span class="team-member">
                            KJ <span style="color: #666">|</span>
                            <span style="font-size: 16px">Researcher</span>
                        </span>
                        </h4>
                        <p class="service-description justify">
                            12 years’ experiences in architecture design in distributed database system and P2P network.
                            Research directions including Blockchain capacity, data shard and ecosystem.
                            He has got strong experience in both technology and research.
                        </p>
                    </div>
                </div>
                <!-- Single Service Ends -->
            </div>


            <!-- Single Service Starts -->
            {{--<div class="col-md-6 col-sm-6 service animated" data-animation="fadeInUp" data-animation-delay="700">--}}
                {{--<div class="service-desc">--}}
                    {{--<h4 class="service-title color-scheme">--}}
                        {{--<span class="team-member">--}}
                            {{--Mikhail Semeniuk <span style="color: #666">|</span>--}}
                            {{--<span style="font-size: 16px">Adviser</span>--}}
                        {{--</span>--}}
                    {{--</h4>--}}
                    {{--<p class="service-description justify">--}}
                        {{--Mikhail Semeniuk has achieved Masters Degree in the Financial Mathematics in University of--}}
                        {{--Minnesota – Twin Cities, he is a Pricing Expert in Shift Technologies and global lead with a--}}
                        {{--strong background in Platform Analytics and Statistician in various business intelligence, a--}}
                        {{--proven track record for successfully delivering end to end analytics architecture process.--}}
                    {{--</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!-- Single Service Ends -->

            <!-- Single Service Starts -->
            {{--<div class="col-md-6 col-sm-6 service animated" data-animation="fadeInUp" data-animation-delay="700">--}}
                {{--<div class="service-desc">--}}
                    {{--<h4 class="service-title color-scheme">--}}
                        {{--<span class="team-member">--}}
                        {{--Xingchu Liu <span style="color: #666">|</span>--}}
                            {{--<span style="font-size: 16px">Blockchain protocol architect</span>--}}
                        {{--</span>--}}
                    {{--</h4>--}}
                    {{--<p class="service-description justify">--}}
                        {{--Xingchu Liu has achieved PHD in Texas A&M University and Master and Bachelor Degree in--}}
                        {{--Tsinghua University. Accomplished leader and innovator with a deep expertise in the--}}
                        {{--application of analytics, business intelligence, machine learning, data mining, and--}}
                        {{--artificial intelligence in a variety of industries - retail, e-commerce, technology,--}}
                        {{--wholesale, manufacturing, and distribution. Over 12 years of experience in the design,--}}
                        {{--development, and implementation of analytics decision support solutions.--}}
                    {{--</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!-- Single Service ends -->


            <div class="col-md-12">
                <div class="col-md-12 center section-title" data-animation="fadeInUp" data-animation-delay="700" style="margin-bottom: 40px">
                    <h4 data-animation="fadeInUp" data-animation-delay="700">Team responsibility</h4>
                </div>

                <div class="col-md-12">
                    <!-- Single Service Starts -->
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc">
                            <h4 class="service-title color-scheme">
                        <span class="team-member">
                            Ocean Lu
                        </span>
                            </h4>
                            <p class="service-description Team" style="text-align: left">
                                In charge of user persona team, machine learning, deep learning and algorithm research.
                                Encapsulate user tags.
                            </p>
                        </div>
                    </div>
                    <!-- Single Service Ends -->

                    <!-- Single Service Starts -->
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc">
                            <h4 class="service-title color-scheme">
                        <span class="team-member">
                            Martin Wang
                        </span>
                            </h4>
                            <p class="service-description Team" style="text-align: left">
                                In charge of distributed protocol optimization, network layer protocol docking OS.
                                Secure package storage content
                            </p>
                        </div>
                    </div>
                    <!-- Single Service Ends -->

                    <!-- Single Service Starts -->
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc">
                            <h4 class="service-title color-scheme">
                        <span class="team-member">
                            Kevin Lee
                        </span>
                            </h4>
                            <p class="service-description Team" style="text-align: left">
                                In charge of the realization of non-network technology, reform non-network protocol, optimize performance, embed OS
                            </p>
                        </div>
                    </div>
                    <!-- Single Service Ends -->

                    <!-- Single Service Starts -->
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc">
                            <h4 class="service-title color-scheme">
                        <span class="team-member">
                            KJ
                        </span>
                            </h4>
                            <p class="service-description justify" style="text-align: center">
                                Research mainly on optimization of chain structure, based on the chain algorithm design and implementation.
                            </p>
                        </div>
                    </div>
                    <!-- Single Service Ends -->
                </div>

                <div class="col-md-12">

                    <!-- Single Service Starts -->
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc">
                            <h4 class="service-title color-scheme">
                        <span class="team-member">
                            Steven
                        </span>
                            </h4>
                            <p class="service-description Team" style="text-align: left">
                                Lead a team of 10 people, in charge of OS's underlying system implementation, deconstruct layers.
                                <br>
                                Overall R & D embed all layers of the OS agreement.
                            </p>
                        </div>
                    </div>
                    <!-- Single Service Ends -->
                    <!-- Single Service Starts -->
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc">
                            <h4 class="service-title color-scheme">
                        <span class="team-member">
                            Han
                        </span>
                            </h4>
                            <p class="service-description Team">
                                In charge of Dapp architecture design and development, providing overall API for upper layer access.
                                System Design and Implementation.
                            </p>
                        </div>
                    </div>
                    <!-- Single Service Ends -->
                    <!-- Single Service Starts -->
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc">
                            <h4 class="service-title color-scheme">
                        <span class="team-member">
                            Sheng
                        </span>
                            </h4>
                            <p class="service-description Team" style="text-align: left">
                                In charge of security attack and security reinforcement.
                                Design architecture and develop transport layer security in the protocol layer for the overall OS
                            </p>
                        </div>
                    </div>
                    <!-- Single Service Ends -->
                    <!-- Single Service Starts -->
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc">
                            <h4 class="service-title color-scheme">
                        <span class="team-member">
                            David Silva
                        </span>
                            </h4>
                            <p class="service-description Team" style="text-align: left">
                                In charge of the functional design of the OS product and the development of the interface protocol.
                                Project priority adjustment.
                            </p>
                        </div>
                    </div>
                    <!-- Single Service Ends -->
                </div>

                <div class="col-md-12">
                    <!-- Single Service Starts -->
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc">
                            <h4 class="service-title color-scheme">
                        <span class="team-member">
                            JAsmall
                        </span>
                            </h4>
                            <p class="service-description Team" style="text-align: left">
                                OS interactive designer expert.
                                Provide solutions for mainframe human-computer interaction
                            </p>
                        </div>
                    </div>
                    <!-- Single Service Ends -->
                    <!-- Single Service Starts -->
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc">
                            <h4 class="service-title color-scheme">
                        <span class="team-member">
                            Ouy
                        </span>
                            </h4>
                            <p class="service-description Team" style="text-align: left">
                                In charge of payment system design and development.
                                Docking the various payment protocols on the chain safely and quickly.
                            </p>
                        </div>
                    </div>
                    <!-- Single Service Ends -->
                    <!-- Single Service Starts -->
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc">
                            <h4 class="service-title color-scheme">
                        <span class="team-member">
                            Kaiko
                        </span>
                            </h4>
                            <p class="service-description Team" style="text-align: left">
                                In charge of visual effects, UI designer.
                            </p>
                        </div>
                    </div>
                    <!-- Single Service Ends -->
                    <!-- Single Service Starts -->
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc">
                            <h4 class="service-title color-scheme">
                        <span class="team-member">
                            others
                        </span>
                            </h4>
                            <p class="service-description Team" style="text-align: left">
                                Overseas team profile to be updated.
                            </p>
                        </div>
                    </div>
                    <!-- Single Service Ends -->
                </div>
            </div>

        </div>
    </div>
</section>
<!--=== Services section Ends ===-->


<section id="section-distribution" class="services-wrap">
    {{--<div class="container pricing">--}}
        <div class="row">

            <div class="col-md-10 col-md-offset-1 center section-title" style="margin-top: 70px; margin-bottom: 0px; z-index: 5">
                <h3 style="color: #666" data-animation="fadeInUp" data-animation-delay="700">Token Distribution</h3>
            </div>

            <!-- Single Service Starts -->
            <div class="col-md-12  center distribution animated token-distribution" data-animation="fadeInLeft" data-animation-delay="700" style="">
                <img src="/images/site2/p-token-distribution.png" id="distribution" style="margin: 0 auto"  alt="">
            </div>
            <div class="col-md-12 center distribution animated " style="color:red;">
                <span class="button-line  vertical total-distribution" style="">
                    Total Brahma OS Tokens: 3,000,000,000
                </span>
            </div>
            <!-- Single Service Ends -->
        </div>
    {{--</div>--}}
</section>

<section id="section-Partners" class="services-wrap" style="background: #1c1a21;" >
    <div class="container pricing Partners">
        <div class="row">
            <div class="subcontent center">
                <div class="col-md-10 col-md-offset-1 center section-title" style="margin-bottom: 40px">
                    <h3 style="color: #ccc;text-transform: none" data-animation="fadeInUp" data-animation-delay="700">Partners and Advisors</h3>
                </div>
                {{--<div class="col-md-10 col-md-offset-1 center section-title" style="margin-bottom: 0px; z-index: 5">--}}
                    {{--<h3 style="color: #666">Partners</h3>--}}
                {{--</div>--}}
                <div>
                    {{--http://www.jpmorganchina.com.cn/country/CN/zh/jpmorgan/--}}
                    {{--<a href="#" class="animated"><img src="/images/site2/link/13.png" data-animation-delay="700" alt=""></a>--}}
                    <img src="/images/site2/link/citibank.png" data-animation="fadeInUp" data-animation-delay="700" alt="">
                    <img src="/images/site2/link/14.png"  data-animation="fadeInUp" data-animation-delay="700"  alt="">
                    <img src="/images/site2/link/13.png" data-animation="fadeInUp" data-animation-delay="700" alt="">
                    <a href="https://jun.capital/" target="_blank" class="animated"><img style="cursor: pointer" src="/images/site2/link/jun.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>
                    <a href="https://www.abcf.london/" target="_blank" class="animated"><img src="/images/site2/link/abcf.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>
                    <a href="http://www.vipidc.com/" target="_blank" class="animated"><img src="/images/site2/link/vipidc.png" data-animation="fadeInUp" data-animation-delay="700"  alt=""></a>
                    <a href="http://bitfwd.com/" target="_blank" class="animated"><img src="/images/site2/link/Bitfwd.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>
                    <img src="/images/site2/link/ccp.png" data-animation="fadeInUp" data-animation-delay="700" alt="">
                    <a href="http://www.jinse.com" target="_blank" class="animated"><img src="/images/site2/link/jinse.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>
                    {{--<a href="http://www.szmg.com.cn/" target="_blank" class="animated"><img src="/images/site2/link/1.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>--}}
                    {{--<a href="https://www.lenovo.com.cn/" target="_blank" class="animated"><img src="/images/site2/link/2.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>--}}
                    {{--<a href="http://www.huawei.com/" target="_blank" class="animated"><img src="/images/site2/link/3.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>--}}
{{--                    <a href="http://www.midea.com/" target="_blank" class="animated"><img src="/images/site2/link/4.png" data-animation="fadeInUp" data-animation-delay="700"  alt=""></a>--}}
{{--                    <a href="http://www.evergrande.com/" target="_blank" class="animated"><img src="/images/site2/link/5.png" data-animation="fadeInUp" data-animation-delay="700"  alt=""></a>--}}
                    {{--<a href="http://www.founder.com/" target="_blank" class="animated"><img src="/images/site2/link/6.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>--}}
                    <a href="http://www.pku.edu.cn/" target="_blank" class="animated"><img src="/images/site2/link/7.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>
                    {{--<a href="" target="_blank" class="animated"><img src="/images/site2/link/8.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>--}}
                    {{--<a href="http://www.stonexp.com/" target="_blank" class="animated"><img src="/images/site2/link/9.png" data-animation="fadeInUp" data-animation-delay="700"  alt=""></a>--}}
                    {{--<a href="https://www.suning.com/" target="_blank" class="animated"><img src="/images/site2/link/11.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>--}}
                    {{--<a href="http://www.zte.com.cn/china/" target="_blank" class="animated"><img src="/images/site2/link/10.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>--}}
                    {{--<a href="" target="_blank" class="animated"><img src="/images/site2/link/12.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>--}}
                </div>
            </div>
            <!-- Single Service Ends -->
        </div>
    </div>
</section>

<section id="section-Media" class="services-wrap" style="background: #fff;" >
    <div class="container pricing Partners " style="padding-top: 70px; padding-bottom: 70px">
        <div class="row">
            <div class="subcontent center" style="">
                <div class="col-md-12 center section-title"  style="margin-bottom: 20px">
                    <h3 style="color: #666;" data-animation="fadeInUp" data-animation-delay="700">Media</h3>
                </div>
                <div>
                    <a href="https://cointelegraph.com/press-releases/brahma-os-is-the-decentralized-value-operating-system-based-on-revolutionary-blockchain-technology" data-animation-delay="700" target="_blank" class="media-img animated"><img src="/images/site2/media/Group 3.png"  alt=""></a>
                    <a href="http://bitcoinist.com/brahma-os-decentralized-value-operating-system-based-revolutionary-blockchain-technology/" data-animation-delay="700" target="_blank" class="media-img animated"><img src="/images/site2/media/Group 4.png"   alt=""></a>
                    <a href="http://allcoinsnews.com/2018/02/22/brahma-os-decentralized-value-operating-system-based-on-revolutionary-blockchain-tech/"  data-animation-delay="700" target="_blank" class="media-img animated"><img src="/images/site2/media/Group 5.png"   alt=""></a>
                    <a href="http://www.jinse.com/blockchain/152090.html" target="_blank" class="media-img animated"><img src="/images/site2/media/Group 6.png" data-animation-delay="700"  alt=""></a>
                    <a href="https://www.newsbtc.com/press-releases/brahma-os-decentralized-value-operating-system-based-revolutionary-blockchain-technology/" data-animation-delay="700" target="_blank" class="media-img animated"><img src="/images/site2/media/Group 7.png"   alt=""></a>
                    <a href="https://www.ccn.com/brahma-os-decentralized-value-operating-system-based-revolutionary-blockchain-technology/" data-animation-delay="700" target="_blank" class="media-img animated"><img src="/images/site2/media/Group 8.png"   alt=""></a>
                    <a href="https://blueskyinvestor.com/brahma-os-offers-decentralized-value-operating-system-revolutionary-blockchain-technology/" data-animation-delay="700" target="_blank" class="media-img animated"><img src="/images/site2/media/Group 9.png"   alt=""></a>
                    <a href="https://themerkle.com/brahma-os-is-the-decentralized-value-operating-system-based-on-revolutionary-blockchain-technology/" data-animation-delay="700" target="_blank" class="media-img animated"><img src="/images/site2/media/Group 10.png"   alt=""></a>
                    <a href="http://www.coinnewsasia.com/brahma-os-is-the-decentralized-value-operating-system-based-on-blockchain-tech/" target="_blank" data-animation-delay="700" class="media-img animated"><img src="/images/site2/media/Group 11.png"   alt=""></a>
                    <a href="https://coinjournal.net/pr-release/brahma-os-decentralized-value-operating-system-based-revolutionary-blockchain-technology/" target="_blank" data-animation-delay="700" class="media-img animated"><img src="/images/site2/media/Group 12.png"   alt=""></a>
                    <a href="https://news.bitcoin.com/pr-brahma-os-is-the-decentralized-value-operating-system-based-on-revolutionary-blockchain-technology/" target="_blank" data-animation-delay="700" class="media-img animated"><img src="/images/site2/media/Group 13.png"   alt=""></a>
                    {{--<a href="http://new.qq.com/omn/20180222A08Q8N00" target="_blank" class="media-img"><img src="/images/site2/media/TXnews_logo.png" style="margin: 30px 50px"  alt=""></a>--}}
                    {{--<a href="https://3g.k.sohu.com/t/n263723663?gotoId=263723663" target="_blank" class="media-img"><img src="/images/site2/media/sohu-logo.png" style="margin: 30px 50px"  alt=""></a>--}}
                </div>
            </div>
            <!-- Single Service Ends -->
        </div>
    </div>
</section>

<section id="section-contact" class="services-wrap" style="background: #1c1a21;" >
    <div class="container pricing Partners " style="padding-top: 70px; padding-bottom: 70px">
        <div class="row">
            <div class="subcontent center" style="">
                <div class="center section-title"  style="margin-bottom: 10px">
                    <h3 style="color: #ccc;" data-animation="fadeInUp" data-animation-delay="700">Contact-Project BRAHMA</h3>
                </div>

                <div style="margin-bottom: 40px">
                    <span style="color: #7F8C8D">
                        Investors should be cautious to evadeinvestment risks
                    </span>
                </div>

                <div class="center section-title" style="margin-bottom: 50px;">
                    <h5 style="color: #7F8C8D; font-size: 20px">Bramha Official Designated Contact</h5>
                </div>
                <div>
                        <div class="contact-message " >
                            <div>
                                Asian Area
                            </div>
                            Karen LIU : &nbsp; Lynn@brahmalabs.org
                        </div>

                        <div class="contact-message">
                            <div>
                                East Asia (South Korea Area) Authorised Agent
                            </div>
                            Coinway Ventures (ICO BANK) : &nbsp; 최제호 &nbsp; osbrahma2@gmail.com
                        </div>

                        <div class="contact-message">
                            <div>
                                East Asia (Japan Area) Authorised Agent
                            </div>
                            Ryan kim : &nbsp; ryan0911@naver.com
                        </div>

                        <div class="contact-message">
                            <div>
                                Other Area
                            </div>
                            Lynn@brahmalabs.org
                        </div>
                </div>

            </div>
            <!-- Single Service Ends -->
        </div>
    </div>
</section>


{{--<!--=== Video section Starts ===-->--}}
{{--<section id="section-video" class="section-video-wrap">--}}
    {{--<div class="section-overlay"></div>--}}
    {{--<div class="container big-video center animated" data-animation="fadeInLeft" data-animation-delay="700">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-12 section-title">--}}
                {{--<h3>Describe with a video</h3>--}}
            {{--</div>--}}
            {{--<div class="col-md-10 col-md-offset-1 video-content">--}}
                {{--<video--}}
                        {{--id="my-player"--}}
                        {{--class="video-js"--}}
                        {{--controls--}}
                        {{--preload="auto"--}}
                        {{--poster="//vjs.zencdn.net/v/oceans.png"--}}
                        {{--data-setup='{}'--}}
                {{-->--}}
                    {{--<source src="//vjs.zencdn.net/v/oceans.mp4" type="video/mp4"></source>--}}
                    {{--<source src="//vjs.zencdn.net/v/oceans.webm" type="video/webm"></source>--}}
                    {{--<source src="//vjs.zencdn.net/v/oceans.ogv" type="video/ogg"></source>--}}
                    {{--<p class="vjs-no-js">--}}
                        {{--To view this video please enable JavaScript, and consider upgrading to a--}}
                        {{--web browser that--}}
                        {{--<a href="http://videojs.com/html5-video-support/" target="_blank">--}}
                            {{--supports HTML5 video--}}
                        {{--</a>--}}
                    {{--</p>--}}
                {{--</video>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
<!--=== Video section Ends ===-->
@endsection