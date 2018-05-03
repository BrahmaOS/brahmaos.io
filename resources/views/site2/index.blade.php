@extends('site2.base')

@section('content')
<a href="" id="top"></a>
{{--<img id="brahmaos-background section-overlay" src="/images/site2/bg-slider/v2.jpeg" style="position: fixed; top: 0; width: 2082.63px; height: 983px; bottom: auto; right: auto;">--}}

<section id="header" class="header-section section">
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

                    <div class="collapse navbar-collapse navbar-responsive-collapse n-nav">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="current"><a href="#section-pricing">OS Demand</a></li>
                            <li><a href="#section-members">Members</a></li>
                            <li><a href="#section-distribution">Token Distribution</a></li>
                            <li><a href="#section-roadmap">Roadmap</a></li>
                            <li><a href="#section-Partners">Partners</a></li>
                            <li><a href="#section-Media">Media</a></li>
                            <li><a href="#section-contact">Contact</a></li>
                            <li><a href="https://medium.com/brahmalabs" target="_blank">Blog</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div id="section-home" class="home-section-wrap center">
        <div class="wrap-video" id = "wrap-video" >
            <video id="brahmaos-video" class="video-js" controls>
                <source
                        src="/storage/video/brahmaos.m3u8"
                        type="application/x-mpegURL">
            </video>
        </div>

        <div class="section-overlay video-overlay" style="display: none"></div>
        <div class="container home" id="home" style="display: none" >
            <div class="center">
                <h1 class="well-come" data-animation="fadeInUp" data-animation-delay="700">
                    <span class="home-title">
                        Brahma OS
                    </span>
                </h1>
                <p class="intro-message" >
                    Brahma OS is an operating system that hosts decentralized networks by enabling the deconstruction of existing services
                    and the use of a wide range of decentralized services and components to ensure that users can safely and easily access services
                    on the blockchain and application.
                </p>

                <div class="home-buttons">
                    <a href="/Brahma_Whitepaper_v1.0.0.pdf" style="margin:5px 20px; min-width: 220px" target="_blank" class="fancy-button WhitePaper button-line button-white vertical">Download WhitePaper</a>
                    <span  class="fancy-button WhitePaper button-line button-white vertical " id="play-video">Play Video</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-pricing" class="pricing-wrap section ">
    <div class="container pack">
        <div class="row center">
            <div class="left section-title">
                <h4>Decentralized OS Demand</h4>
            </div>

            <div class="center" style="display: flex; align-content: center;justify-content: center; flex-wrap: wrap">

            <!-- Single Price Starts -->
            <div class="center animated" data-animation="bounceInLeft" data-animation-delay="500">
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
            <div class="center animated" data-animation="bounceInLeft" data-animation-delay="500">
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
            <div class="center animated" data-animation="bounceInLeft" data-animation-delay="500">
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
            <div class="center animated" data-animation="bounceInLeft" data-animation-delay="500">
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
            <div class="center animated" data-animation="bounceInLeft" data-animation-delay="500">
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

<section id="section-members" class="services-wrap section" style="background: #000">
    <div class="container pack">
        <div class="row">
            <!--  members  --->
            <div class="col-md-12  section-title">
                <h4 data-animation="fadeInUp" data-animation-delay="700">Members</h4>
            </div>

            <div class="col-md-12 center">
                <div id="bx-pager" class="members-photos col-md-6">
                    
                    <div class="col-md-12">
                        <a data-slide-index="0" href="" class="photo-hold ">
                            <img src="/images/site2/members/Bella Liu.png" class="photo-bg" alt="" /> <!-- Client photo 1 -->
                        </a>
                        <a data-slide-index="1" href="" class="photo-hold ">
                            <img src="/images/site2/members/Bella Liu.png" class="photo-bg" alt="" /> <!-- Client photo 1 -->
                        </a>
                        <a data-slide-index="2" href="" class="photo-hold ">
                            <img src="/images/site2/members/Bella Liu.png" class="photo-bg" alt="" /> <!-- Client photo 1 -->
                        </a>
                        <a data-slide-index="3" href="" class="photo-hold ">
                            <img src="/images/site2/members/Bella Liu.png" class="photo-bg" alt="" /> <!-- Client photo 1 -->
                        </a>
                    </div>

                    <div class="col-md-12">
                        <a data-slide-index="0" href="" class="photo-hold ">
                            <img src="/images/site2/members/Bella Liu.png" class="photo-bg" alt="" /> <!-- Client photo 1 -->
                        </a>
                        <a data-slide-index="1" href="" class="photo-hold ">
                            <img src="/images/site2/members/Bella Liu.png" class="photo-bg" alt="" /> <!-- Client photo 1 -->
                        </a>
                        <a data-slide-index="2" href="" class="photo-hold ">
                            <img src="/images/site2/members/Bella Liu.png" class="photo-bg" alt="" /> <!-- Client photo 1 -->
                        </a>
                        <a data-slide-index="3" href="" class="photo-hold ">
                            <img src="/images/site2/members/Bella Liu.png" class="photo-bg" alt="" /> <!-- Client photo 1 -->
                        </a>
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="testimonial-slider">
                        <div class="testimonial">

                            <div class="members-intro left">
                                <div class="">
                                    <div class="members-photo">
                                        <img src="/images/site2/members/Bella Liu.png" alt="">
                                    </div>
                                    <h4 class="member-name">
                                        Bella liu
                                    </h4>
                                    <h4 class="member-position" style="margin-top: -10px">
                                        co-founder
                                    </h4>
                                    <p class="member-description">
                                        12 years experience in the Internet industry
                                        6 times start-up experiences, with outstanding ability in economic design of product
                                        Held Important positions in top Internet companies
                                        Rich asset investment operating experiences in international projects over the past few
                                        years.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="members-intro left">
                                <div class="">
                                    <div class="members-photo">
                                        <img src="/images/site2/members/Bella Liu.png" alt="">
                                    </div>
                                    <h4 class="member-name">
                                        Bella liu
                                    </h4>
                                    <h4 class="member-position" style="margin-top: -10px">
                                        co-founder
                                    </h4>
                                    <p class="member-description">
                                        12 years experience in the Internet industry
                                        6 times start-up experiences, with outstanding ability in economic design of product
                                        Held Important positions in top Internet companies
                                        Rich asset investment operating experiences in international projects over the past few
                                        years.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="members-intro left">
                                <div class="">
                                    <div class="members-photo">
                                        <img src="/images/site2/members/Bella Liu.png" alt="">
                                    </div>
                                    <h4 class="member-name">
                                        Bella liu
                                    </h4>
                                    <h4 class="member-position" style="margin-top: -10px">
                                        co-founder
                                    </h4>
                                    <p class="member-description">
                                        12 years experience in the Internet industry
                                        6 times start-up experiences, with outstanding ability in economic design of product
                                        Held Important positions in top Internet companies
                                        Rich asset investment operating experiences in international projects over the past few
                                        years.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="members-intro left">
                                <div class="">
                                    <div class="members-photo">
                                        <img src="/images/site2/members/Bella Liu.png" alt="">
                                    </div>
                                    <h4 class="member-name">
                                        Bella liu
                                    </h4>
                                    <h4 class="member-position" style="margin-top: -10px">
                                        co-founder
                                    </h4>
                                    <p class="member-description">
                                        12 years experience in the Internet industry
                                        6 times start-up experiences, with outstanding ability in economic design of product
                                        Held Important positions in top Internet companies
                                        Rich asset investment operating experiences in international projects over the past few
                                        years.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<section id="section-distribution" class="services-wrap section">
    <div class="container pack">
        <div class="row">
            <div class="col-md-12 section-title" >
                <h4>Token Distribution</h4>
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
    </div>
</section>

<section id="section-roadmap" class="services-wrap section">
    <div class="container pack">
        <div class="row">

            <div class="col-md-12 section-title">
                <h4>Roadmap</h4>
            </div>

            <!-- Single Service Starts -->
            <div class="col-md-12 distribution animated token-distribution" data-animation="fadeInUp" data-animation-delay="700">
                <div class="roadmap-text roadmap-text-pc">
                    <div class="col-md-6 roadmap-left">
                        <div class="phase phase1 animated"  data-animation="fadeInUp" data-animation-delay="2100">

                            <div class="arrow-right arrow1">
                                <div class="arrow-line"></div>
                                <div class="arrow"></div>
                                <div class="arrow-circle"></div>
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

                        <div class="phase-last"></div>
                    </div>

                    <div class="col-md-6 roadmap-right">
                        <div class="phase phase0 animated"  data-animation="fadeInUp" data-animation-delay="1400">
                            <div class="arrow-left arrow0">
                                <div class="arrow-circle"></div>
                                <div class="arrow"></div>
                            </div>


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
            <div class="col-md-12 center">
                The roadmap will be regularly updated, please refer to our official website for future updates.
            </div>

        </div>
    </div>
</section>

<section id="section-Partners" class="services-wrap section" style="background: #000000">
    <div class="container pack">
        <div class="row">
            <div class="subcontent">
                <div class="col-md-12 section-title">
                    <h4 data-animation="fadeInUp" data-animation-delay="700">Partners and Advisors</h4>
                </div>
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
                </div>
            </div>
            <!-- Single Service Ends -->
        </div>
    </div>
</section>

<section id="section-Media" class="services-wrap section" style="background: #000;" >
    <div class="container pack">
        <div class="row">
            <div class="col-md-12 section-title">
                <h4 >Media</h4>
            </div>
            <div>
                <a href="https://cointelegraph.com/press-releases/brahma-os-is-the-decentralized-value-operating-system-based-on-revolutionary-blockchain-technology" target="_blank" class="media-img"><img src="/images/site2/media/Group 3.png"  alt=""></a>
                <a href="http://bitcoinist.com/brahma-os-decentralized-value-operating-system-based-revolutionary-blockchain-technology/" target="_blank" class="media-img"><img src="/images/site2/media/Group 4.png"   alt=""></a>
                <a href="http://allcoinsnews.com/2018/02/22/brahma-os-decentralized-value-operating-system-based-on-revolutionary-blockchain-tech/"  target="_blank" class="media-img"><img src="/images/site2/media/Group 5.png"   alt=""></a>
                <a href="http://www.jinse.com/blockchain/152090.html" target="_blank" class="media-img"><img src="/images/site2/media/Group 6.png"  alt=""></a>
                <a href="https://www.newsbtc.com/press-releases/brahma-os-decentralized-value-operating-system-based-revolutionary-blockchain-technology/" target="_blank" class="media-img"><img src="/images/site2/media/Group 7.png"   alt=""></a>
                <a href="https://www.ccn.com/brahma-os-decentralized-value-operating-system-based-revolutionary-blockchain-technology/" target="_blank" class="media-img"><img src="/images/site2/media/Group 8.png"   alt=""></a>
                <a href="https://blueskyinvestor.com/brahma-os-offers-decentralized-value-operating-system-revolutionary-blockchain-technology/" target="_blank" class="media-img"><img src="/images/site2/media/Group 9.png"   alt=""></a>
                <a href="https://themerkle.com/brahma-os-is-the-decentralized-value-operating-system-based-on-revolutionary-blockchain-technology/" target="_blank" class="media-img"><img src="/images/site2/media/Group 10.png"   alt=""></a>
                <a href="http://www.coinnewsasia.com/brahma-os-is-the-decentralized-value-operating-system-based-on-blockchain-tech/" target="_blank" class="media-img"><img src="/images/site2/media/Group 11.png"   alt=""></a>
                <a href="https://coinjournal.net/pr-release/brahma-os-decentralized-value-operating-system-based-revolutionary-blockchain-technology/" target="_blank" class="media-img"><img src="/images/site2/media/Group 12.png"   alt=""></a>
                <a href="https://news.bitcoin.com/pr-brahma-os-is-the-decentralized-value-operating-system-based-on-revolutionary-blockchain-technology/" target="_blank" class="media-img"><img src="/images/site2/media/Group 13.png"   alt=""></a>
            </div>
        </div>
    </div>
</section>

<section id="section-contact" class="services-wrap section" style="background: #000">
    <div class="container pack" >
        <div class="row">
            <div class="section-title">
                <h4>Contact-Project BRAHMA</h4>
            </div>

            <div style="margin-bottom: 40px">
                <span>
                    Investors should be cautious to evadeinvestment risks
                </span>
            </div>

            <div class="center section-title" style="margin-bottom: 50px;">
                <h5 style="font-size: 20px">Bramha Official Designated Contact</h5>
            </div>
            <div class="center">
                    <div class="contact-message" >
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
    </div>
</section>

<!-- Modal -->
<div class="sign-in modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document" style="margin-top: 200px;">
        <div class="modal-content">
            <div class="logo"></div>
            <div class="modal-header center header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top: -50px"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title title" id="myModalLabel">SIGN IN</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="email"  name="email" class="form-control" id="email" placeholder="Email address">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" id="remember"> Remember me
                        </label>
                    </div>
                    <button type="button" id="submmit" class="btn btn-default btn-lg btn-block submit" style="border-radius: 20px;">SIGN IN</button>
                    <div class="has-error center">
                        <label class="control-label" for="inputError1" id="error-message"></label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection