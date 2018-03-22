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
                    <h1 class="well-come" style="float: none;">Abstract</h1>

                    <div class="col-md-8 col-md-offset-2">
                        <p class="intro-message">Brahma OS is an operating system that hosts decentralized networks by enabling the deconstruction of existing services and the use of a wide range of decentralized services and components to ensure that users can safely and easily access services on the blockchain and application. </p>
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
                    <li><a href="/abstract/1.html#Background" class=" ">Background</a></li>
                    <li><a href="/abstract/1.html#DecentralizedOSDemand" class=" "> Decentralized OS Demand </a></li>
                        <ul>
                            <li><a href="/abstract/1.html#DataPrivacy" class=" ">Data Privacy</a></li>
                            <li><a href="/abstract/1.html#AccessibleNetworkCommunication" class=" " >Accessible Network Communication</a></li>
                            <li><a href="/abstract/1.html#DecentralizedStorage" class=" ">Decentralized Storage</a></li>
                            <li><a href="/abstract/1.html#ManagementofCryptographicAssets" class=" ">Management of Cryptographic Assets</a></li>
                            <li><a href="/abstract/1.html#AutonomousEconomicSystem" class=" ">Autonomous Economic System</a></li>
                        </ul>
                    <li><a href="/abstract/2.html#Architecture" class=" ">Architecture</a></li>
                    <ul>
                        <li><a href="/abstract/2.html#LayeredDesign" class=" ">Layered Design</a></li>
                        <li><a href="/abstract/2.html#Consensusalgorithm" class=" ">Consensus algorithm</a></li>
                        <li><a href="/abstract/2.html#CompatibilityandSecurity" class=" ">Compatibility and Security</a></li>
                    </ul>
                    <li><a href="/abstract/2.html#Identity" class=" ">Identity</a></li>
                    <ul>
                        <li><a href="/abstract/2.html#AboutI" class=" ">About I</a></li>
                        <li><a href="/abstract/2.html#RoleandValueofIdentity" class=" ">Role and Value of Identity</a></li>
                        <li><a href="/abstract/2.html#SignificanceOfStorage" class=" ">Significance of Decentralized Storage</a></li>
                    </ul>
                    <li><a href="/abstract/3.html#Network" class=" ">Network</a></li>
                    <ul>
                        <li><a href="/abstract/3.html#RoleofNetwork" class=" ">Role of Network</a></li>
                        <li><a href="/abstract/3.html#ConstructionofMetaNetwork" class=" ">Construction of Meta-network</a></li>
                        <li><a href="/abstract/3.html#Routing" class=" ">Routing</a></li>
                    </ul>
                    <li><a href="/abstract/3.html#ApplicationBasis" class=" ">Application Basis</a></li>
                    <ul>
                        <li><a href="/abstract/3.html#Runtimeenvironment" class=" ">Runtime environment</a></li>
                        <li><a href="/abstract/3.html#Applicationstructure" class=" ">Decentralized Service Components</a></li>
                        <li><a href="/abstract/3.html#D-AppStore" class=" ">D-App Store</a></li>
                    </ul>
                    <li><a href="/abstract/3.html#Conclusion" class=" ">Conclusion</a></li>
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