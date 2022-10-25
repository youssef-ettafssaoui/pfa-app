@extends('admin.layouts.master')

@section('content')

    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-box bg-blue"></i>
                    <div class="d-inline">
                        <h5>Médicaments</h5>
                        <span>Liste des Médicaments</span>
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
                            <a href="#">Médicaments</a>
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
                                <th>Présentation</th>
                                <th>Prix</th>
                                <th class="nosort">&nbsp;</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($medicaments) > 0)
                                @foreach ($medicaments as $medicament)
                                    <tr>
                                        <td>{{ strtoupper($medicament->nom) }}</td>
                                        <td>{{ $medicament->presentation }}</td>
                                        <td>{{ $medicament->prix }}</td>
                                        <td>
                                            <div class="table-actions">
                                                <center>
                                                    <a href="{{ route('medicament.edit', [$medicament->id]) }}"><i
                                                            class="ik ik-edit-2 text-success"></i></a>
                                                    <a href="{{ route('medicament.show', [$medicament->id]) }}"><i
                                                            class="ik ik-eye text-primary"></i></a>
                                                </center>
                                            </div>
                                        </td>
                                        <td>x</td>
                                    </tr>
                                @endforeach
                            @else
                                <td>Aucun Médicament est disponible à afficher</td>
                            @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
