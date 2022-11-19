@extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-header">


                    </div>

                    <div class="card-body">
                        <p>Date : {{ $prescription->date }}</p>
                        <p>Patient : {{ $prescription->user->name }}</p>
                        <p>Médecin : {{ $prescription->doctor->name }}</p>
                        <p>Maladie : {{ $prescription->name_of_disease }}</p>
                        <p>Les symptômes : {{ $prescription->symptoms }}</p>
                        <p>Médicaments : {{ $prescription->medicine }}</p>
                        <p>Procédure d'utilisation des médicaments : {{ $prescription->procedure_to_use_medicine }}</p>
                        <p>Feedback : {{ $prescription->feedback }}</p>
                        <p>Signature du Médecin : {{ $prescription->signature }}</p>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
