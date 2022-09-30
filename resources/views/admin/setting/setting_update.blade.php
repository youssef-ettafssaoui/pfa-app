@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-settings bg-warning"></i>
                    <div class="d-inline">
                        <h5>Paramètres du Site</h5>
                        <span>Modifier le Site</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            @if (Session::has('message'))
                <div class="alert bg-primary alert-primary text-white" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <form method="post" class="forms-sample" action="{{ route('update.sitesetting') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <h5 class="box-title text-warning mb-0 mt-20"><i class="ik ik-edit me-15"></i> Paramètre du Site du
                            Cabinet :</h5>
                        <hr class="my-15">
                        <div class="form-group">
                            <input type="hidden" name="id" value="{{ $setting->id }}">
                        </div>

                        <div class="row">

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="">Site Logo</label>
                                    <input type="file" name="logo" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label">Numéro de Téléphone 01 <span style="color:red">*</span>
                                    </label>
                                    <input type="text" name="phone_one" class="form-control"
                                        value="{{ $setting->phone_one }}" placeholder="Numéro de Téléphone 01">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label">Numéro de Téléphone 02 <span style="color:red">*</span>
                                    </label>
                                    <input type="text" name="phone_two" class="form-control"
                                        value="{{ $setting->phone_two }}" placeholder="Numéro de Téléphone 02">
                                </div>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label">Adresse Email <span style="color:red">*</span>
                                    </label>
                                    <input type="email" name="email" class="form-control" value="{{ $setting->email }}"
                                        placeholder="Adresse Email">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Nom d'Hopital <span style="color:red">*</span>
                                    </label>
                                    <input type="text" name="hopital_name" class="form-control"
                                        placeholder="Nom d'Hopital" value="{{ $setting->hopital_name }}">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label">Adresse d'Hopital <span style="color:red">*</span> </label>
                                    <input type="text" name="hopital_address" class="form-control"
                                        placeholder="Adresse d'Hopital" value="{{ $setting->hopital_address }}">
                                </div>
                            </div>
                        </div>

                        <h5 class="box-title text-warning mb-0 mt-20">
                            <i class="ik ik-settings me-15"></i> Réseaux Sociaux :
                        </h5>
                        <hr class="my-15">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label"> <i class="ik ik-facebook me-15"></i> Facebook d'Hopital :
                                        <span style="color:red">*</span> </label>
                                    <input type="text" name="facebook" class="form-control"
                                        placeholder="url de la Page Facebook" value="{{ $setting->facebook }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label"><i class="ik ik-twitter me-15"></i> Twitter d'Hopital : <span
                                            style="color:red">*</span> </label>
                                    <input type="text" name="twitter" class="form-control"
                                        placeholder="url de la Page Twitter" value="{{ $setting->twitter }}">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label"><i class="ik ik-linkedin me-15"></i> Linkedin du Cabinet
                                        <span style="color:red">*</span> </label>
                                    <input type="text" name="linkedin" class="form-control"
                                        placeholder="url de la Page Linkedin" value="{{ $setting->linkedin }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label"><i class="ik ik-youtube me-15"></i> Youtube du Cabinet <span
                                            style="color:red">*</span> </label>
                                    <input type="text" name="youtube" class="form-control"
                                        placeholder="url de la Page Youtube" value="{{ $setting->youtube }}">
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-dark">
                            <i class="fa fa-save"></i> Enregistrer les Paramètre
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
