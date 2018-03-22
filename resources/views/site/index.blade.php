@extends('site.base')

@section('content')


    <!-- 悬浮框 -->
    <div id="gtco-features-3">
        <div class="gtco-container">
            <div class="gtco-flex">
                <div class="feature feature-1 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-inner">
						<span class="icon">
							<i class="ti-search"></i>
						</span>
                        <h3>Search</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                        <p><a href="#" class="btn btn-white btn-outline">Learn More</a></p>
                    </div>
                </div>
                <div class="feature feature-2 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-inner">
						<span class="icon">
							<i class="ti-announcement"></i>
						</span>
                        <h3>Announcdement</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                        <p><a href="#" class="btn btn-white btn-outline">Learn More</a></p>
                    </div>
                </div>
                <div class="feature feature-3 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-inner">
						<span class="icon">
							<i class="ti-timer"></i>
						</span>
                        <h3>Timer</h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. </p>
                        <p><a href="#" class="btn btn-white btn-outline">Learn More</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 技术介绍 -->
    <div class="gtco-section">
        <div class="gtco-container">

            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                    <h2>技术优势</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
                        <div class="feature-copy">
                            <h3>数据隐私</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                        </div>
                    </div>

                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
                        <div class="feature-copy">
                            <h3>无障碍网络通信</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                        </div>
                    </div>

                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
                        <div class="feature-copy">
                            <h3>去中心化存储</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
                        <div class="feature-copy">
                            <h3>密码学资产的管理</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                        </div>
                    </div>

                    <div class="feature-left animate-box" data-animate-effect="fadeInLeft">
						<span class="icon">
							<i class="icon-check"></i>
						</span>
                        <div class="feature-copy">
                            <h3>自治的经济系统</h3>
                            <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row"></div>
        </div>
    </div>

    <div id="gtco-products">
        <div class="gtco-container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2>Products</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="owl-carousel owl-carousel-carousel">
                    <div class="item">
                        <img src="{{asset('images/site/img_1.jpg')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/site/img_2.jpg')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/site/img_3.jpg')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('images/site/img_4.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--
    <div id="gtco-portfolio" class="gtco-section">
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2>Our Latest Works</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>

            <div class="row row-pb-md">
                <div class="col-md-12">
                    <ul id="gtco-portfolio-list">
                        <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/img_1.jpg); ">
                            <a href="#" class="color-1">
                                <div class="case-studies-summary">
                                    <span>Web Design</span>
                                    <h2>View the Earth from the Outer Space</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/img_2.jpg); ">
                            <a href="#" class="color-2">
                                <div class="case-studies-summary">
                                    <span>Illustration</span>
                                    <h2>Sleeping in the Cold Blue Water</h2>
                                </div>
                            </a>
                        </li>


                        <li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(images/img_3.jpg); ">
                            <a href="#" class="color-3">
                                <div class="case-studies-summary">
                                    <span>Illustration</span>
                                    <h2>Building Builded by Man</h2>
                                </div>
                            </a>
                        </li>
                        <li class="one-half animate-box" data-animate-effect="fadeIn" style="background-image: url(images/img_4.jpg); ">
                            <a href="#" class="color-4">
                                <div class="case-studies-summary">
                                    <span>Web Design</span>
                                    <h2>The Peaceful Place On Earth</h2>
                                </div>
                            </a>
                        </li>

                        <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/img_5.jpg); ">
                            <a href="#" class="color-5">
                                <div class="case-studies-summary">
                                    <span>Web Design</span>
                                    <h2>I'm Getting Married</h2>
                                </div>
                            </a>
                        </li>
                        <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/img_6.jpg); ">
                            <a href="#" class="color-6">
                                <div class="case-studies-summary">
                                    <span>Illustration</span>
                                    <h2>Beautiful Flowers In The Air</h2>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center animate-box">
                    <a href="#" class="btn btn-white btn-outline btn-lg btn-block">See All Our Works</a>
                </div>
            </div>


        </div>
    </div>

    <div id="gtco-counter" class="gtco-section">
        <div class="gtco-container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2>Fun Facts</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>

            <div class="row">

                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="feature-center">
						<span class="icon">
							<i class="ti-settings"></i>
						</span>
                        <span class="counter js-counter" data-from="0" data-to="22070" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Creativity Fuel</span>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="feature-center">
						<span class="icon">
							<i class="ti-face-smile"></i>
						</span>
                        <span class="counter js-counter" data-from="0" data-to="97" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Happy Clients</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="feature-center">
						<span class="icon">
							<i class="ti-briefcase"></i>
						</span>
                        <span class="counter js-counter" data-from="0" data-to="402" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Projects Done</span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                    <div class="feature-center">
						<span class="icon">
							<i class="ti-time"></i>
						</span>
                        <span class="counter js-counter" data-from="0" data-to="212023" data-speed="5000" data-refresh-interval="50">1</span>
                        <span class="counter-label">Hours Spent</span>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="gtco-products">
        <div class="gtco-container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2>Products</h2>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="row animate-box">
                <div class="owl-carousel owl-carousel-carousel">
                    <div class="item">
                        <img src="images/img_1.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/img_2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/img_3.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/img_4.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>


    !-->


@endsection