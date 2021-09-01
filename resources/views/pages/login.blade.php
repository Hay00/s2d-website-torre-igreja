@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @elseif(session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <div class="col-md-8">
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

                    <div class="col-md-6">
                        <input type="email" name="email" id="email" class="form-control"
                            placeholder="{{ __('Endereço de E-mail') }}" value="{{ old('email') }}" maxlength="255"
                            required autofocus autocomplete="email" />
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

                    <div class="col-md-6">
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="{{ __('Senha') }}" maxlength="100" required autocomplete="current-password" />
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input name="remember" id="remember" class="form-check-input" type="checkbox"
                                {{ old('remember') ? 'checked' : '' }} />

                            <label class="form-check-label" for="remember">
                                Lembrar
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button class="btn btn-primary" type="submit">Entrar</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
