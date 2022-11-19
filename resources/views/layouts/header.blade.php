<!DOCTYPE html>
<html lang="en">
@php
    $seo = App\Models\Seo::find(1);
    $setting = App\Models\SiteSetting::find(1);
@endphp

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>FlexStart Bootstrap Template - Index</title>
    <meta name="description" content="{{ $seo->meta_description }}">
    <meta name="author" content="{{ $seo->meta_author }}">
    <meta name="keywords" content="{{ $seo->meta_keyword }}">

    <!-- Favicons -->
    <link href="{{ asset('front/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('front/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('front/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('front/assets/css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

</head>

<style>
    a {
        text-decoration: none;
    }

    a:hover {
        text-decoration: none;
    }
</style>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

            <a href="{{ route('accueil') }}" class="logo d-flex align-items-center">
                <img src="{{ asset($setting->logo) }}" alt="logo">
                <span>{{ $setting->hopital_name }}</span>
            </a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#team">Médecins</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    @if (!Auth::check())
                        <li><a href="{{ url('/register') }}">Espace Patients</a></li>
                        <li><a class="getstarted scrollto" href="{{ url('/login') }}">Se connecter</a></li>
                    @else
                        <li>
                            <a class="nav-link scrollto" href="{{ route('home') }}">Dashboard</a>
                        </li>
                        <li>
                            <a class="getstarted scrollto" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Déconnexxion
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>
                    @endif
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->
