 @php
     $seo = App\Models\Seo::find(1);
     $setting = App\Models\SiteSetting::find(1);
 @endphp
 <!-- ======= Hero Section ======= -->
 <section id="hero" class="hero d-flex align-items-center">

     <div class="container">
         <div class="row">
             <div class="col-lg-6 d-flex flex-column justify-content-center">
                 <h1 data-aos="fade-up">Bienvenue à notre {{ $setting->hopital_name }}</h1>
                 <h2 data-aos="fade-up" data-aos-delay="400">On se distingue par un service sur mesure et des prestations
                     de
                     haute qualité dédiées aux patients</h2>
             </div>
             <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                 <img src="{{ asset('front/assets/img/hero-img.png') }}" class="img-fluid" alt="">
             </div>
         </div>
     </div>

 </section><!-- End Hero -->

 <main id="main">

     <!-- ======= Values Section ======= -->
     <section id="values" class="values">

         <div class="container" data-aos="fade-up">

             <header class="section-header">
                 <p>Présentation</p><br />
                 <h2 style="font-size: 18px">{{ $setting->hopital_name }}</h2>
             </header>

             <div class="row">

                 <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                     <div class="box">
                         <img src="{{ asset('front/assets/img/values-1.png') }}" class="img-fluid" alt="">
                         <h3>Médecins</h3>
                         <p>Nous faisons intervenir des médecins spécialistes et généralistes qui mettent tout leur
                             savoir-faire et leur potentialité médicale au service de leurs patients, pour une prise en
                             charge médicale ou chirurgicale</p>
                     </div>
                 </div>

                 <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                     <div class="box">
                         <img src="{{ asset('front/assets/img/values-2.png') }}" class="img-fluid" alt="">
                         <h3>Urgence et réanimation</h3>
                         <p>Notre {{ $setting->hopital_name }} dispose d’un service d’urgence disponible 24H/24 et 7J/7,
                             nous secourons les cas graves et les personnes en situation délicate : blessés, accidentés,
                             ou autres....</p>
                     </div>
                 </div>

                 <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
                     <div class="box">
                         <img src="{{ asset('front/assets/img/values-3.png') }}" class="img-fluid" alt="">
                         <h3>Horaires de consultation</h3>
                         <p>Les consultations sont assurées par des spécialistes sur rendez-vous. Nous sommes
                             disponibles 24H/24 et 7J/7.</p>
                     </div>
                 </div>

             </div>

         </div>

     </section><!-- End Values Section -->

     <!-- ======= Counts Section ======= -->
     <section id="counts" class="counts">
         <div class="container" data-aos="fade-up">

             <div class="row gy-4">

                 <div class="col-lg-3 col-md-6">
                     <div class="count-box">
                         <i class="bi bi-emoji-smile"></i>
                         <div>
                             <span data-purecounter-start="0"
                                 data-purecounter-end="{{ App\Models\User::where('role_id', 3)->count() }}"
                                 data-purecounter-duration="1" class="purecounter"></span>
                             <p>Patients heureux</p>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-6">
                     <div class="count-box">
                         <i class="bi bi-journal-richtext" style="color: #209fee;"></i>
                         <div>
                             <span data-purecounter-start="0"
                                 data-purecounter-end="{{ App\Models\Department::count() }}"
                                 data-purecounter-duration="1" class="purecounter"></span>
                             <p>Spécialitées</p>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-6">
                     <div class="count-box">
                         <i class="bi bi-clipboard-fill" style="color: #6a15be;"></i>
                         <div>
                             <span data-purecounter-start="0"
                                 data-purecounter-end="{{ App\Models\Prescription::count() }}"
                                 data-purecounter-duration="1" class="purecounter"></span>
                             <p>Prescriptions</p>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-6">
                     <div class="count-box">
                         <i class="bi bi-people" style="color: #a008bb;"></i>
                         <div>
                             <span data-purecounter-start="0"
                                 data-purecounter-end="{{ App\Models\User::where('role_id', 1)->count() }}"
                                 data-purecounter-duration="1" class="purecounter"></span>
                             <p>Médecins</p>
                         </div>
                     </div>
                 </div>

             </div>

         </div>
     </section><!-- End Counts Section -->

     <!-- ======= Features Section ======= -->
     <section id="features" class="features">

         <div class="container" data-aos="fade-up">

             <header class="section-header">
                 <h2>Les différents Départements</h2>
                 <p style="font-size: 15px">Notre complexe Médical regroupe une panoplie de spécialités médicales,
                     c’est un environnement
                     médical dotés d’une technologie de pointe et des médecins compétents.</p>
             </header>

             <div class="row">

                 <div class="col-lg-6">
                     <img src="{{ asset('front/assets/img/features.png') }}" class="img-fluid" alt="">
                 </div>

                 <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                     <div class="row align-self-center gy-4">
                         @foreach ($departments as $department)
                             <div class="col-md-6" data-aos="zoom-out" data-aos-delay="200">
                                 <div class="feature-box d-flex align-items-center">
                                     <i class="bi bi-check"></i>
                                     <h3>{{ $department->department }}</h3>
                                 </div>
                             </div>
                         @endforeach
                     </div>
                 </div>

             </div> <!-- / row -->

             <!-- Feature Icons -->
             <div class="row feature-icons" data-aos="fade-up">
                 <h3>Nos Engagements</h3>

                 <div class="row">

                     <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
                         <img src="{{ asset('front/assets/img/features-3.png') }}" class="img-fluid p-4"
                             alt="">
                     </div>

                     <div class="col-xl-8 d-flex content">
                         <div class="row align-self-center gy-4">

                             <div class="col-md-6 icon-box" data-aos="fade-up">
                                 <i class="ri-health-book-line"></i>
                                 <div>
                                     <h4>Des soins de haute qualité</h4>
                                     <p>Notre Complexe est pluridisciplinaire, elle offre à ses patients des traitements
                                         et des soins d’une qualité incomparable, ceci grâce à un matériel à la pointe
                                         des avancées technologiques et médicales.</p>
                                 </div>
                             </div>

                             <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                 <i class="ri-24-hours-fill"></i>
                                 <div>
                                     <h4>Disponibilité à tout moment</h4>
                                     <p>Notre Complexe vous facilite l’accès à l’information ainsi que les démarches et
                                         les procédures administratives. Toute l’équipe médicale et paramédicale reste à
                                         la disposition des patients 24H/24 ET 7J/7 pour les assister et les accompagner
                                         à tout moment.</p>
                                 </div>
                             </div>

                             <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                 <i class="ri-hand-heart-line"></i>
                                 <div>
                                     <h4>Accompagnement personnalisé</h4>
                                     <p>Pour réussir l’expérience médicale, notre Complexe adopte une stratégie pour
                                         le perfectionnement de ses prestations médicales, elle offre à ses patients une
                                         écoute attentive, un appui humain et un soutien psychologique.
                                     </p>
                                 </div>
                             </div>






                         </div>
                     </div>

                 </div>

             </div><!-- End Feature Icons -->

         </div>

     </section><!-- End Features Section -->

     <!-- ======= Services Section ======= -->
     <section id="services" class="services">

         <div class="container" data-aos="fade-up">

             <header class="section-header">
                 <h2>Services</h2>
                 <p>Veritatis et dolores facere numquam et praesentium</p>
             </header>

             <div class="row gy-4">

                 <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                     <div class="service-box blue">
                         <i class="ri-discuss-line icon"></i>
                         <h3>Nesciunt Mete</h3>
                         <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure
                             perferendis tempore et consequatur.</p>
                         <a href="#" class="read-more"><span>Read More</span> <i
                                 class="bi bi-arrow-right"></i></a>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                     <div class="service-box orange">
                         <i class="ri-discuss-line icon"></i>
                         <h3>Eosle Commodi</h3>
                         <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum
                             hic non ut nesciunt dolorem.</p>
                         <a href="#" class="read-more"><span>Read More</span> <i
                                 class="bi bi-arrow-right"></i></a>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                     <div class="service-box green">
                         <i class="ri-discuss-line icon"></i>
                         <h3>Ledo Markt</h3>
                         <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id
                             voluptas adipisci eos earum corrupti.</p>
                         <a href="#" class="read-more"><span>Read More</span> <i
                                 class="bi bi-arrow-right"></i></a>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                     <div class="service-box red">
                         <i class="ri-discuss-line icon"></i>
                         <h3>Asperiores Commodi</h3>
                         <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea fuga sit
                             provident adipisci neque.</p>
                         <a href="#" class="read-more"><span>Read More</span> <i
                                 class="bi bi-arrow-right"></i></a>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                     <div class="service-box purple">
                         <i class="ri-discuss-line icon"></i>
                         <h3>Velit Doloremque.</h3>
                         <p>Cumque et suscipit saepe. Est maiores autem enim facilis ut aut ipsam corporis aut. Sed
                             animi at autem alias eius labore.</p>
                         <a href="#" class="read-more"><span>Read More</span> <i
                                 class="bi bi-arrow-right"></i></a>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="700">
                     <div class="service-box pink">
                         <i class="ri-discuss-line icon"></i>
                         <h3>Dolori Architecto</h3>
                         <p>Hic molestias ea quibusdam eos. Fugiat enim doloremque aut neque non et debitis iure.
                             Corrupti recusandae ducimus enim.</p>
                         <a href="#" class="read-more"><span>Read More</span> <i
                                 class="bi bi-arrow-right"></i></a>
                     </div>
                 </div>

             </div>

         </div>

     </section><!-- End Services Section -->







     @include('layouts.doctors')


     @include('layouts.posts')

     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact">

         <div class="container" data-aos="fade-up">

             <header class="section-header">
                 <h2>Contactez-Nous</h2>
                 <p style="font-size: 15px">Par le biais de ce formulaire, notre {{ $setting->hopital_name }} collecte
                     vos données
                     personnelles en vue de traiter
                     votre présente demande.</p>
             </header>

             <div class="row gy-4">

                 <div class="col-lg-6">

                     <div class="row gy-4">
                         <div class="col-md-6">
                             <div class="info-box">
                                 <i class="bi bi-geo-alt"></i>
                                 <h3>Adresse</h3>
                                 <p>{{ $setting->hopital_name }},<br /> {{ $setting->hopital_address }} </p>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="info-box">
                                 <i class="bi bi-telephone"></i>
                                 <h3>Appelez-nous</h3>
                                 <p>{{ $setting->phone_one }}<br>{{ $setting->phone_two }}</p>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="info-box">
                                 <i class="bi bi-envelope"></i>
                                 <h3>Email Us</h3>
                                 <p>{{ $setting->email }}</p>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="info-box">
                                 <i class="bi bi-clock"></i>
                                 <h3>Horaires d’ouvertures</h3>
                                 <p>Lundi - Dimanche<br>24/24 h - 7/7 j</p>
                             </div>
                         </div>
                     </div>

                 </div>

                 <div class="col-lg-6">
                     <form action="forms/contact.php" method="post" class="php-email-form">
                         <div class="row gy-4">

                             <div class="col-md-6">
                                 <input type="text" name="name" class="form-control"
                                     placeholder="votre Nom complet" required>
                             </div>

                             <div class="col-md-6 ">
                                 <input type="email" class="form-control" name="email"
                                     placeholder="votre Adresse Email" required>
                             </div>

                             <div class="col-md-12">
                                 <input type="text" class="form-control" name="subject" placeholder="Votre objet"
                                     required>
                             </div>

                             <div class="col-md-12">
                                 <textarea class="form-control" name="message" rows="6" placeholder="votre Message" required></textarea>
                             </div>

                             <div class="col-md-12 text-center">
                                 <div class="loading">Loading</div>
                                 <div class="error-message"></div>
                                 <div class="sent-message">Your message has been sent. Thank you!</div>

                                 <button type="submit">Envoyer Message</button>
                             </div>

                         </div>
                     </form>

                 </div>

             </div>

         </div>

     </section><!-- End Contact Section -->

 </main><!-- End #main -->
