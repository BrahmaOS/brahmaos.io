@extends('site2.base')

@section('content')
<a href="" id="top"></a>

<div id="header" class="header-section">
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
                            <img src="/logo-512-2.png" alt="">
                        </a>
                    </div>

                    <div class="collapse navbar-collapse navbar-responsive-collapse n-nav">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#section-pricing">系统需求</a></li>
                            <li><a href="#section-members">成员</a></li>
                            <li><a href="#section-distribution">代币分配</a></li>
                            <li><a href="#section-roadmap">路线图</a></li>
                            <li><a href="#section-Partners">合作方</a></li>
                            <li><a href="#section-Media">媒体</a></li>
                            <li><a href="#section-contact">联系方式</a></li>
                            <li><a href="https://medium.com/brahmalabs" target="_blank">博客</a></li>
                            <li><a href="/">EN&nbsp;&nbsp;<span style="font-size: 14px; height: 14px; overflow: hidden; display: inline-block;">|</span>&nbsp;&nbsp;<span style="color: #ccc">简体中文</span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>

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
                        Brahma OS 是一种承载去中心化网络的操作系统，它通过解构已有服务并使用各类去中心化服务和组件得以实现，确保用户可以安全、无障碍的使用区块链之上的服务和应用。
                    </p>

                    <div class="home-buttons" style="margin-bottom: 20px">
                        <a href="/zh/abstract/1.html" style="margin:5px 20px; min-width: 220px" target="_blank" class="fancy-button WhitePaper button-line button-white vertical">在线白皮书</a>
                        <a href="/BrahmaOS_Whitepaper_CH_0425.pdf" style="margin:5px 20px; min-width: 220px" target="_blank" class="fancy-button WhitePaper button-line button-white vertical">下载白皮书</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="section-pricing" class="pricing-wrap">
    <div class="container pricing OS">
        <div class="row center">
            <div class="center section-title" style="margin-bottom: 70px">
                <h3 style="margin-bottom: 0px">去中心化系统的需求</h3>
            </div>

            <div class="center" style="display: flex; align-content: center;justify-content: center; flex-wrap: wrap">

            <!-- Single Price Starts -->
            <div class="single-pricing-wrap center animated" data-animation="bounceInLeft" data-animation-delay="500">
                <div class="single-pricing">
                    <img src="/images/site2/data-privacy.png" alt="">

                    <div class="sign-up">
                        <div  class="single-title">
                            <p>数据隐私</p>
                            <p>&nbsp;</p>
                        </div>
                        <a href="/zh/abstract/1.html#DataPrivacy" target="_blank" class="fancy-button button-line btn-col zoom">
                            详细信息
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
                            <p>分布式存储</p>
                            <p>&nbsp;</p>
                        </div>
                        <a href="/zh/abstract/1.html#DecentralizedStorage"  target="_blank" class="fancy-button button-line btn-col zoom">
                            详细信息
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
                            <p>无障碍网络通信</p>
                            <p>&nbsp;</p>
                        </div>
                        <a href="/zh/abstract/1.html#AccessibleNetworkCommunication"  target="_blank" class="fancy-button button-line btn-col zoom">
                            详细信息
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
                            <p>自治的经济系统</p>
                            <p>&nbsp;</p>
                        </div>
                        <a href="/zh/abstract/1.html#AutonomousEconomicSystem" target="_blank" class="fancy-button button-line btn-col zoom">
                            详细信息
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
                            <p>加密资产管理</p>
                            <p>&nbsp;</p>
                        </div>
                        <a href="/zh/abstract/1.html#ManagementofCryptographicAssets" target="_blank" class="fancy-button button-line btn-col zoom">
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

<section id="section-members" class="services-wrap">
    <div class="container all-members">
        <div class="row" style="margin-bottom: 50px">
            <!--  members  --->
            <div class="col-md-12 center section-title">
                <h3 data-animation="fadeInUp" data-animation-delay="700" style="margin-top: 70px">成员信息</h3>
            </div>
            <div class="members">

                <div class="col-md-12">
                    <div class="col-md-6 service animated item" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc members-details">
                            <div class="detail">
                                <div class="members-photo"><img src="/images/site2/members/Bella Liu.png" alt=""></div>
                                <h4 class="service-title member-name">
                                    Bella liu
                                </h4>
                                <h4 class="member-position" style="margin-top: -10px">
                                    联合创始人
                                </h4>
                                <p class="service-description justify">
                                    12年互联网经验，6次创业经验，杰出的产品经济设计能力，
                                    曾在顶尖互联网公司担任要职，近几年在国际项目中具有丰富的资产投资运营经验。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 service animated item" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc members-details">
                            <div class="detail">
                                <div class="members-photo"><img src="/images/site2/members/Lin Mennie.png" alt=""></div>
                                <h4 class="service-title member-name">
                                    Lorna Chen (Lin Mennie)
                                </h4>
                                <h4 class="member-position" style="margin-top: -10px">
                                    CEO
                                </h4>
                                <p class="service-description justify">
                                    曾就职于摩根、纽约梅隆银行、东京三菱银行，英国特许会计师，
                                    爱丁堡科学硕士和剑桥大学法学商学院EMBA。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-6 service animated item" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc  members-details">
                            <div class="detail">
                                <div class="members-photo"><img src="/images/site2/members/Steven Hu.png" alt=""></div>
                                <h4 class="service-title member-name">
                                    Steven Hu
                                </h4>
                                <h4 class="member-position" style="margin-top: -10px">
                                    CTO
                                </h4>
                                <p class="service-description justify">
                                    具有10年以上电信及互联网行业架构设计与研发管理经验，
                                    曾主持过可编程虚拟化路由器团队的架构设计工作。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 service animated item" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc  members-details">
                            <div class="detail">
                                <div class="members-photo"><img src="/images/site2/members/Marinos Tsokas.png" alt=""></div>
                                <h4 class="service-title member-name">
                                    Marinos Tsokas
                                </h4>
                                <h4 class="member-position" style="margin-top: -10px">
                                    CMO
                                </h4>
                                <p class="service-description justify">
                                    Vodafone项目前CMO，营销和商业开发负责人，
                                    成功推动项目改进并提高客户的参与度。剑桥大学MBA。
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="col-md-6 service animated item" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc  members-details">
                            <div class="detail">
                                <div class="members-photo"><img src="/images/site2/members/Elaine Shehu.png" alt=""></div>
                                <h4 class="service-title member-name">
                                    Elaine Shehu
                                </h4>
                                <h4 class="member-position" style="margin-top: -10px">
                                    技术顾问
                                </h4>
                                <p class="service-description justify">
                                    德意志银行区块链项目IT战略前负责人，
                                    12年的云平台开发经验，伦敦大学计算机科学硕士学位。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 service animated item" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc  members-details">
                            <div class="detail">
                                <div class="members-photo"><img src="/images/site2/members/Liu Xingchu.png" alt=""></div>
                                <h4 class="service-title member-name">
                                    Liu Xingchu
                                </h4>
                                <h4 class="member-position" style="margin-top: -10px">
                                    工程师主管
                                </h4>
                                <p class="service-description justify">
                                    在数据分析、商业智能、人工智能领域具有深厚的专业知识。在零售、电子商务、制造业、批发等行业中拥有超过12年的相关经验。
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12">

                    <div class="col-md-6 service animated item" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc  members-details">
                            <div class="detail">
                                <div class="members-photo"></div>
                                <h4 class="service-title member-name">
                                    Trevor Smith
                                </h4>
                                <h4 class="member-position" style="margin-top: -10px">
                                    OS架构师
                                </h4>
                                <p class="service-description justify">
                                    爱丁堡大学博士学位。
                                    Salesforce和Oracle的早期iOS开发者之一。
                                    他还从事IOS和Android应用的早期原型，并促进产品的推出和运营，
                                    同时擅长web原型设计和计算机算法。目前正从事区块链研究工作。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 service animated item" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc  members-details">
                            <div class="detail">
                                <div class="members-photo"></div>
                                <h4 class="service-title member-name">
                                    Srikanth Bodla
                                </h4>
                                <h4 class="member-position" style="margin-top: -10px">
                                    DNA图像主管
                                </h4>
                                <p class="service-description justify">
                                    拥有强大的商业智能和数据仓库背景的解决方案架构师/项目负责人，多次成功交付端到端的问题和需求的解决方案
                                    对Qlikview, 大数据, SAP Hana, SAP BI/BW技术和Apache Hadoop生态系统等新兴技术充满热情。
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-12">

                    <div class="col-md-6 service animated item" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc  members-details">
                            <div class="detail">
                                <div class="members-photo"></div>
                                <h4 class="service-title member-name">
                                    Shu Collins
                                </h4>
                                <h4 class="member-position" style="margin-top: -10px">
                                    经济模式
                                </h4>
                                <p class="service-description justify">
                                    牛津大学统计学硕士学位。在汽车、游戏、科技、娱乐和数字保险等行业拥有超过10年的
                                    数据分析、机器学习和人工智能经验。曾在多家500强公司或英国天然气公司、苏格兰皇家银行
                                    等IPO公司领导过数据分析项目。擅长区块链应用和加密货币。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 service animated item" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc  members-details">
                            <div class="detail">
                                <div class="members-photo"></div>
                                <h4 class="service-title member-name">
                                    KJ
                                </h4>
                                <h4 class="member-position" style="margin-top: -10px">
                                    研究员
                                </h4>
                                <p class="service-description justify">
                                    在分布式数据库系统和P2P网络架构设计方向有着长达12年的经验。
                                    研究方向包括区块链扩容, 数据分片以及区块链的生态系统。
                                    同时在技术和研究方面有丰富的经验。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div style="clear: both"></div>

            <div class="col-md-12">

                <div class="col-md-12 center section-title" data-animation="fadeInUp" data-animation-delay="700" style="margin-bottom: 40px; margin-top: 50px">
                    <h4 data-animation="fadeInUp" data-animation-delay="700">Team responsibility</h4>
                </div>

                <div class="col-md-12">
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc">
                            <h4 class="service-title color-scheme">
                        <span class="team-member">
                            Ocean Lu
                        </span>
                            </h4>
                            <p class="service-description Team" style="text-align: left">
                                负责用户画像、机器学习、深度学习以及算法研究。
                                同时封装用户标签。
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc">
                            <h4 class="service-title color-scheme">
                        <span class="team-member">
                            Martin Wang
                        </span>
                            </h4>
                            <p class="service-description Team" style="text-align: left">
                                负责优化分布式协议，网络层协议对接OS，对存储内容进行安全封装。
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc">
                            <h4 class="service-title color-scheme">
                        <span class="team-member">
                            Kevin Lee
                        </span>
                            </h4>
                            <p class="service-description Team" style="text-align: left">
                                负责无网络技术实现，改造无网络协议，优化性能。
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc">
                            <h4 class="service-title color-scheme">
                        <span class="team-member">
                            KJ
                        </span>
                            </h4>
                            <p class="service-description justify" style="text-align: center">
                                主要研究基于链式算法设计与实现的区块链结构优化。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc">
                            <h4 class="service-title color-scheme">
                        <span class="team-member">
                            Steven
                        </span>
                            </h4>
                            <p class="service-description Team" style="text-align: left">
                                领导10人团队，负责OS的各个协议层的解构、研发及整合。
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc">
                            <h4 class="service-title color-scheme">
                        <span class="team-member">
                            Han
                        </span>
                            </h4>
                            <p class="service-description Team">
                                负责Dapp架构设计与研发，为上层提供API。系统设计与实现。
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc">
                            <h4 class="service-title color-scheme">
                        <span class="team-member">
                            Sheng
                        </span>
                            </h4>
                            <p class="service-description Team" style="text-align: left">
                                负责防攻击及安全加固。为OS的协议层、传输层安全做架构设计和研发。
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc">
                            <h4 class="service-title color-scheme">
                        <span class="team-member">
                            David Silva
                        </span>
                            </h4>
                            <p class="service-description Team" style="text-align: left">
                                负责OS产品的功能设计和接口协议的开发。项目优先级调整。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc">
                            <h4 class="service-title color-scheme">
                        <span class="team-member">
                            JAsmall
                        </span>
                            </h4>
                            <p class="service-description Team" style="text-align: left">
                                OS交互设计专家。为主框架人机交互提供解决方案。
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc">
                            <h4 class="service-title color-scheme">
                        <span class="team-member">
                            Ouy
                        </span>
                            </h4>
                            <p class="service-description Team" style="text-align: left">
                                负责支付体系的设计与研发。安全快速的对接链上各支付协议。
                        </div>
                    </div>
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc center">
                            <h4 class="service-title color-scheme">
                                <span class="team-member">
                                    Kaiko
                                </span>
                            </h4>
                            <p class="service-description">
                                负责视觉效果，UI设计师。
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc center">
                            <h4 class="service-title color-scheme">
                                <span class="team-member">
                                    其他成员
                                </span>
                            </h4>
                            <p class="service-description">
                                海外成员简介有待更新。
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section-distribution" class="services-wrap">
    {{--<div class="container pricing">--}}
        <div class="row">

            <div class="col-md-12 center section-title" style="margin-top: 70px; margin-bottom: 0px; z-index: 5">
                <h3 style="color: #666" data-animation="fadeInUp" data-animation-delay="700">代币分配</h3>
            </div>

            <!-- Single Service Starts -->
            <div class="col-md-12  center distribution animated token-distribution" data-animation="fadeInLeft" data-animation-delay="700" style="">
                <img src="/images/site2/p-token-distribution.png" id="distribution" style="margin: 0 auto"  alt="">
            </div>
            <div class="col-md-12 center distribution animated " style="color:red;">
                <span class="button-line  vertical total-distribution" style="">
                    Brahma OS代币总量: 3,000,000,000
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
                <h3 class="roadmap-title" data-animation="fadeInUp" data-animation-delay="700">技术路线图</h3>
            </div>

            <!-- Single Service Starts -->
            <div class="col-md-12 distribution animated token-distribution" data-animation="fadeInUp" data-animation-delay="700">
                <div class="roadmap-text roadmap-text-pc">
                    <div class="col-md-6 roadmap-left">
                        <div class="phase phase1 animated"  data-animation="fadeInUp" data-animation-delay="2100">

                            <div class="arrow-right arrow1">
                                {{--<div class="arrow-line"></div>--}}
                                {{--<div class="arrow"></div>--}}
                                <div class="arrow-circle"></div>
                            </div>

                            <h1>Phase 1</h1>
                            <p class="roadmap-time">Q3-Q4 2018</p>
                            <h2>Brahma钱包</h2>
                            <p>
                                Brahma钱包为用户提供诸如钱包账号管理、资产管理和交易管理等功能。同时它也作为服务运行，
                                并向上层应用程序开放。
                            </p>

                            <h3>Backlog</h3>
                            <ul class="disc-list">
                                <li>钱包账号管理</li>
                                <li style="list-style: none">
                                    <ul class="disc-list">
                                        <li>创建钱包账号，支持密码和助记符；</li>
                                        <li>备份钱包账号;</li>
                                        <li>删除钱包账号;</li>
                                        <li>编辑钱包账号（仅限钱包账号名和密码）;</li>
                                        <li>导出私钥和Keystore;</li>
                                    </ul>
                                </li>
                                <li>资产管理</li>
                                <li style="list-style: none">
                                    <ul class="disc-list">
                                        <li>显示ETH和其他代币资产信息;</li>
                                        <li>添加和移除代币资产信息的展示;</li>
                                    </ul>
                                </li>
                                <li>交易管理</li>
                                <li style="list-style: none">
                                    <ul class="disc-list">
                                        <li>收据 (支持二维码展示);</li>
                                        <li>转账 (支持ETH转账和符合ERC20的代币转账);</li>
                                        <li>历史交易记录;</li>
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
                                {{--<div class="arrow"></div>--}}
                            </div>


                            <h1>Phase 0</h1>
                            <p class="roadmap-time">Q2-Q4 2018</p>
                            <h2>总体目标</h2>
                            <p>实现有Brahma钱包账号的去中心化的MVP版本，并适配部分Android用户。</p>
                            <h2>Brahma OS</h2>
                            <p>对于Phrase 1中的Brahma OS，我们的任务（以及我们的迭代节奏）如下：</p>
                            <ul class="disc-list">
                                <li>实现基于LES协议的以太坊区块链技术栈;</li>
                                <li>完成Android系统源代码（框架层）切割和局部模块重构;</li>
                                <li>优化指定模块的驱动适配;</li>
                            </ul>
                            <div class="roadmap-level-2">
                                <h3>Backlog</h3>
                                <ul class="disc-list">
                                    <li>基于Android系统源码裁剪或重建所有中心化的模块和框架组件</li>
                                    <li>Brahma区块链通过以太坊Relayer来支持以太坊区块链的LES协议，从而为上层应用使用以太坊区块链提供相关功能和服务, 其中包括:</li>
                                    <li style="list-style: none">
                                        <ul class="disc-list">
                                            <li>以太坊账号管理;</li>
                                            <li>区块链管理;</li>
                                            <li>转账和交易记录;</li>
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

                        <h1>Phase 0</h1>
                        <p class="roadmap-time">Q2-Q4 2018</p>
                        <h2>总体目标</h2>
                        <p>实现有Brahma钱包账号的去中心化的MVP版本，并适配部分Android用户。</p>
                        <h2>Brahma OS</h2>
                        <p>对于Phrase 1中的Brahma OS，我们的任务（以及我们的迭代节奏）如下：</p>
                        <ul class="disc-list">
                            <li>实现基于LES协议的以太坊区块链技术栈;</li>
                            <li>完成Android系统源代码（框架层）切割和局部模块重构;</li>
                            <li>优化指定模块的驱动适配;</li>
                        </ul>
                        <div class="roadmap-level-2">
                            <h3>Backlog</h3>
                            <ul class="disc-list">
                                <li>基于Android系统源码裁剪或重建所有中心化的模块和框架组件</li>
                                <li>Brahma区块链通过以太坊Relayer来支持以太坊区块链的LES协议，从而为上层应用使用以太坊区块链提供相关功能和服务, 其中包括:</li>
                                <li style="list-style: none">
                                    <ul class="disc-list">
                                        <li>以太坊账号管理;</li>
                                        <li>区块链管理;</li>
                                        <li>转账和交易记录;</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- mobile -->
                    <div class="phase phase1 animated"  data-animation="fadeInUp" data-animation-delay="1400">
                        <h1>Phase 1</h1>
                        <p class="roadmap-time">Q3-Q4 2018</p>
                        <h2>Brahma钱包</h2>
                        <p>
                            Brahma钱包为用户提供诸如钱包账号管理、资产管理和交易管理等功能。同时它也作为服务运行，
                            并向上层应用程序开放。
                        </p>

                        <h3>Backlog</h3>
                        <ul class="disc-list">
                            <li>钱包账号管理</li>
                            <li style="list-style: none">
                                <ul class="disc-list">
                                    <li>创建钱包账号，支持密码和助记符；</li>
                                    <li>备份钱包账号;</li>
                                    <li>删除钱包账号;</li>
                                    <li>编辑钱包账号（仅限钱包账号名和密码）;</li>
                                    <li>导出私钥和Keystore;</li>
                                </ul>
                            </li>
                            <li>资产管理</li>
                            <li style="list-style: none">
                                <ul class="disc-list">
                                    <li>显示ETH和其他代币资产信息;</li>
                                    <li>添加和移除代币资产信息的展示;</li>
                                </ul>
                            </li>
                            <li>交易管理</li>
                            <li style="list-style: none">
                                <ul class="disc-list">
                                    <ul class="disc-list">
                                        <li>收据 (支持二维码展示);</li>
                                        <li>转账 (支持ETH转账和符合ERC20的代币转账);</li>
                                        <li>历史交易记录;</li>
                                    </ul>
                                </ul>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="col-md-12 center token-distribution">
                技术路线图将定期更新，请参阅我们的官方网站以获取更新信息。
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
                    <h3 style="color: #ccc;text-transform: none" data-animation="fadeInUp" data-animation-delay="700">合作伙伴与顾问</h3>
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
                    <h3 style="color: #666;" data-animation="fadeInUp" data-animation-delay="700">媒体</h3>
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
                    <h3 style="color: #ccc;" data-animation="fadeInUp" data-animation-delay="700">BRAHMA联系方式</h3>
                </div>

                <div style="margin-bottom: 40px">
                    <span style="color: #7F8C8D">
                        请投资者注意规避风险
                    </span>
                </div>

                <div class="center section-title" style="margin-bottom: 50px;">
                    <h5 style="color: #7F8C8D; font-size: 20px">Brahma官方指定联系人</h5>
                </div>
                <div>
                        <div class="contact-message " >
                            <div>
                                亚洲地区
                            </div>
                            Karen LIU : &nbsp; Lynn@brahmalabs.org
                        </div>

                        <div class="contact-message">
                            <div>
                                东亚地区(韩国)授权代理
                            </div>
                            Coinway Ventures (ICO BANK) : &nbsp; 최제호 &nbsp; osbrahma2@gmail.com
                        </div>

                        <div class="contact-message">
                            <div>
                                东亚地区(日本)授权代理
                            </div>
                            Ryan kim : &nbsp; ryan0911@naver.com
                        </div>

                        <div class="contact-message">
                            <div>
                                其他地区
                            </div>
                            Lynn@brahmalabs.org
                        </div>
                </div>

            </div>
            <!-- Single Service Ends -->
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
<script>  $(function(){
		// 提交
		$('#submmit').click(function(){
			// email
			var email = $('#email').val();
			var password = $('#password').val();
			var remember = 0;
			if ($('#remember').prop('checked')){
				remember = 1;
			}


			var data = {email : email, password: password, remember: remember}

			$('#submmit').attr('disabled', 'disabled')
			if (email && password){

				$.ajax({
					url: "/sign-in",
					type: 'POST',
					xhrFields: {
						withCredentials: true // set withCredentials
					},
					crossDomain: true,
					data: data,
					credentials: 'same-origin',
					success: function(data,status,xhr) {
						xhr.getResponseHeader('Set-Cookie');
						if (data.code !== 0){
							$('#error-message').html(data.msg);
						} else {
							window.location.href = data.data['location'];
						}
						$('#submmit').attr('disabled', false)
					},
					error: function(err) {
						console.error(err)
					}
				})

				// $.post('/api/sign-in',data , function(data){
				// 	if (data.code !== 0){
				// 		$('#error-message').html(data.msg);
				// 	} else {
				// 		window.location.href = data.data['location'];
				//    }
				// });
			}
		})
	})

</script>
@endsection