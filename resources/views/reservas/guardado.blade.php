@extends('layout.mainLayout')
@section('page-title', 'Reserva cita')
@section('content-area')
    @php
        $meses = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
        $dia = intval(substr($fecha, 8));
        $mes = intval(substr($fecha, 5, 2));
        $year = substr($fecha, 0, 4);
    @endphp
    <h1 class="link-info h1">{{ $servicio }}</h1>
    <hr>
    <div class='container-fluid'>
        <h2>{{ $nombre }} has hecho una reserva para las {{ $hora }} h</h2>
        <h2>del {{ $dia }} de {{ $meses[$mes] }} de {{ $year }}</h2>
        @if ($trabajadora != 'Cualquiera')
            <h2>{{ $trabajadora }} te atendera encantada</h2>
        @else
            <h2>Nuestras barberas te atenderan encantadas</h2>
        @endif
        <br />
        <p class="lead">
            <a href="{{ route('inicio') }}" class="btn btn-lg btn-info fw-bold border-white">
                Volver
            </a>
        </p>
    </div>
@endsection
