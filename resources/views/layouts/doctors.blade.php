<!--::doctor_part start::-->
<section class="doctor_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section_tittle text-center">
                    <h2>Médecins expérimentés</h2>
                    <p>Face replenish sea good winged bearing years air divide wasHave night male also</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($medecins as $medecin)
                <div class="col-sm-6 col-lg-3">
                    <div class="single_blog_item">
                        <div class="single_blog_img">
                            @if (!empty($medecin->image))
                                <img src="{{ asset('images') }}/{{ $medecin->image }}" alt="Image"
                                    class="img-fluid mx-auto">
                            @else
                                <img src="{{ asset('front/img/doctor/doctor_1.png') }}" alt="doctor">
                            @endif
                            <div class="social_icon">
                                <a href="#"> <i class="ti-facebook"></i> </a>
                                <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                <a href="#"> <i class="ti-instagram"></i> </a>
                                <a href="#"> <i class="ti-skype"></i> </a>
                            </div>
                        </div>
                        <div class="single_text">
                            <div class="single_blog_text">
                                <h3>DR {{ $medecin->name }}</h3>
                                <p>{{ $medecin->department }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--::doctor_part end::-->
