@php
    $setting = App\Models\SiteSetting::find(1);
@endphp

<footer id="footer" class="footer">

    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h4>Newsletter</h4>
                    <p>Connectez-vous et ne manquez rien </p>
                </div>
                <div class="col-lg-6">
                    <form action="" method="post">
                        <input type="email" placeholder="Entrer votre email" name="email"><input type="submit"
                            value="S'abonner">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <img src="{{ asset($setting->logo) }}" alt="logo">
                        <span>{{ $setting->hopital_name }}</span>
                    </a>
                    <p> {{ $setting->hopital_name }} est un complexe multidisciplinair bâtit conformément aux normes
                        hospitalières les plus strictes.</p>

                    <p> {{ $setting->hopital_name }} se distingue par un service sur mesure et des prestations de haute
                        qualité dédiées aux patients.</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-6 footer-links">
                    <h4>Liens Rapides</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#services">Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#team">Médecins</a></li>
                    </ul>
                </div>



                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contactez-nous</h4>
                    <p>
                        {{ $setting->hopital_name }} <br>
                        {{ $setting->hopital_address }}<br>
                        <br>
                        <strong>Phone :</strong> {{ $setting->phone_one }}<br>
                        <strong>Email :</strong> {{ $setting->email }}<br>
                    </p>

                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright 2022 <strong><span>YadouSoft.ma</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="">Ettafssaoui Youssef</a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

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

<!-- Vendor JS Files -->
<script src="{{ asset('front/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('front/assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('front/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('front/assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('front/assets/js/main.js') }}"></script>
<script defer src="{{ mix('js/app.js') }}"></script>

</body>

</html>
