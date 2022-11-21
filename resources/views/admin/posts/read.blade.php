@extends('layouts.master')

@section('content')
    @php
        $seo = App\Models\Seo::find(1);
        $setting = App\Models\SiteSetting::find(1);
    @endphp
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('accueil') }}">Home</a></li>
                    <li><a href="#">Publications</a></li>
                    <li>{{ $post->title }}</li>
                </ol>
                <h2>{{ $post->title }}</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-10 entries">

                        <article class="entry entry-single">

                            <div class="entry-img">
                                <img src="{{ asset('front/assets/img/blog.png') }}" style="width: 100%;" alt="">
                            </div>

                            <h2 class="entry-title">
                                <a href="">{{ $post->title }}</a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="blog-single.html">{{ $setting->hopital_name }}</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-single.html"><time
                                                datetime="2020-01-01">{{ $post->created_at->diffForHumans() }}</time></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    {{ $post->content }}
                                </p>


                            </div>



                        </article><!-- End blog entry -->

                        <div class="blog-author d-flex align-items-center">
                            <img src="{{ asset($setting->logo) }}" class="rounded-circle float-left" alt="">
                            <div>
                                <h4>{{ $setting->hopital_name }}</h4>
                                <div class="social-links">
                                    <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                    <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                                </div>
                                <p>
                                    Complexe Médical AlQuds est un complexe multidisciplinair bâtit conformément aux normes
                                    hospitalières les plus strictes.
                                    Complexe Médical AlQuds se distingue par un service sur mesure et des prestations de
                                    haute qualité dédiées aux patients.
                                </p>
                            </div>
                        </div><!-- End blog author bio -->


                    </div><!-- End blog entries list -->


                </div>

            </div>
        </section><!-- End Blog Single Section -->

    </main><!-- End #main -->
@endsection
