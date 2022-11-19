@extends('auth.layouts.master')

@section('content')
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-7 py-5">
                <h3>Se Connecter</h3>
                <p>Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
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
                        <div class="col-md-12">
                            <div class="form-group first">
                                <label for="password">Mot de Passe :</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    value="{{ old('password') }}" placeholder="Saisir votre Mot de Passe.." required
                                    autocomplete="password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <input type="submit" value="SE CONNECTER" class="btn px-5 btn-primary">
                </form>
                <div class="d-flex mb-5 mt-4">
                    <div class="d-flex">
                        <span class="caption">Vous n'avez pas encore un compte ? Vous pouvez le créer en cliquant
                            <a href="/register" class="text text-primary">Ici.</a></span>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
