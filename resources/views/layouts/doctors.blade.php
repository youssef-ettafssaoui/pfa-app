     <!-- ======= Team Section ======= -->
     <section id="team" class="team">

         <div class="container" data-aos="fade-up">

             <header class="section-header">
                 <h2>Rencontrez Notre Équipe</h2>
                 <p>Médecins Spécialistes</p>
             </header>

             <div class="row gy-4">
                 @foreach ($medecins as $medecin)
                     <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                         <div class="member">
                             <div class="member-img">
                                 @if (!empty($medecin->image))
                                     <img src="{{ asset('images') }}/{{ $medecin->image }}" alt="Image"
                                         class="img-fluid mx-auto">
                                 @else
                                     <img src="{{ asset('front/img/doctor/doctor_1.png') }}" alt="doctor">
                                 @endif
                                 <div class="social">
                                     <a href=""><i class="bi bi-twitter"></i></a>
                                     <a href=""><i class="bi bi-facebook"></i></a>
                                     <a href=""><i class="bi bi-instagram"></i></a>
                                     <a href=""><i class="bi bi-linkedin"></i></a>
                                 </div>
                             </div>
                             <div class="member-info">
                                 <h4>Dr. {{ $medecin->name }}</h4>
                                 <span>{{ $medecin->department }}</span>
                             </div>
                         </div>
                     </div>
                 @endforeach
             </div>

         </div>

     </section><!-- End Team Section -->
