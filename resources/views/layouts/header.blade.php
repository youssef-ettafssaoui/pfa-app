<!doctype html>
<html lang="en">
@php
    $seo = App\Models\Seo::find(1);
    $setting = App\Models\SiteSetting::find(1);
@endphp

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $seo->meta_description }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="author" content="{{ $seo->meta_author }}">
    <meta name="keywords" content="{{ $seo->meta_keyword }}">

    <!-- /// Google Analytics Code // -->
    <script>
        {{ $seo->google_analytics }}
    </script>
    <!-- /// Google Analytics Code // -->

    <title>Complexe Médical</title>
    <link rel="icon" href="{{ asset('front/img/favicon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/themify-icons.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/flaticon.css') }}">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/nice-select.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a href="{{ route('accueil') }}"> <img src="{{ asset($setting->logo) }}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('accueil') }}">Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">A Propos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/medecins">Médecins</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="/contact">Contactez-nous</a>
                                </li>

                                @if (!Auth::check())
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('/register') }}">Espace Patients</a>
                                    </li>
                                    <li class="d-none d-lg-block">
                                        <a class="btn_1" href="{{ url('/login') }}">Se Connecter</a>
                                    </li>
                                @else
                                    <li class="d-none d-lg-block">
                                        <a class="btn_1 btn-dark" href="{{ route('home') }}"><i class="fa fa-home"
                                                aria-hidden="true"></i>DASHBOARD</a>
                                    </li>
                                    <li class="d-none d-lg-block">
                                        <a class="btn_1 btn-white" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i>DÉCONNECTION
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
