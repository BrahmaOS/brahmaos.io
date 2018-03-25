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
                        <a class="site-name navbar-brand" href="">
                            <img src="/logo-512-2.png" style="margin-top: -10px" alt="">
                        </a>
                    </div>

                    <!-- Main Navigation menu Starts -->
                    <div class="collapse navbar-collapse navbar-responsive-collapse n-nav">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#section-pricing">OS Demand</a></li>
                            <li><a href="#section-members">Members</a></li>
                            <li><a href="#section-distribution">Token Distribution</a></li>
                            <li><a href="#section-roadmap">Roadmap</a></li>
                            <li><a href="#section-Partners">Partners</a></li>
                            <li><a href="#section-Media">Media</a></li>
                            <li><a href="#section-contact">Contact</a></li>
                            <li><a href="https://medium.com/brahmalabs" target="_blank">Blog</a></li>
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
<section id="section-members" class="services-wrap">
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
            <div style="clear: both"></div>
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
                        <div class="service-desc center">
                            <h4 class="service-title color-scheme">
                                <span class="team-member">
                                    Kaiko
                                </span>
                            </h4>
                            <p class="service-description">
                                In charge of visual effects, UI designer.
                            </p>
                        </div>
                    </div>
                    <!-- Single Service Ends -->
                    <!-- Single Service Starts -->
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc center">
                            <h4 class="service-title color-scheme">
                                <span class="team-member">
                                    others
                                </span>
                            </h4>
                            <p class="service-description">
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

            <div class="col-md-12 center section-title" style="margin-top: 70px; margin-bottom: 0px; z-index: 5">
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

<section id="section-roadmap" class="services-wrap">
    {{--<div class="container pricing">--}}
    <div class="roadmap container">
        <div class="row">

            <div class="col-md-12 center section-title" style="margin-top: 70px; margin-bottom: 0px; z-index: 5">
                <h3 class="roadmap-title" data-animation="fadeInUp" data-animation-delay="700">Roadmap</h3>
            </div>

            <!-- Single Service Starts -->
            <div class="col-md-12 distribution animated token-distribution" data-animation="fadeInUp" data-animation-delay="700">
                <div class="roadmap-text roadmap-text-pc">
                    <div class="col-md-6 roadmap-left">
                        <div class="phase phase1 animated"  data-animation="fadeInUp" data-animation-delay="2100">

                            <div class="arrow-right arrow1">
                                <div class="arrow-line"></div>
                                <div class="arrow"></div>
                            </div>

                            <h1>Phrase 1</h1>
                            <p class="roadmap-time">Q3-Q4 2018</p>
                            <h2>Brahma Wallet</h2>
                            <p>
                                Brahma Wallet provides users with functions such as wallet management,
                                asset management, and transaction management. It also operates as Service and is open to upper applications.
                            </p>

                            <h3>Backlog</h3>
                            <ul class="disc-list">
                                <li>Wallet management</li>
                                <li style="list-style: none">
                                    <ul class="disc-list">
                                        <li>To create wallets, supporting passwords and mnemonics;</li>
                                        <li>To backup wallet;</li>
                                        <li>To delete wallets;</li>
                                        <li>To edit wallet (only wallet name and password change);</li>
                                        <li>To export private key and Keystore;</li>
                                    </ul>
                                </li>
                                <li>Asset management</li>
                                <li style="list-style: none">
                                    <ul class="disc-list">
                                        <li>Display of ETH and other Token asset information;</li>
                                        <li>To add or remove impressions of Token asset information;</li>
                                    </ul>
                                </li>
                                <li>Transaction management</li>
                                <li style="list-style: none">
                                    <ul class="disc-list">
                                        <li>Receipt (supporting two-dimensional code);</li>
                                        <li>Transfer (supporting ETH accounts and sending Tokens by smart contracts);</li>
                                        <li>Historical transaction records;</li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-md-6 roadmap-right">
                        <div class="phase phase0 animated"  data-animation="fadeInUp" data-animation-delay="1400">
                            <div class="arrow-left arrow0"></div>
                            <h1>Phrase 0</h1>
                            <p class="roadmap-time">Q2-Q4 2018</p>
                            <h2>Overall Objective</h2>
                            <p>To realize a basic and decentralized MVP version with a Brahma Wallets account which support a part of Android followers.</p>
                            <h2>Brahma OS</h2>
                            <p>For the Brahma OS in Phrase One, our mission (and also our iterative rhythm) is as follows： </p>
                            <ul class="disc-list">
                                <li>To complete the Ethereum blockchain technology stack that implements the LES protocol;</li>
                                <li>To complete the Android system source code (Android Framework) cutting and partial module reconstruction;</li>
                                <li>To optimize the model selected for the drive adaptation part;</li>
                            </ul>
                            <div class="roadmap-level-2">
                                <h3>Backlog</h3>
                                <ul class="disc-list">
                                    <li>Cutting or reconstructing all centralized module and framework component code based on Android system source code</li>
                                    <li>Ethereum Relayer of Brahma Chain, which supports Ethereum blockchain's LES protocol and opens related capabilities and services for Ethereum blockchains for upper-level applications, including:</li>
                                    <li style="list-style: none">
                                        <ul class="disc-list">
                                            <li>Ethereum account management;</li>
                                            <li>Blockchain management</li>
                                            <li>Transfers and transaction records;</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="roadmap-text roadmap-text-mobile">
                    <!-- pc -->
                    <div class="phase phase0 animated"  data-animation="fadeInUp" data-animation-delay="1400">

                        <h1>Phrase 0</h1>
                        <p class="roadmap-time">Q2-Q4 2018</p>
                        <h2>Overall Objective</h2>
                        <p>To realize a basic and decentralized MVP version with a Brahma Wallets account which support a part of Android followers.</p>
                        <h2>Brahma OS</h2>
                        <p>For the Brahma OS in Phrase One, our mission (and also our iterative rhythm) is as follows： </p>
                        <ul class="disc-list">
                            <li>To complete the Ethereum blockchain technology stack that implements the LES protocol;</li>
                            <li>To complete the Android system source code (Android Framework) cutting and partial module reconstruction;</li>
                            <li>To optimize the model selected for the drive adaptation part;</li>
                        </ul>
                        <div class="roadmap-level-2">
                            <h3>Backlog</h3>
                            <ul class="disc-list">
                                <li>Cutting or reconstructing all centralized module and framework component code based on Android system source code</li>
                                <li>Ethereum Relayer of Brahma Chain, which supports Ethereum blockchain's LES protocol and opens related capabilities and services for Ethereum blockchains for upper-level applications, including:</li>
                                <li style="list-style: none">
                                    <ul class="disc-list">
                                        <li>Ethereum account management;</li>
                                        <li>Blockchain management</li>
                                        <li>Transfers and transaction records;</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- mobile -->
                    <div class="phase phase1 animated"  data-animation="fadeInUp" data-animation-delay="1400">
                        <h1>Phrase 1</h1>
                        <p class="roadmap-time">Q3-Q4 2018</p>
                        <h2>Brahma Wallet</h2>
                        <p>
                            Brahma Wallet provides users with functions such as wallet management,
                            asset management, and transaction management. It also operates as Service and is open to upper applications.
                        </p>

                        <h3>Backlog</h3>
                        <ul class="disc-list">
                            <li>Wallet management</li>
                            <li style="list-style: none">
                                <ul class="disc-list">
                                    <li>To create wallets, supporting passwords and mnemonics;</li>
                                    <li>To backup wallet;</li>
                                    <li>To delete wallets;</li>
                                    <li>To edit wallet (only wallet name and password change);</li>
                                    <li>To export private key and Keystore;</li>
                                </ul>
                            </li>
                            <li>Asset management</li>
                            <li style="list-style: none">
                                <ul class="disc-list">
                                    <li>Display of ETH and other Token asset information;</li>
                                    <li>To add or remove impressions of Token asset information;</li>
                                </ul>
                            </li>
                            <li>Transaction management</li>
                            <li style="list-style: none">
                                <ul class="disc-list">
                                    <li>Receipt (supporting two-dimensional code);</li>
                                    <li>Transfer (supporting ETH accounts and sending Tokens by smart contracts);</li>
                                    <li>Historical transaction records;</li>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-12 center token-distribution">
                The roadmap will be regularly updated, please refer to our official website for future updates.
            </div>

            <!-- Single Service Ends -->
        </div>
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
                    <img src="/images/site2/link/citibank.png" data-animation="fadeInUp" data-animation-delay="700" alt="">
                    <img src="/images/site2/link/14.png"  data-animation="fadeInUp" data-animation-delay="700"  alt="">
                    <img src="/images/site2/link/13.png" data-animation="fadeInUp" data-animation-delay="700" alt="">
                    <a href="https://jun.capital/" target="_blank" class="animated"><img style="cursor: pointer" src="/images/site2/link/jun.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>
                    <a href="https://www.abcf.london/" target="_blank" class="animated"><img src="/images/site2/link/abcf.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>
                    <a href="http://www.vipidc.com/" target="_blank" class="animated"><img src="/images/site2/link/vipidc.png" data-animation="fadeInUp" data-animation-delay="700"  alt=""></a>
                    <a href="http://bitfwd.com/" target="_blank" class="animated"><img src="/images/site2/link/Bitfwd.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>
                    <img src="/images/site2/link/ccp.png" data-animation="fadeInUp" data-animation-delay="700" alt="">
                    <a href="http://www.xgenomics.org/" target="_blank" class="animated"><img src="/images/site2/link/XGenomics.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>
                    <a href="https://www.filecoinasia.com" target="_blank" class="animated"><img src="/images/site2/link/filecoin-logo.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>
                    <a href="http://www.jinse.com" target="_blank" class="animated"><img src="/images/site2/link/jinse.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>
                    <a href="http://www.huawei.com/" target="_blank" class="animated"><img src="/images/site2/link/3.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>
                    {{--<a href="https://www.lenovo.com.cn/" target="_blank" class="animated"><img src="/images/site2/link/2.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>--}}
                    {{--http://www.jpmorganchina.com.cn/country/CN/zh/jpmorgan/--}}
                    {{--<a href="#" class="animated"><img src="/images/site2/link/13.png" data-animation-delay="700" alt=""></a>--}}
                    {{--<a href="http://www.szmg.com.cn/" target="_blank" class="animated"><img src="/images/site2/link/1.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>--}}
                    {{--<a href="http://www.midea.com/" target="_blank" class="animated"><img src="/images/site2/link/4.png" data-animation="fadeInUp" data-animation-delay="700"  alt=""></a>--}}
                    {{--<a href="http://www.evergrande.com/" target="_blank" class="animated"><img src="/images/site2/link/5.png" data-animation="fadeInUp" data-animation-delay="700"  alt=""></a>--}}
                    {{--<a href="http://www.founder.com/" target="_blank" class="animated"><img src="/images/site2/link/6.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>--}}
                    {{--<a href="http://www.pku.edu.cn/" target="_blank" class="animated"><img src="/images/site2/link/7.png" data-animation="fadeInUp" data-animation-delay="700" alt=""></a>--}}
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

@endsection