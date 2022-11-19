@php
    $setting = App\Models\SiteSetting::find(1);
@endphp
<!-- footer part start-->
<footer class="footer-area">
    <div class="footer section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Services Link</h4>
                    <ul>
                        <li><a href="#">Eye treatment</a></li>
                        <li><a href="#">Skin Surgery</a></li>
                        <li><a href="#">Diagnosis clinic</a></li>
                        <li><a href="#"> Dental care</a></li>
                        <li><a href="#">Neurology service</a></li>
                        <li><a href="#">Plastic surgery</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Department</a></li>
                        <li><a href="#"> Online payment</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Department</a></li>
                    </ul>
                </div>

                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Explore</h4>
                    <ul>
                        <li><a href="#">In the community</a></li>
                        <li><a href="#">IU health foundation</a></li>
                        <li><a href="#">Family support </a></li>
                        <li><a href="#">Business solution</a></li>
                        <li><a href="#">Community clinic</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Lights were season</a></li>
                        <li><a href="#"> Their is let wherein</a></li>
                        <li><a href="#">which given over</a></li>
                        <li><a href="#">Without given She</a></li>
                        <li><a href="#">Isn two signs think</a></li>
                    </ul>
                </div>
                <div class="col-xl-4 col-sm-8 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                    <h4>{{ $setting->hopital_name }}</h4>
                    <p>{{ $setting->hopital_address }}</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                required="" type="email">
                            <button class="click-btn btn btn-default text-uppercase">subscribe</button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                    type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright_part">
        <div class="container">
            <div class="row align-items-center">
                <p class="footer-text m-0 col-lg-8 col-md-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved 2022 | This Application is made with <i
                        class="ti-heart" aria-hidden="true"></i> by <a href="#"
                        target="_blank">{{ strtoupper($setting->hopital_name) }}</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                    <a target="_blank" rel="nofollow" href="{{ $setting->facebook }}"><i class="ti-facebook"></i></a>
                    <a target="_blank" rel="nofollow" href="{{ $setting->twitter }}"> <i class="ti-twitter"></i> </a>
                    <a target="_blank" rel="nofollow" href="{{ $setting->youtube }}"><i class="ti-youtube"></i></a>
                    <a target="_blank" rel="nofollow" href="{{ $setting->linkedin }}"><i class="ti-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" defer></script>

<script>
    var dateToday = new Date();
    $(function() {
        $("#datepicker").datepicker({
            dateFormat: "yy-mm-dd",
            showButtonPanel: true,
            numberOfMonths: 2,
            minDate: dateToday,
        });
    });
</script>

<style type="text/css">
    body {
        background: #fff;
    }

    .ui-corner-all {
        background: red;
        color: #fff;
    }

    label.btn {
        padding: 0;
    }

    label.btn input {
        opacity: 0;
        position: absolute;
    }

    label.btn span {
        text-align: center;
        padding: 6px 12px;
        display: block;
        min-width: 80px;
    }

    label.btn input:checked+span {
        background-color: rgb(80, 110, 228);
        color: #fff;
    }
</style>

<script src="{{ asset('front/js/jquery-1.12.1.min.js') }}"></script>
<!-- popper js -->
<script src="{{ asset('front/js/popper.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<!-- easing js -->
<script src="{{ asset('front/js/jquery.magnific-popup.js') }}"></script>
<!-- swiper js -->
<script src="{{ asset('front/js/swiper.min.js') }}"></script>
<!-- swiper js -->
<script src="{{ asset('front/js/masonry.pkgd.js') }}"></script>
<!-- particles js -->
<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.nice-select.min.js') }}"></script>
<!-- swiper js -->
<script src="{{ asset('front/js/slick.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('front/js/waypoints.min.js') }}"></script>
<!-- contact js -->
<script src="{{ asset('front/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.form.js') }}"></script>
<script src="{{ asset('front/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('front/js/mail-script.js') }}"></script>
<script src="{{ asset('front/js/contact.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('front/js/custom.js') }}"></script>
<script defer src="{{ mix('js/app.js') }}"></script>
</body>

</html>
