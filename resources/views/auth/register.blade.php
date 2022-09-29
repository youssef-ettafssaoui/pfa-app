@extends('auth.layouts.master')

@section('content')
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 py-5">
                <h3>Création du Compte :</h3>
                <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group first">
                                <label for="name">Nom Complet :</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" placeholder="Saisir votre Nom Complet.." id="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group first">
                                <label for="gender">Sexe :</label>
                                <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                    <option value="">Veillez sélectionner votre Sexe</option>
                                    <option value="Homme">Homme</option>
                                    <option value="femme">Femme</option>
                                </select>
                            </div>
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group first">
                                <label for="email">Adresse Email :</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" placeholder="Saisir votre Adresse Email.." required
                                    autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                            <div class="form-group last mb-3">
                                <label for="password">Mot de Passe :</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Saisir votre Mot de Passe.."name="password" required
                                    autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group last mb-3">
                                <label for="password-confirm">Confirmer Mot de Passe :</label>
                                <input id="password-confirm" type="password" class="form-control"
                                    placeholder="Confirmer votre Mot de Passe.." name="password_confirmation" required
                                    autocomplete="new-password">
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="CRÉER COMPTE" class="btn px-5 btn-primary">
                </form>
                <div class="d-flex mb-5 mt-4">
                    <div class="d-flex">
                        <span class="caption">Vous avez déja un compte ? Vous Pouvez se connecter en cliquant
                            <a href="/login" class="text text-primary">Ici.</a>
                        </span>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
