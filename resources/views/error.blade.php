@extends ('layout.mainLayout')
@section('content-title', 'Barberia Laravel')
@section('content-area')
    <div class="alert alert-danger" role="alert">
        <h1 class="link-primary h1 py-3">Reservar cita</h1>
        <hr>
        <h3>{{ $mensajeError1 }}</h3>
        <br>
        @if (isset($mensajeError2))
            <h4>{{ $mensajeError2 }}</h4>
        @else
            <h4>Por favor, vuelva a intentarlo más tarde o póngase en contacto con nosotras para más información</h4>
        @endif
        <br>
        <h4>Le agradecemos su paciencia mientras trabajamos para solucionar este problema lo antes posible</h4>
        <br>
        <h3>Gracias por su comprensión</h4>
    </div>
@endsection
