@extends('site2.base')

@section('content')
<a href="" id="top"></a>

<section id="header" class="header-section section">
    <div class="sticky-bar-wrap">
        <div class="sticky-section">
            <div id="topbar-hold" class="nav-hold container">
                <nav class="navbar" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">
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
                            <li class="current"><a href="#section-os">OS Demand</a></li>
                            <li><a href="#section-members">Members</a></li>
                            <li><a href="#section-distribution">Token Distribution</a></li>
                            <li><a href="#section-roadmap">Roadmap</a></li>
                            <li><a href="#section-partners">Partners</a></li>
                            <li><a href="#section-media">Media</a></li>
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
            <video id="brahmaos-video" class="video-js">
                <source
                        src="/storage/video/brahmaos.m3u8"
                        type="application/x-mpegURL">
            </video>
        </div>

        <div class="section-overlay video-overlay"></div>
        <div class="container home" id="home" >
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

<section id="section-os" style="background: #1b1c25">
    <div class="container">
        <div class="row center">
            <div class="left section-title">
                <h4>Decentralized OS Demand</h4>
            </div>

            <div class="os-wrap center wrapper" id="selectable">

                <div class="os-demand os-demand-select animated"  data-animation="bounceInLeft" data-animation-delay="500">

                    <img src="/images/site2/os/DataPrivacy-select.png" alt="">

                    <div  class="os-title">
                        <p>Data Privacy</p>
                    </div>
                </div>

                <div class="os-demand animated"  data-animation="bounceInLeft" data-animation-delay="700">

                    <img src="/images/site2/os/DecentralizedStorage.png" alt="">

                    <div  class="os-title">
                        <p>Decentralized <br> Storage</p>
                    </div>
                </div>

                <div class="os-demand animated"  data-animation="bounceInLeft" data-animation-delay="900">

                    <img src="/images/site2/os/AccessibleNetworkCommunication.png" alt="">

                    <div  class="os-title">
                        <p>Accessible Network <br> Communication</p>
                    </div>
                </div>

                <div class="os-demand animated"  data-animation="bounceInLeft" data-animation-delay="1100">

                    <img src="/images/site2/os/AutonomousEconomicSystem.png" alt="">

                    <div  class="os-title">
                        <p>Autonomous Economic <br> System</p>
                    </div>
                </div>

                <div class="os-demand animated"  data-animation="bounceInLeft" data-animation-delay="1200">

                    <img src="/images/site2/os/ManagementOfCryptographicAssets.png" alt="">

                    <div  class="os-title">
                        <p>Management Of <br>Cryptographic Assets</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="section-members" class="services-wrap section" style="background: #1b1c25">
    <div class="container">
        <!--  members  --->
        <div class="col-md-12  section-title">
            <h4>Members</h4>
        </div>

        <div class="col-md-12 center members wrapper">

                <div id="bx-pager" class="members-photos col-md-6 col-sm-12 animated" data-animation="bounceInLeft" data-animation-delay="1100">

                    <div class="left">
                        <p class="member-thum-desc">They are an import part of the team</p>
                    </div>

                    <div class="col-md-12 member-thum">
                        <a data-slide-index="0" href="" class="photo-hold">
                            <img src="/images/site2/members/Bella Liu.png" class="photo-bg" alt="" /> <!-- Client photo 1 -->
                            <p class="member-name-small">
                                Bella liu
                            </p>
                            <p class="member-position-small">
                                co-founder
                            </p>
                        </a>
                        <a data-slide-index="1" href="" class="photo-hold">
                            <img src="/images/site2/members/Lorna Chen.png" class="photo-bg" alt="" /> <!-- Client photo 1 -->
                            <p class="member-name-small">
                                Lorna Chen
                            </p>
                            <p class="member-position-small">
                                CEO
                            </p>
                        </a>
                        <a data-slide-index="2" href="" class="photo-hold">
                            <img src="/images/site2/members/Steven Hu.png" class="photo-bg" alt="" /> <!-- Client photo 1 -->
                            <p class="member-name-small">
                                Steven Hu
                            </p>
                            <p class="member-position-small">
                                CTO
                            </p>
                        </a>
                        <a data-slide-index="3" href="" class="photo-hold">
                            <img src="/images/site2/members/Marinos Tsokas.png" class="photo-bg" alt="" /> <!-- Client photo 1 -->
                            <p class="member-name-small">
                                Marinos Tsokas
                            </p>
                            <p class="member-position-small">
                                CMO
                            </p>
                        </a>
                        <a data-slide-index="4" href="" class="photo-hold">
                            <img src="/images/site2/members/Elaine Shehu.png" class="photo-bg" alt="" /> <!-- Client photo 1 -->
                            <p class="member-name-small">
                                Elaine Shehu
                            </p>
                            <p class="member-position-small">
                                Tech Advisor
                            </p>
                        </a>
                    </div>

                    <div class="col-md-12 member-thum">
                        <a data-slide-index="5" href="" class="photo-hold">
                            <img src="/images/site2/members/Liu Xingchu.png" class="photo-bg" alt="" /> <!-- Client photo 1 -->
                            <p class="member-name-small">
                                Elaine Shehu
                            </p>
                            <p class="member-position-small">
                                Tech Advisor
                            </p>
                        </a>
                        <a data-slide-index="6" href="" class="photo-hold">
                            <img src="/images/site2/members/Bella Liu.png" class="photo-bg" alt="" /> <!-- Client photo 1 -->
                            <p class="member-name-small">
                                Liu Xingchu
                            </p>
                            <p class="member-position-small">
                                Engineer Lead
                            </p>
                        </a>
                        <a data-slide-index="7" href="" class="photo-hold">
                            <img src="/images/site2/members/Bella Liu.png" class="photo-bg" alt="" /> <!-- Client photo 1 -->
                            <p class="member-name-small">
                                Bella liu
                            </p>
                            <p class="member-position-small">
                                co-founder
                            </p>
                        </a>
                        <a data-slide-index="8" href="" class="photo-hold">
                            <img src="/images/site2/members/Bella Liu.png" class="photo-bg" alt="" /> <!-- Client photo 1 -->
                            <p class="member-name-small">
                                Bella liu
                            </p>
                            <p class="member-position-small">
                                co-founder
                            </p>
                        </a>
                        <a data-slide-index="9" href="" class="photo-hold">
                            <img src="/images/site2/members/Bella Liu.png" class="photo-bg" alt="" /> <!-- Client photo 1 -->
                            <p class="member-name-small">
                                Bella liu
                            </p>
                            <p class="member-position-small">
                                co-founder
                            </p>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 animated" data-animation="bounceInRight" data-animation-delay="1100">
                    <div class="testimonial-slider">
                        <div class="testimonial center">

                            <div class="members-intro left">
                                <div class="">
                                    <div class="members-photo">
                                        <img src="/images/site2/members/Bella Liu.png" alt="">
                                    </div>
                                    <h4 class="member-name">
                                        Bella liu
                                    </h4>
                                    <h4 class="member-position">
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
                                        <img src="/images/site2/members/Lorna Chen.png" alt="">
                                    </div>
                                    <h4 class="member-name">
                                        Lorna Chen (Lin Mennie)
                                    </h4>
                                    <h4 class="member-position">
                                        CEO
                                    </h4>
                                    <p class="member-description">
                                        Ex-JP Morgan, Bank Of New York Mellon , Bank Of Tokyo Mitsubishi.
                                        Chartered Accountant In United Kingdom.
                                        Masters In Science In Edinburgh And EMBA In Cambridge University Judge Business School.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="members-intro left">
                                <div class="">
                                    <div class="members-photo">
                                        <img src="/images/site2/members/Steven Hu.png" alt="">
                                    </div>
                                    <h4 class="member-name">
                                        Steven Hu
                                    </h4>
                                    <h4 class="member-position">
                                        CTO
                                    </h4>
                                    <p class="member-description">
                                        10 Years Experiences In Architecture Design And R&D Management In The Telecommunication Industry And The Internet Industry.
                                        Leads R&D  Architecture Design Work In The Programmable Virtual Router Team
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="members-intro left">
                                <div class="">
                                    <div class="members-photo">
                                        <img src="/images/site2/members/Marinos Tsokas.png" alt="">
                                    </div>
                                    <h4 class="member-name">
                                        Marinos Tsokas
                                    </h4>
                                    <h4 class="member-position">
                                        CMO
                                    </h4>
                                    <p class="member-description">
                                        Ex-CMO Of Vodafone. Award-Winning Professional With Success
                                        Driving Customer Engagement Via The Production Of Analysis And Insight On Customers’ Behaviours And Trends.
                                        Holds A MBA With Cambridge Universiity.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="members-intro left">
                                <div class="">
                                    <div class="members-photo">
                                        <img src="/images/site2/members/Elaine Shehu.png" alt="">
                                    </div>
                                    <h4 class="member-name">
                                        Elaine Shehu
                                    </h4>
                                    <h4 class="member-position">
                                        Tech Advisor
                                    </h4>
                                    <p class="member-description">
                                        Ex-Head Of IT Strategy On Blockchain Related Projects With Deutsche Bank.
                                        More Than 12 Years In Developing Cloud-Based Platforms.
                                        Masters Degree In Computer Science In University Of College London.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="members-intro left">
                                <div class="">
                                    <div class="members-photo">
                                        <img src="/images/site2/members/Liu Xingchu.png" alt="">
                                    </div>
                                    <h4 class="member-name">
                                        Liu Xingchu
                                    </h4>
                                    <h4 class="member-position">
                                        Engineer Lead
                                    </h4>
                                    <p class="member-description">
                                        Expert In Data Analytics, Business Intelligence And Artificial Intelligence.
                                        More Than 12 Years Of Related Experience In Retail, Ecommerce, Manufacturing, Wholesale Fields.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="members-intro left">
                                <div class="">
                                    <div class="members-photo">
                                        <img src="/images/site2/members/Liu Xingchu.png" alt="">
                                    </div>
                                    <h4 class="member-name">
                                        Srikanth Bodla
                                    </h4>
                                    <h4 class="member-position">
                                        DNA Graph Manager
                                    </h4>
                                    <p class="member-description">
                                        Srikanth Bodla Is A Solutions Architect/Project Lead With A Strong Background In Business Intelligence & Data Warehousing,
                                        A Proven Track Record For Successfully Delivering End To End Solutions Addressing Problems & Requirements And
                                        A Passion For Emerging Technologies Qlikview, Big Data, SAP Hana, SAP BI/BW Technologies And The Apache Hadoop Ecosystem
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="members-intro left">
                                <div class="">
                                    <div class="members-photo">
                                        <img src="/images/site2/members/Liu Xingchu.png" alt="">
                                    </div>
                                    <h4 class="member-name">
                                        Trevor Smith
                                    </h4>
                                    <h4 class="member-position">
                                        OS Architect
                                    </h4>
                                    <p class="member-description">
                                        Trevor Smith Has Achieved PHD Degree In University Of Edinburgh.
                                        He Is One Of The Few Early IOS Developers Worked On Salesforce And Oracle.
                                        He Also Worked On Early Prototypes Of IOS And Android App For Start-Up And
                                        Successfully Leading The Product Launch And Acquisition.
                                        Trevor Is Also Specialized On Website Design And Computer Algorithm And Is Currently
                                        Working Decentralized Blockchain Technology Research.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="members-intro left">
                                <div class="">
                                    <div class="members-photo">
                                        <img src="/images/site2/members/Liu Xingchu.png" alt="">
                                    </div>
                                    <h4 class="member-name">
                                        Shu Collins
                                    </h4>
                                    <h4 class="member-position">
                                        Economic Model
                                    </h4>
                                    <p class="member-description">
                                        Shu Colins Achieved Her Master Of Science In Statistics In University Of Oxford,
                                        UK. She Has Over 10 Years Of Work Experience On Data Science, Machine Learning And AI In Automotive,
                                        Gaming, Technology, Entertainment And Digital Insurance Industries.
                                        She Had Lead Data Science Projects In Multiple Fortune 500 Companies Or IPO Companies Like British Gas,
                                        Royal Bank Of Scotland, And Specialized In Blockchain Application And Cryptocurrency.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial">
                            <div class="members-intro left">
                                <div class="">
                                    <div class="members-photo">
                                        <img src="/images/site2/members/Liu Xingchu.png" alt="">
                                    </div>
                                    <h4 class="member-name">
                                        KJ
                                    </h4>
                                    <h4 class="member-position">
                                        Researcher
                                    </h4>
                                    <p class="member-description">
                                        12 Years’ Experiences In Architecture Design In Distributed Database System And P2P Network.
                                        Research Directions Including Blockchain Capacity,
                                        Data Shard And Ecosystem. He Has Got Strong Experience In Both Technology And Research.
                                    </p>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
        </div>
    </div>
</section>

<section id="section-team" style="background: #1b1c25">

    <div class="container">
        <div class="row">
            <!--  members  --->
            <div class="col-md-12  section-title">
                <h4 data-animation="fadeInUp" data-animation-delay="700">Team</h4>
            </div>
            <div class="wrapper col-xs-12 col-md-12">
                <div class="col-md-12 team-item">
                    <div class="col-xs-12 col-md-6">
                        <div class="team col-md-6 col-xs-6  animated" data-animation="fadeInUp" data-animation-delay="700">
                            <div class="team-desc">
                                <h4 class="team-name center">
                                    Ocean Lu
                                </h4>
                                <p class="Team">
                                    In charge of user persona team, machine learning, deep learning and algorithm research.
                                    Encapsulate user tags.
                                </p>
                            </div>
                        </div>
                        <div class="team col-md-6 col-xs-6  animated" data-animation="fadeInUp" data-animation-delay="700">
                            <div class="team-desc">
                                <h4 class="team-name center">
                                    Martin Wang
                                </h4>
                                <p class="Team">
                                    In charge of distributed protocol optimization, network layer protocol docking OS.
                                    Secure package storage content
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="team col-md-6 col-xs-6  animated" data-animation="fadeInUp" data-animation-delay="700">
                            <div class="team-desc">
                                <h4 class="team-name center">
                                    Kevin Lee
                                </h4>
                                <p class="Team">
                                    In charge of the realization of non-network technology, reform non-network protocol, optimize performance, embed OS
                                </p>
                            </div>
                        </div>
                        <div class="team col-md-6 col-xs-6  animated" data-animation="fadeInUp" data-animation-delay="700">
                            <div class="team-desc">
                                <h4 class="team-name center">
                                    KJ
                                </h4>
                                <p class="justify" style="text-align: center">
                                    Research mainly on optimization of chain structure, based on the chain algorithm design and implementation.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 team-item">
                    <div class="col-xs-12 col-md-6">
                        <div class="team col-md-6 col-xs-6  animated" data-animation="fadeInUp" data-animation-delay="700">
                            <div class="team-desc">
                                <h4 class="team-name center">
                                    Steven
                                </h4>
                                <p class="Team">
                                    Lead a team of 10 people, in charge of OS's underlying system implementation, deconstruct layers.
                                    <br>
                                    Overall R & D embed all layers of the OS agreement.
                                </p>
                            </div>
                        </div>
                        <div class="team col-md-6 col-xs-6  animated" data-animation="fadeInUp" data-animation-delay="700">
                            <div class="team-desc">
                                <h4 class="team-name center">
                                    Han
                                </h4>
                                <p class="Team">
                                    In charge of Dapp architecture design and development, providing overall API for upper layer access.
                                    System Design and Implementation.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="team col-md-6 col-xs-6  animated" data-animation="fadeInUp" data-animation-delay="700">
                            <div class="team-desc">
                                <h4 class="team-name center">
                                    Sheng
                                </h4>
                                <p class="Team">
                                    In charge of security attack and security reinforcement.
                                    Design architecture and develop transport layer security in the protocol layer for the overall OS
                                </p>
                            </div>
                        </div>
                        <div class="team col-md-6 col-xs-6  animated" data-animation="fadeInUp" data-animation-delay="700">
                            <div class="team-desc">
                                <h4 class="team-name center">
                                    David Silva
                                </h4>
                                <p class="Team">
                                    In charge of the functional design of the OS product and the development of the interface protocol.
                                    Project priority adjustment.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 team-item">
                    <div class="col-xs-12 col-md-6">
                        <div class="team col-md-6 col-xs-6  animated" data-animation="fadeInUp" data-animation-delay="700">
                            <div class="team-desc">
                                <h4 class="team-name center">
                                    JAsmall
                                </h4>
                                <p class="Team">
                                    OS interactive designer expert.
                                    Provide solutions for mainframe human-computer interaction
                                </p>
                            </div>
                        </div>
                        <div class="team col-md-6 col-xs-6  animated" data-animation="fadeInUp" data-animation-delay="700">
                            <div class="team-desc">
                                <h4 class="team-name center">
                                    Ouy
                                </h4>
                                <p class="Team">
                                    In charge of payment system design and development.
                                    Docking the various payment protocols on the chain safely and quickly.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="team col-md-6 col-xs-6  animated" data-animation="fadeInUp" data-animation-delay="700">
                            <div class="team-desc center">
                                <h4 class="team-name center">
                                    Kaiko
                                </h4>
                                <p class="service-description">
                                    In charge of visual effects, UI designer.
                                </p>
                            </div>
                        </div>
                        <div class="team col-md-6 col-xs-6  animated" data-animation="fadeInUp" data-animation-delay="700">
                            <div class="team-desc center">
                                <h4 class="team-name center">
                                    others
                                </h4>
                                <p class="service-description">
                                    Overseas team profile to be updated.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section id="section-distribution" style="background: #1b1c25">
    <div class="container">
        <div class="col-md-12 section-title" >
            <h4>Token Distribution</h4>
        </div>
        <div style="clear: both"></div>
        <div class="wrapper">

            <div class="distribution-title center">
                <h3 class="total-distribution">
                    3,000,000,000
                </h3>
                <p>
                    Total Brahma OS Tokens
                </p>
            </div>

            <div class="distribution-pc center">

                <div class="distribution-item animated token-sale" data-animation="bounceInLeft" data-animation-delay="1100">

                    <div class="left">
                        <div class="distribution-l">
                            <div class="distribution-circle"></div>
                            <div class="distribution-line"></div>
                        </div>
                        <span class="distribution-percent">40%</span>
                        <span class="distribution-percent-desc">Token Sale</span>
                    </div>
                    <p class="distribution-desc">Token crowdsale, to bt distributed at the end of the ICO no lock-up period</p>
                </div>

                <div class="distribution-item animated business-partnerships" data-animation="bounceInLeft" data-animation-delay="1100">
                    <div class="left">
                        <div class="distribution-l">
                            <div class="distribution-circle"></div>
                            <div class="distribution-line"></div>
                        </div>
                        <span class="distribution-percent">14%</span>
                        <span class="distribution-percent-desc">Business Partnerships</span>
                    </div>
                    <p class="distribution-desc">Form strategic relationships with partners in both traditional industry
                    and blockchain space, to be distributed over the course of the partnership of according to specific terms of contract</p>
                </div>

                <div class="distribution-item animated foundation" data-animation="bounceInLeft" data-animation-delay="1100">
                     <div class="left">
                        <div class="distribution-l">
                            <div class="distribution-circle"></div>
                            <div class="distribution-line"></div>
                        </div>
                        <span class="distribution-percent">10%</span>
                        <span class="distribution-percent-desc">Foundation</span>
                    </div>
                    <p class="distribution-desc">Foundation to keep a 10% share for overall community building and events</p>
                </div>

                <img src="/images/site2/tokenDistribution/tokendistribution.png" class="animated" data-animation="tada" data-animation-delay="900" alt="">

                <div class="distribution-item animated developer-community" data-animation="bounceInUp" data-animation-delay="1100">
                    <div class="left">
                        <div class="distribution-l">
                            <div class="distribution-circle"></div>
                            <div class="distribution-line"></div>
                        </div>
                        <span class="distribution-percent">8%</span>
                        <span class="distribution-percent-desc">Developer Community</span>
                    </div>
                    <p class="distribution-desc">Build a network of developers and D-App development
                        community to be distributed for milestones reached and D-Apps build</p>
                </div>

                <div class="distribution-item animated early-supporters" data-animation="bounceInRight" data-animation-delay="1100">
                    <div class="left">
                        <div class="distribution-l">
                            <div class="distribution-line"></div>
                            <div class="distribution-circle"></div>
                        </div>
                        <span class="distribution-percent">8%</span>
                        <span class="distribution-percent-desc">Early Supporters</span></div>
                        <p class="distribution-desc">Reward for supporters of the project with various distribution times and terms</p>
                </div>

                <div class="distribution-item animated team-percent" data-animation="bounceInRight" data-animation-delay="1100">
                    <div class="left">
                        <div class="distribution-l">
                            <div class="distribution-line"></div>
                            <div class="distribution-circle"></div>
                        </div>
                        <span class="distribution-percent">20%</span>
                        <span class="percent-desc">Team</span>
                    </div>
                    <p class="distribution-desc">Incentive for the founding team of the project to be distributed over 2 years</p>
                </div>

            </div>

            <div class="distribution-phone center">
                <img src="/images/site2/tokenDistribution/tokendistributionPhone.png" alt="">
            </div>
        </div>
    </div>
</section>

<section id="section-roadmap" >
    <div class="container">

        <div class="col-md-12 section-title">
            <h4>Roadmap</h4>
        </div>
        <div style="clear: both"></div>

        <div class="wrapper roadmap">

            <div class="road road2 animated" data-animation="bounceInUp" data-animation-delay="1100">
                <div class="road-timer center">
                    2018
                </div>

                <div class="road-circle">
                    <img src="/images/site2/roadmap/road2.png"  alt="">
                </div>
                <div class="road-desc">
                    <div class="road-title">
                        Q2
                    </div>
                    <p>
                        To boot and to complete the first setup of deeply customized Brahma OS based on Andriod
                    </p>
                </div>
            </div>

            <div class="road-line animated" data-animation="bounceInUp" data-animation-delay="1500">
            </div>

            <div class="road road3 animated" data-animation="bounceInUp" data-animation-delay="1700">
                <div class="road-desc">
                    <div class="road-title">
                        Q3
                    </div>
                    <p>
                        To boot and to complete the first setup of deeply customized Brahma OS based on Andriod
                    </p>
                </div>
                <div class="road-circle">
                    <img src="/images/site2/roadmap/road3.png" alt="">
                </div>
            </div>

            <div class="road-line road-line3-4 animated" data-animation="bounceInUp" data-animation-delay="1900">
            </div>

            <div class="road road4 animated" data-animation="bounceInUp" data-animation-delay="2100">
                <div class="road-circle">
                    <img src="/images/site2/roadmap/road4.png" alt="">
                </div>
                <div class="road-desc">
                    <div class="road-title">
                        Q2
                    </div>
                    <p>
                        To boot and to complete the first setup of deeply customized Brahma OS based on Andriod
                    </p>
                </div>
            </div>

            <div class="road-line road-line4-5 animated" data-animation="bounceInUp" data-animation-delay="2200">
            </div>

        </div>
        
        <div class="wrapper roadmap-phone">
            <img src="/images/site2/roadmap/roadmapPhone.png" alt="">
        </div>
        
    </div>
</section>

<section id="section-partners" style="background: #1b1c25">
    <div class="container">
        <div class="partners">
            <div class="col-md-12 section-title">
                <h4>Partners and Advisors</h4>
            </div>
            <div class="partners-item center wrapper">
                <img src="/images/site2/partners/1.png" alt="">
                <img src="/images/site2/partners/2.png"   alt="">
                <img src="/images/site2/partners/3.png" alt="">
                <a href="https://jun.capital/" target="_blank" class="animated"><img style="cursor: pointer" src="/images/site2/partners/4.png" alt=""></a>
                <a href="https://www.abcf.london/" target="_blank" class="animated"><img src="/images/site2/partners/5.png" alt=""></a>
                <a href="http://www.vipidc.com/" target="_blank" class="animated"><img src="/images/site2/partners/6.png"  alt=""></a>
                <a href="http://bitfwd.com/" target="_blank" class="animated"><img src="/images/site2/partners/7.png" alt=""></a>
                <img src="/images/site2/partners/8.png" alt="">
                <a href="http://www.xgenomics.org/" target="_blank" class="animated"><img src="/images/site2/partners/9.png" alt=""></a>
                <a href="https://www.filecoinasia.com" target="_blank" class="animated"><img src="/images/site2/partners/10.png" alt=""></a>
                <a href="http://www.jinse.com" target="_blank" class="animated"><img src="/images/site2/partners/1.png" alt=""></a>
                <a href="http://www.huawei.com/" target="_blank" class="animated"><img src="/images/site2/partners/12.png" alt=""></a>
            </div>
        </div>
    </div>
</section>

<section id="section-media" style="background: #1b1c25" >
    <div class="container">
        <div class="col-md-12 section-title">
            <h4 >Media</h4>
        </div>
        <div class="media-item wrapper center">
            <a href="https://cointelegraph.com/press-releases/brahma-os-is-the-decentralized-value-operating-system-based-on-revolutionary-blockchain-technology" target="_blank" class="media-img"><img src="/images/site2/media/1.png"  alt=""></a>
            <a href="http://bitcoinist.com/brahma-os-decentralized-value-operating-system-based-revolutionary-blockchain-technology/" target="_blank" class="media-img"><img src="/images/site2/media/2.png"   alt=""></a>
            <a href="http://allcoinsnews.com/2018/02/22/brahma-os-decentralized-value-operating-system-based-on-revolutionary-blockchain-tech/"  target="_blank" class="media-img"><img src="/images/site2/media/3.png"   alt=""></a>
            <a href="http://www.jinse.com/blockchain/152090.html" target="_blank" class="media-img"><img src="/images/site2/media/4.png"  alt=""></a>
            <a href="https://www.newsbtc.com/press-releases/brahma-os-decentralized-value-operating-system-based-revolutionary-blockchain-technology/" target="_blank" class="media-img"><img src="/images/site2/media/5.png"   alt=""></a>
            <a href="https://www.ccn.com/brahma-os-decentralized-value-operating-system-based-revolutionary-blockchain-technology/" target="_blank" class="media-img"><img src="/images/site2/media/6.png"   alt=""></a>
            <a href="https://blueskyinvestor.com/brahma-os-offers-decentralized-value-operating-system-revolutionary-blockchain-technology/" target="_blank" class="media-img"><img src="/images/site2/media/7.png"   alt=""></a>
            <a href="https://themerkle.com/brahma-os-is-the-decentralized-value-operating-system-based-on-revolutionary-blockchain-technology/" target="_blank" class="media-img"><img src="/images/site2/media/8.png"   alt=""></a>
            <a href="http://www.coinnewsasia.com/brahma-os-is-the-decentralized-value-operating-system-based-on-blockchain-tech/" target="_blank" class="media-img"><img src="/images/site2/media/9.png"   alt=""></a>
            <a href="https://coinjournal.net/pr-release/brahma-os-decentralized-value-operating-system-based-revolutionary-blockchain-technology/" target="_blank" class="media-img"><img src="/images/site2/media/10.png"   alt=""></a>
            <a href="https://news.bitcoin.com/pr-brahma-os-is-the-decentralized-value-operating-system-based-on-revolutionary-blockchain-technology/" target="_blank" class="media-img"><img src="/images/site2/media/11.png"   alt=""></a>
        </div>
    </div>
</section>

<section id="section-contact" style="background: #1b1c25">
    <div class="container" >
        <div class="row">
            <div class="section-title">
                <h4>Contact-Project Brahma</h4>
                <p style="font-size: 1vw">
                    Investors should be cautious to evadeinvestment risks
                </p>
            </div>
            <div class="center contact-title">
                <h5>Bramha Official Designated Contact</h5>
            </div>

            <div class="center contacts wrapper ">

                <div class="contact-info animated" data-animation="bounceInLeft" data-animation-delay="1100">
                    <div>
                        <img src="/images/site2/concats/Japan.png" alt="">
                    </div>
                    <p>
                        East Asia (Japan Area) Authorised Agent
                    </p>
                    <p>
                        Ryan kim : &nbsp; <span style="color: #f4f4f4; font-weight: 400">ryan0911@naver.com</span>
                    </p>
                </div>
                <div class="contact-info animated" data-animation="bounceIn" data-animation-delay="1100">
                    <div>
                        <img src="/images/site2/concats/Korea.png" alt="">
                    </div>
                    <p>
                        East Asia (South Korea Area) Authorised Agent
                    </p>
                    <p>Coinway Ventures (ICO BANK) : &nbsp; </p>
                    <p style="color: #f4f4f4; font-weight: 400">최제호 &nbsp; osbrahma2@gmail.com</p>
                </div>
                <div class="contact-info animated" data-animation="bounceInRight" data-animation-delay="1100">
                    <div>
                        <img src="/images/site2/concats/other.png" alt="">
                    </div>
                    <p>
                        Other Area
                    </p>
                    <p style="color: #f4f4f4; font-weight: 400">Lynn@brahmalabs.org</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection