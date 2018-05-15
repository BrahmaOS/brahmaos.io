@extends('site2.base')

@section('css')
<link rel="stylesheet" href="/css/site3/prettify.css"/>
<link rel="stylesheet" href="/css/site3/style.css"/>
@endsection

@section('content')

    <!--=== Header section Starts ===-->
    <div id="header" class="header-section">
        <!--=== Home Section Starts ===-->
        <div id="section-home" class="home-section-wrap center">
            <div class="section-overlay"></div>
            <div class="container home">
                <div class="navbar-header" style="z-index: 100000; margin-top: 20px">
                    <a class="site-name navbar-brand" href="">
                        <img src="/logo-512-2.png" style="margin-top: -10px" alt="">
                    </a>
                </div>
                <div class="row">
                    <h1 class="well-come" style="float: none;">摘要</h1>

                    <div class="col-md-8 col-md-offset-2">
                        <p class="intro-message">Brahma OS 是一种承载去中心化网络的操作系统，它通过解构已有服务并使用各类去中心化服务和组件得以实现，确保用户可以安全、无障碍的使用区块链之上的服务和应用。</p>
                    </div>
                </div>
            </div>
        </div>
        <!--=== Home Section Ends ===-->
    </div>

    <section>
        <div class="container">
            <div class="col-md-3">
                <ul class="docs-nav" id="menu-left" >
                    <li><a href="/zh/abstract/1.html#Background" class=" ">背景</a></li>
                    <li><a href="/zh/abstract/1.html#DecentralizedOSDemand" class=" ">去中心化操作系统的需求</a></li>
                        <ul>
                            <li><a href="/zh/abstract/1.html#DataPrivacy" class=" ">数据隐私</a></li>
                            <li><a href="/zh/abstract/1.html#AccessibleNetworkCommunication" class=" " >无障碍网络通信</a></li>
                            <li><a href="/zh/abstract/1.html#DecentralizedStorage" class=" ">去中心化存储</a></li>
                            <li><a href="/zh/abstract/1.html#ManagementofCryptographicAssets" class=" ">加密资产的管理</a></li>
                            <li><a href="/zh/abstract/1.html#AutonomousEconomicSystem" class=" ">自治的经济系统</a></li>
                        </ul>
                    <li><a href="/zh/abstract/2.html#Architecture" class=" ">架构</a></li>
                    <ul>
                        <li><a href="/zh/abstract/2.html#LayeredDesign" class=" ">分层设计</a></li>
                        <li><a href="/zh/abstract/2.html#Consensusalgorithm" class=" ">共识算法</a></li>
                        <li><a href="/zh/abstract/2.html#CompatibilityandSecurity" class=" ">兼容性与安全性考虑</a></li>
                    </ul>
                    <li><a href="/zh/abstract/2.html#Identity" class=" ">身份</a></li>
                    <ul>
                        <li><a href="/zh/abstract/2.html#AboutI" class=" ">关于“我”</a></li>
                        <li><a href="/zh/abstract/2.html#RoleandValueofIdentity" class=" ">身份的作用与价值体现</a></li>
                        <li><a href="/zh/abstract/2.html#SignificanceOfStorage" class=" ">去中心化存储的意义</a></li>
                    </ul>
                    <li><a href="/zh/abstract/3.html#Network" class=" ">网络</a></li>
                    <ul>
                        <li><a href="/zh/abstract/3.html#RoleofNetwork" class=" ">网络角色</a></li>
                        <li><a href="/zh/abstract/3.html#ConstructionofMetaNetwork" class=" ">元网络的构建</a></li>
                        <li><a href="/zh/abstract/3.html#Routing" class=" ">路由</a></li>
                    </ul>
                    <li><a href="/zh/abstract/3.html#ApplicationBasis" class=" ">应用基础</a></li>
                    <ul>
                        <li><a href="/zh/abstract/3.html#Runtimeenvironment" class=" ">运行时环境</a></li>
                        <li><a href="/zh/abstract/3.html#Applicationstructure" class=" ">去中心化服务组件</a></li>
                        <li><a href="/zh/abstract/3.html#D-AppStore" class=" ">D-App Store 的可能性</a></li>
                    </ul>
                    <li><a href="/zh/abstract/3.html#Conclusion" class=" ">总结</a></li>
                </ul>
            </div>

            <div class="col-md-9">
                <div class="docs-content" style="padding-left: 0px">
                    <a href="" id="top"></a>
                    @yield('docs-content')
                </div>
            </div>
        </div>
    </section>
@endsection