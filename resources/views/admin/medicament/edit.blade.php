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
            @if (Session::has('message'))
                <div class="alert bg-success alert-success text-white" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <form class="form" action="{{ route('medicament.update', [$medicament->id]) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Nom Complet du Médicament </label>
                                    <input type="text" name="nom"
                                        class="form-control @error('nom') is-invalid @enderror"
                                        placeholder="Nom du Médicament " value="{{ $medicament->nom }}">
                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Status du Médicament </label>
                                    <input type="text" name="status"
                                        class="form-control @error('status') is-invalid @enderror"
                                        placeholder="Status du Médicament" value="{{ $medicament->status }}">
                                    @error('status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>


                        <div class="row">

                            <div class="col-md-6">
                                <label class="form-label">Présentation du Médicament </label>
                                <input type="text"name="presentation"
                                    class="form-control @error('presentation') is-invalid @enderror"
                                    placeholder="Presentation du Médicament" value="{{ $medicament->presentation }}">
                                @error('presentation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Prix du Médicament </label>
                                    <input type="text" name="prix"
                                        class="form-control @error('prix') is-invalid @enderror"
                                        placeholder="Prix du Médicament " value="{{ $medicament->prix }}">
                                    @error('prix')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Indications Médicament </label>
                                    <textarea name="indications" class="form-control @error('indications') is-invalid @enderror"
                                        placeholder="indications Médicament">{{ $medicament->indications }}</textarea>
                                    @error('indications')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>


                        <button type="submit" class="btn btn-dark">
                            <i class="fa fa-save"></i> Enregistrer l'Analyse
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
