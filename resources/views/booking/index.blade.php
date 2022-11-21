@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-calendar bg-warning"></i>
                    <div class="d-inline">
                        <h5>Rendez-Vous</h5>
                        <span>Liste des Rendez-Vous</span>
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
                <div class="card-header">Vos rendez-vous ({{ $appointments->count() }})</div>
                <div class="card-body">
                    <table class="table" id="data_table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Médecin</th>
                                <th scope="col">Horraire</th>
                                <th scope="col">Date pour</th>
                                <th scope="col">Date Création</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($appointments as $key=>$appointment)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $appointment->doctor->name }}</td>
                                    <td>{{ $appointment->time }}</td>
                                    <td>{{ $appointment->date }}</td>
                                    <td>{{ $appointment->created_at->diffForHumans() }}</td>
                                    <td>
                                        @if ($appointment->status == 0)
                                            <button class="btn btn-primary">Non visité</button>
                                        @else
                                            <button class="btn btn-success">Vérifié</button>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <td class="text-danger">Vous n'avez aucun rendez-vous</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
