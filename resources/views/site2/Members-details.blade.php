@extends('site2.base')

@section('content')

    <!--=== Header section Starts ===-->
    <div id="header" class="header-section">
        <div id="section-home" class="home-section-wrap center">
            <div class="section-overlay"></div>
            <div class="container home">
                <div class="navbar-header" style="z-index: 100000; margin-top: 20px">
                    <a class="site-name navbar-brand" href="">
                        <img src="/logo-512-2.png" style="margin-top: -10px" alt="">
                    </a>
                </div>
                <div class="row">
                    <h1 class="well-come" style="float: none;">Members</h1>
                </div>

                <div class="col-md-12">

                    <div class="col-md-4 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc members-details">
                            <div class="detail">
                                <div class="members-photo"></div>
                                <h4 class="service-title member-name">
                                    Lorna Chen
                                </h4>
                                <h4 class="member-position">
                                    CEO
                                </h4>
                                <p class="service-description justify">
                                    Ex-JP Morgan, Bank of New York Mellon , Bank of Tokyo Mitsubishi.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc  members-details">
                            <div class="detail">
                                <h4 class="service-title color-scheme">
                                <span class="team-member">
                                Steven Hu <span style="color: #666">|</span> <span style="font-size: 16px">CTO</span>
                                </span>
                                </h4>
                                <p class="service-description justify">
                                    10 years experiences in architecture design and R&D management in the telecommunication industry and the Internet industry.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 service animated" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="service-desc members-details">
                            <div class="detail">
                                <h4 class="service-title color-scheme">
                                <span class="team-member">
                                Marinos Tsokas <span style="color: #666">|</span> <span style="font-size: 16px">CMO</span>
                                </span>
                                </h4>
                                <p class="service-description justify">
                                    Ex-CMO of Vodaphone
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>




    </div>


@endsection