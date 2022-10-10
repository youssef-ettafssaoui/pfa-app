@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-file bg-warning"></i>
                    <div class="d-inline">
                        <h5>Analyses</h5>
                        <span>Ajouter Analyse</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('analyses.index') }}">Analyses</a></li>
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
                    <form class="form" action="{{ route('analyses.update', [$analyse->id]) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Nom d'analyse </label>
                                    <input type="text" name="nom"
                                        class="form-control @error('nom') is-invalid @enderror" placeholder="Nom d'analyse"
                                        value="{{ $analyse->nom }}">
                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Délai d'analyse</label>
                                    <input type="text" name="delai"
                                        class="form-control @error('delai') is-invalid @enderror"
                                        placeholder="Délai d'analyse" value="{{ $analyse->delai }}">
                                    @error('delai')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>


                        <div class="row">

                            <div class="col-md-6">
                                <label class="form-label">Montant en Dhs </label>
                                <input type="text" name="montant"
                                    class="form-control @error('montant') is-invalid @enderror"
                                    placeholder="Montant en DHS d'analyse" value="{{ $analyse->montant }}">
                                @error('montant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Clé B </label>
                                    <input type="text" name="cleB"
                                        class="form-control @error('cleB') is-invalid @enderror"
                                        placeholder="Clé B d'analyse" value="{{ $analyse->cleB }}">
                                    @error('cleB')
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
