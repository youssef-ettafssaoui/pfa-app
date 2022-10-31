@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-user bg-primary"></i>
                    <div class="d-inline">
                        <h5>Factures</h5>
                        <span>Ajouter Factures</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('facture.index') }}">Factures</a></li>
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
                    <form class="form" action="{{ route('facture.update', [$facture->id]) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Patient :</label>
                                    <select name="user_id" class="form-control @error('user_id') is-invalid @enderror">
                                        <option value="">Veuillez selectionner</option>
                                        @foreach (App\Models\User::where('role_id', '=', 3)->get() as $patient)
                                            <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('user_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Motif Facture </label>
                                    <input type="text" name="motif"
                                        class="form-control @error('motif') is-invalid @enderror"
                                        placeholder="motif du Médicament" value="{{ $facture->motif }}">
                                    @error('motif')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>


                        <div class="row">

                            <div class="col-md-6">
                                <label class="form-label">Date Facture </label>
                                <input type="date" name="date"
                                    class="form-control @error('date') is-invalid @enderror"
                                    placeholder="date du Médicament" value="{{ $facture->date }}">
                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Total Facture (prix à Payer) </label>
                                    <input type="text" name="total"
                                        class="form-control @error('total') is-invalid @enderror"
                                        placeholder="total du Médicament " value="{{ $facture->total }}">
                                    @error('total')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-dark">
                            <i class="fa fa-save"></i> Enregistrer la Facture
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
