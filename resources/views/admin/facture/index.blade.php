@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-box bg-blue"></i>
                    <div class="d-inline">
                        <h5>Factures</h5>
                        <span>Liste des Factures</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Factures</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Index</li>
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
                    <table id="data_table" class="table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Patient</th>
                                <th>Motif</th>
                                <th>Prix</th>
                                <th class="nosort">&nbsp;</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($factures) > 0)
                                @foreach ($factures as $facture)
                                    <tr>
                                        <td>{{ strtoupper($facture->date) }}</td>
                                        <td><b>{{ strtoupper($facture->user->name) }}</b></td>
                                        <td>{{ $facture->motif }}</td>
                                        <td><b style="color: green">{{ strtoupper($facture->total) }} DHs</b></td>
                                        <td>
                                            <div class="table-actions">
                                                <center>
                                                    <a href="{{ route('facture.edit', [$facture->id]) }}"><i
                                                            class="ik ik-edit-2 text-success"></i></a>
                                                    <a href="{{ route('facture.show', [$facture->id]) }}"><i
                                                            class="ik ik-eye text-primary"></i></a>
                                                </center>
                                            </div>
                                        </td>
                                        <td>x</td>
                                    </tr>
                                @endforeach
                            @else
                                <td>Aucune Facture est disponible à afficher</td>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
