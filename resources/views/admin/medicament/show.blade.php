@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-box bg-warning"></i>
                    <div class="d-inline">
                        <h5>Médicaments</h5>
                        <span>Ajouter Médicament</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('medicament.index') }}">Médicaments</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ajout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <h6 class="mt-0 mb-2">{{ $medicament->nom }}</h6>
                                <div class="d-flex justify-content-center justify-content-lg-start">
                                    <span class="badge badge-sm badge-warning me-4">Status du
                                        Médicament : {{ $medicament->status }}</span> &nbsp;&nbsp;&nbsp;
                                    <span class="badge badge-sm badge-dark me-4">Présentation
                                        du
                                        Médicament : {{ $medicament->presentation }}</span> &nbsp;&nbsp;&nbsp;
                                    <span class="badge badge-sm badge-primary">Prix du Médicament
                                        :
                                        {{ $medicament->prix }}</span>
                                </div>
                            </div>
                            <h5 class="mt-0 mb-2">INDICATIONS D'UTILISATION :</h5>
                            <p>{{ $medicament->indications }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
