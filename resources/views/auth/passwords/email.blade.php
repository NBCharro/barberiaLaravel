@extends('layouts.app')

@section('content')
    <h1 class="link-info h1 py-3">Recupera tu contraseña</h1>
    <hr>
    <br>
    <div class="row g-0 text-center">
        <div class="col-2"></div>
        <div class="col-8">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

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
                <br>
                <hr class="my-4">
                <button type="submit" class="btn btn-lg btn-info fw-bold border-white">
                    Recuperar contraseña
                </button>
                <a href="{{ route('inicio') }}" class="btn btn-lg btn-info fw-bold border-white">
                    Volver
                </a>
            </form>
        </div>
    @endsection
