@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-folder bg-warning"></i>
                    <div class="d-inline">
                        <h5>Facture</h5>
                        <span>Liste des Factures</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/dashboard"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('facture.index') }}">Factures</a></li>

                    </ol>
                </nav>
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
                <div class="card-body">
                    <table class="table border-no" id="example1">
                        <thead class="table-responsive">
                            <tr>
                                <th>Patient</th>
                                <th>Date Facture</th>
                                <th>Medecin en Charge</th>
                                <th>Total</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($factures) > 0)
                                @forelse($factures as $facture)
                                    <tr>
                                        <td><a
                                                href="{{ route('facture.show', $facture->id) }}">{{ $facture->patient_name }}</a>
                                        </td>
                                        <td>{{ $facture->facture_date }}</td>
                                        <td>{{ $facture->medecin_name }}</td>
                                        <td style="color: blue"><b>{{ $facture->total_due }} DHs</b></td>
                                        <td>
                                            <!-- Call to action buttons -->
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button class="btn btn-warning btn-sm" type="button"
                                                        data-toggle="tooltip" data-placement="top" title="Edit"><a
                                                            href="{{ route('facture.edit', $facture->id) }}"><i
                                                                class="fa fa-edit text-white"></i></a></button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button class="btn btn-info btn-sm" type="button" data-toggle="tooltip"
                                                        data-placement="top" title="Delete"><a
                                                            href="{{ route('facture.show', $facture->id) }}"><i
                                                                class="fa fa-eye text-white"></i></a></button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <form
                                                        onclick="return confirm('Etes vous Sure, Vous voulier supprimer cette Facture ? ')"
                                                        class="d-inline"
                                                        action="{{ route('facture.destroy', $facture->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger btn-sm" type="button"
                                                            data-toggle="tooltip" data-placement="top" title="Delete"><i
                                                                class="fa fa-trash text-white"></i></button>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <td style="color:red;">Aucune Facture à afficher</td>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
