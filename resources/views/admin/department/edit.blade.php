@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-edit bg-warning"></i>
                    <div class="d-inline">
                        <h5>Département</h5>
                        <span>Modifier Département</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('department.index') }}">Département</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Modification</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">


            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="{{ route('department.update', [$department->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">

                                    <label for="">Nom du Département</label>
                                    <input type="text" name="department"
                                        class="form-control @error('department') is-invalid @enderror"
                                        placeholder="Nom du Département" value="{{ $department->department }}">
                                    @error('department')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <a href="{{ route('department.index') }}" class="btn btn-danger"><i
                                            class="fa fa-undo"></i>
                                        Annuler l'Ajout</a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-save"></i> Enregistrer Modification
                                    </button>
                                </div>
                            </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
