@extends('admin.layouts.master')

@section('content')
    <div class="container">
        @if (Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif
        <div class="row ">

            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-primary text-white font-weight-bold">Informations Personnelles </div>

                    <div class="card-body">
                        <p>Nom Complet : {{ auth()->user()->name }}</p>
                        <p>Email : {{ auth()->user()->email }}</p>
                        <p>Adresse de Résidence : {{ auth()->user()->address }}</p>
                        <p>Numéro de Téléphone : {{ auth()->user()->phone_number }}</p>
                        <p>Sexe : {{ auth()->user()->gender }}</p>
                        <p>Bref description : {{ auth()->user()->description }}</p>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white font-weight-bold">Modifier Informations Personnelles</div>

                    <div class="card-body">
                        <form action="{{ route('profile.store') }}" method="post">@csrf
                            <div class="form-group">
                                <label>Nom Complet</label>
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    value="{{ auth()->user()->name }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label>Adresse de Résidence</label>
                                <input type="text" name="address" class="form-control"
                                    value="{{ auth()->user()->address }}">

                            </div>
                            <div class="form-group">
                                <label>Numéro de Télephone</label>
                                <input type="text" name="phone_number" class="form-control"
                                    value="{{ auth()->user()->phone_number }}">

                            </div>
                            <div class="form-group">
                                <label>Sexe</label>
                                <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                    <option value="">select gender</option>
                                    <option value="male" @if (auth()->user()->gender === 'male') selected @endif>Male</option>
                                    <option value="female" @if (auth()->user()->gender === 'female') selected @endif>Female</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="form-group">
                                    <label>Bio</label>
                                    <textarea name="description" class="form-control">{{ auth()->user()->description }}</textarea>

                                </div>
                                <div class="form-group">

                                    <button class="btn btn-primary" type="submit"> <i class="ik ik-save"></i> Mettre à
                                        jour</button>

                                </div>

                            </div>

                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-primary text-white font-weight-bold">Modifier Image</div>
                    <form action="{{ route('profile.pic') }}" method="post" enctype="multipart/form-data">@csrf
                        <div class="card-body">
                            <center>
                                @if (!auth()->user()->image)
                                    <img src="/images/3Dz1og01c2vXjbjmfTskpLqdVGEB2Qmpg1DLROiR.png" width="100%">
                                @else
                                    <img src="/profile/{{ auth()->user()->image }}" width="100%">
                                @endif
                            </center>

                            <br /> <br />
                            <input type="file" name="file" class="form-control" required="">
                            <br>
                            @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <button type="submit" class="btn btn-primary"> <i class="ik ik-save"></i> Mettre à
                                jour</button>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
