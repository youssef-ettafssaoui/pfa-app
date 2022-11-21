@extends('layouts.master')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('accueil') }}">Home</a></li>
                    <li>Rendez-vous</li>
                </ol>
                <h2>Prendre rendez-vous avec Dr. {{ $user->name }}</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="text-center">Informations du Médecin</h4>
                                <center>
                                    <img src="{{ asset('images') }}/{{ $user->image }}" width="100px"
                                        style="border-radius: 50%;">
                                </center>

                                <br> <br>
                                <p class="lead">
                                    <b>Nom du Médecin :</b> {{ $user->name }}
                                </p>
                                <p class="lead"> <b>Education :</b> {{ $user->education }}</p>
                                <p class="lead"> <b>SPÉCIALITÉE :</b> {{ $user->department }}</p>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-8">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach

                        @if (Session::has('message'))
                            <div class="alert alert-success">
                                {{ Session::get('message') }}
                            </div>
                        @endif

                        @if (Session::has('errmessage'))
                            <div class="alert alert-danger">
                                {{ Session::get('errmessage') }}
                            </div>
                        @endif


                        <form action="{{ route('booking.appointment') }}" method="post">@csrf
                            <div class="card">
                                <div class="card-header bg-primary text-white font-weight-bold">{{ $date }}</div>
                                <div class="card-body">
                                    <div class="row">
                                        @foreach ($times as $time)
                                            <div class="col-md-3">
                                                <label class="btn btn-outline-primary">
                                                    <input type="radio" name="time" value="{{ $time->time }}">
                                                    <span>{{ $time->time }}
                                                    </span>
                                                </label>
                                            </div>
                                            <input type="hidden" name="doctorId" value="{{ $doctor_id }}">
                                            <input type="hidden" name="appointmentId" value="{{ $time->appointment_id }}">
                                            <input type="hidden" name="date" value="{{ $date }}">
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                @if (Auth::check())
                                    <br>
                                    <center>
                                        <button type="submit" class="btn btn-primary btn-sm rounded"
                                            style="width:50%">Prendre
                                            rendez-vous</button>
                                    </center>
                                @else
                                    <br />
                                    <p style="font-size: 14px;" class="text text-danger font-weight-bold">Veuillez vous
                                        connecter pour
                                        prendre rendez-vous</p>

                                    <a class="btn btn-primary text-white" href="{{ url('/login') }}">Se
                                        connecter</a>
                                    <a class="btn btn-info text-white" href="{{ url('/register') }}">S'inscrire</a>
                                @endif


                            </div>


                        </form>

                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
