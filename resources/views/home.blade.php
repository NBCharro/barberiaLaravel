@extends('layouts.app')

@section('content')
    <h1 class="link-info h1">Bienvenido a tu cuenta</h1>
    <hr>
    <br>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <h2>¡Has iniciado sesión con éxito!</h2>
    <br>
    <br>
    <p class="lead">
        <a href="{{ route('productos.index') }}" class="btn btn-lg btn-info fw-bold border-white">
            Ir a la tienda
        </a>
    </p>
@endsection
