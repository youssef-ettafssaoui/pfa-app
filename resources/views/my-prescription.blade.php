@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-file bg-warning"></i>
                    <div class="d-inline">
                        <h5>Ordonnance</h5>
                        <span>Liste des Ordonnances</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if (Session::has('message'))
                <div class="alert bg-success alert-success text-white" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header bg-primary font-weight-bold">Mes Ordonnances ({{ $prescriptions->count() }})</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Médecin</th>
                                <th scope="col">Maladie</th>
                                <th scope="col">Symptômes</th>
                                <th scope="col">Médicament</th>
                                <th scope="col">Procédure d'utilisation</th>
                                <th scope="col">Feedback Médecin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($prescriptions as $prescription)
                                <tr>

                                    <td>{{ $prescription->date }}</td>
                                    <td>{{ $prescription->doctor->name }}</td>
                                    <td>{{ $prescription->name_of_disease }}</td>
                                    <td>{{ $prescription->symptoms }}</td>
                                    <td>{{ $prescription->medicine }}</td>
                                    <td>{{ $prescription->procedure_to_use_medicine }}</td>
                                    <td>{{ $prescription->feedback }}</td>
                                </tr>
                            @empty
                                <td class="text-danger"><b>Vous n'avez pas encore d'ordonnance</b></td>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
