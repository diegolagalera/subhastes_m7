@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" name="nom" value="diego" required autofocus>

                                @if ($errors->has('nom'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('cognom') }}</label>

                            <div class="col-md-6">
                                <input id="cognom" type="text" class="form-control{{ $errors->has('cognom') ? ' is-invalid' : '' }}" name="cognom" value="martinez" required autofocus>

                                @if ($errors->has('cognom'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('cognom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="dni" class="col-md-4 col-form-label text-md-right">{{ __('dni') }}</label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control{{ $errors->has('dni') ? ' is-invalid' : '' }}" name="dni" value="47484339b" required autofocus>

                                @if ($errors->has('dni'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('dni') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pais" class="col-md-4 col-form-label text-md-right">{{ __('pais') }}</label>

                            <div class="col-md-6">
                                <input id="pais" type="text" class="form-control{{ $errors->has('pais') ? ' is-invalid' : '' }}" name="pais" value="spain" required autofocus>

                                @if ($errors->has('pais'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('pais') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="codi_postal" class="col-md-4 col-form-label text-md-right">{{ __('codi_postal') }}</label>

                            <div class="col-md-6">
                                <input id="codi_postal" type="text" class="form-control{{ $errors->has('codi_postal') ? ' is-invalid' : '' }}" name="codi_postal" value="43515" required autofocus>

                                @if ($errors->has('codi_postal'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('codi_postal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ciutat" class="col-md-4 col-form-label text-md-right">{{ __('ciutat') }}</label>

                            <div class="col-md-6">
                                <input id="ciutat" type="text" class="form-control{{ $errors->has('ciutat') ? ' is-invalid' : '' }}" name="ciutat" value="amposta" required autofocus>

                                @if ($errors->has('ciutat'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ciutat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telefon" class="col-md-4 col-form-label text-md-right">{{ __('telefon') }}</label>

                            <div class="col-md-6">
                                <input id="telefon" type="text" class="form-control{{ $errors->has('telefon') ? ' is-invalid' : '' }}" name="telefon" value="123123123" required autofocus>

                                @if ($errors->has('telefon'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('telefon') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
