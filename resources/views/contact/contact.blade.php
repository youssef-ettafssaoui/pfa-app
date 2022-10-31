@extends('layouts.master')
@php
    $setting = App\Models\SiteSetting::find(1);
@endphp
<br><br><br><br><br>
@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>contact</h2>
                            <p>Home<span>/</span>contact</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- ================ contact section start ================= -->
    <section class="contact-section section_padding">
        <div class="container">
            @if (session('status'))
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-8">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success ! </strong> &nbsp; {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Contactez-Nous :</h2>
                </div>
                <div class="col-lg-8">

                    <form class="form-contact contact_form" method="POST" action="{{ route('addContact') }}"
                        enctype="multipart/form-data" id="contactForm">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100 @error('message') is-invalid @enderror" name="message" id="message" cols="30"
                                        rows="9" placeholder='Veuillez saisir votre Message'></textarea>
                                    @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control @error('fullname') is-invalid @enderror" name="fullname"
                                        id="fullname" type="text" placeholder='Veuillez saisir votre nom complet'>
                                    @error('fullname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control @error('email') is-invalid @enderror" name="email"
                                        id="email" type="email" placeholder='Veuillez saisir votre email adresse'>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control @error('phone_number') is-invalid @enderror"
                                        name="phone_number" id="phone_number" type="text"
                                        placeholder='Veuillez saisir votre numéro de Téléphone'>
                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control @error('subject') is-invalid @enderror" name="subject"
                                        id="subject" type="text" placeholder='Veuillez saisir le sujet du message'>
                                    @error('subject')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">

                                    <input type="file" accept="image/*"
                                        class="form-control @error('screenshot') is-invalid @enderror" name="screenshot"
                                        autofocus>

                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm btn_1">ENVOYER VOTRE MESSAGE</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>{{ $setting->hopital_name }}</h3>
                            <p>{{ $setting->hopital_address }}</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>{{ $setting->phone_one }}</h3>
                            <p>{{ $setting->phone_two }}</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>{{ $setting->email }}</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
