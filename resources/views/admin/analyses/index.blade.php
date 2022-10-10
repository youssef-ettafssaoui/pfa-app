@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-inbox bg-blue"></i>
                    <div class="d-inline">
                        <h5>Analyses</h5>
                        <span>Liste des Analyses</span>
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
                            <a href="#">Analyses</a>
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
                                <th>Nom Analyse</th>
                                <th>Délai</th>
                                <th>B</th>
                                <th>Prix en DH</th>
                                <th class="nosort">&nbsp;</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($analyses) > 0)
                                @foreach ($analyses as $analyse)
                                    <tr>
                                        <td>{{ strtoupper($analyse->nom) }}</td>
                                        <td>{{ $analyse->delai }}</td>
                                        <td>{{ $analyse->cleB }}</td>
                                        <td>{{ $analyse->montant }}</td>
                                        <td>
                                            <div class="table-actions">
                                                <center>
                                                    <a href="{{ route('analyses.edit', [$analyse->id]) }}"><i
                                                            class="ik ik-edit-2 text-success"></i></a>
                                                </center>
                                            </div>
                                        </td>
                                        <td>x</td>
                                    </tr>
                                @endforeach
                            @else
                                <td>Aucune Analyse Médicale à afficher</td>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
