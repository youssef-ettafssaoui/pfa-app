<div id="app">
    @include('layouts.banner')

    @include('layouts.departments')

    <!-- our_ability part start-->
    <section class="our_ability section_padding">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="our_ability_img">
                        <img src="{{ asset('front/img/ability_img.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="our_ability_member_text">
                        <h2>Our Patients
                            Are at the Centre of
                            Everything We Do</h2>
                        <p>Kind lesser bring said midst they're created signs made the beginni years
                            created Beast upon whales herb seas evening she'd day green dominion
                            evening in moved have fifth in won't in darkness fruitful god behold
                            whos without bring created creature.</p>
                        <ul>
                            <li><span class="ti-mouse"></span>Modern Technology</li>
                            <li><span class="ti-heart-broken"></span>Worldclass Facilities</li>
                            <li><span class="ti-package"></span>Experienced Nurse</li>
                            <li><span class="ti-headphone-alt"></span>24 Hours Support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our_ability part end-->

    <!-- top_service part start-->
    <section class="top_service our_ability padding_bottom">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-5 col-lg-5">
                    <div class="our_ability_member_text">
                        <h2>We Analyse Your
                            Health States In Order
                            To Top Service</h2>
                        <p>Kind lesser bring said midst they're created signs made the beginni years
                            created Beast upon whales herb seas evening she'd day green dominion
                            evening in moved have fifth in won't in darkness fruitful god behold
                            whos without bring created creature.</p>
                        <a href="#" class="btn_2">read more</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="our_ability_img">
                        <img src="{{ asset('front/img/top_service.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top_service part end-->

    <!--::review_part start::-->
    <section class="review_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="client_review_part owl-carousel">
                        <div class="client_review_single">
                            <img src="{{ asset('front/img/Quote.png') }}" class="Quote" alt="quote">
                            <div class="client_review_text">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                        <div class="client_review_single">
                            <img src="{{ asset('front/img/Quote.png') }}" class="Quote" alt="quote">
                            <div class="client_review_text media-body">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                        <div class="client_review_single">
                            <img src="{{ asset('front/img/Quote.png') }}" class="Quote" alt="quote">
                            <div class="client_review_text">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                        <div class="client_review_single">
                            <img src="{{ asset('front/img/Quote.png') }}" class="Quote" alt="quote">
                            <div class="client_review_text">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::review_part end::-->

    <!--::regervation_part start::-->
    <section class="regervation_part">
        <div class="container">
            <div class="row align-items-center regervation_content">

            </div>
        </div>
    </section>
    <!--::regervation_part end::-->

    @include('layouts.doctors')

    <!-- intro_video_bg start-->
    <section class="intro_video_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro_video_iner text-center">
                        <h2>View Our History</h2>
                        <div class="intro_video_icon">
                            <a id="play-video_1" class="video-play-button popup-youtube"
                                href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                <span class="ti-control-play"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- intro_video_bg part start-->

    @include('layouts.posts')

</div>
