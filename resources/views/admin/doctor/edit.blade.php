@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-edit bg-warning"></i>
                    <div class="d-inline">
                        <h5>Médecins</h5>
                        <span>Modifier Médecin</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('doctor.index') }}">Médecin</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Modification</li>
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
                    <form class="forms-sample" action="{{ route('doctor.update', [$user->id]) }}" method="post"
                        enctype="multipart/form-data">@csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Nom Complet</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Nom Complet du Médecin" value="{{ $user->name }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="">Adresse Email</label>
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Adresse Email du Médecin" value="{{ $user->email }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Mot de Passe</label>
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Mot de Passe du Médecin">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="">Sexe</label>
                                <select class="form-control @error('gender') is-invalid @enderror" name="gender">
                                    @foreach (['Homme', 'Femme'] as $gender)
                                        <option value="{{ $gender }}"
                                            @if ($user->gender == $gender) selected @endif>{{ $gender }}</option>
                                    @endforeach
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Education</label>
                                <input type="text" name="education"
                                    class="form-control @error('education') is-invalid @enderror"
                                    placeholder="Dernier Degré" value="{{ $user->education }}">
                                @error('education')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-6">
                                <label for="">Adresse de Résidence</label>
                                <input type="text" name="address"
                                    class="form-control @error('address') is-invalid @enderror"
                                    placeholder="Adresse de Résidence du Médecin" value="{{ $user->address }}">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Spécialiste</label>
                                    <select name="department" class="form-control">
                                        @foreach (App\Models\Department::all() as $department)
                                            <option value="{{ $department->department }}"
                                                @if ($user->department == $department->department) selected @endif>
                                                {{ $department->department }}</option>
                                        @endforeach
                                    </select>
                                    @error('department')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Numéro de Téléphone</label>
                                    <input type="text" name="phone_number"
                                        class="form-control @error('phone_number') is-invalid @enderror"value="{{ $user->phone_number }}">
                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file"
                                        class="form-control file-upload-info @error('image') is-invalid @enderror"
                                        placeholder="Upload Image" name="image">
                                    <span class="input-group-append">

                                    </span>
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Role</label>
                                <select name="role_id" class="form-control @error('role_id') is-invalid @enderror">
                                    <option value="">Veuillez sélectionner un rôle</option>
                                    @foreach (App\Models\Role::where('name', '!=', 'patient')->get() as $role)
                                        <option
                                            value="{{ $role->id }}"@if ($user->role_id == $role->id) selected @endif>
                                            {{ $role->name }}</option>
                                    @endforeach

                                </select>
                                @error('role_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group">
                            <label for="exampleTextarea1">Bref Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="exampleTextarea1" rows="4"
                                name="description">{{ $user->description }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <a href="{{ route('doctor.index') }}" class="btn btn-danger"><i class="fa fa-undo"></i>
                            Annuler l'Ajout</a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save"></i> Enregistrer le Médecin
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
