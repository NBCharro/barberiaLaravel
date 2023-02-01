@extends('layouts.app')

@section('content')
    <h1 class="link-info h1 py-3">Regístrate para hacer tus compras en línea</h1>
    <hr>
    <div class="row g-0 text-center">
        <div class="col-2"></div>

        <form method="POST" action="{{ route('register') }}" class="col-8">
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name"
                        placeholder="Introduzca su nombre">

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email"
                        placeholder="Introduzca su direccion de email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password" placeholder="Introduzca su contraseña">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password-confirm"
                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                        autocomplete="new-password" placeholder="Vuelva a introducir su contraseña">
                </div>
            </div>

            <div class="row mb-0 ">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-lg btn-info fw-bold border-white">
                        {{ __('Register') }}
                    </button>
                    <a href="{{ route('inicio') }}" class="btn btn-lg btn-info fw-bold border-white">
                        Volver
                    </a>
                </div>
            </div>
        </form>
    </div>
@endsection
