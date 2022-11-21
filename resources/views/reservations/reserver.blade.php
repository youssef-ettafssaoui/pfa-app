@extends('layouts.master')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ route('accueil') }}">Home</a></li>
                    <li>Reservations</li>
                </ol>
                <h2>Prendre rendez-vous avec un Médecin</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container">
                <!--date picker component-->
                <find-doctor></find-doctor>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
