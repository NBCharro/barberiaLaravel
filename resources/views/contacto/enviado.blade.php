@extends ('layouts.mainLayout')
@section('content-title', 'Contacto')
@section('content-area')
    <h1 class="link-info h1">Contacto</h1>
    <hr>
    <br>
    <div class="container">
        <main>
            <div class="row g-5">
                <div class="col-md-5 col-lg-6">
                    <div class="p-4 text-bg-dark rounded-3">
                        <h2>Teléfono</h2>
                        <p class="lead">111 222 333</p>
                    </div>
                    <div class="p-4 text-bg-dark rounded-3">
                        <h2>Email</h2>
                        <p class="lead">info@barberialaravel.com</p>
                    </div>
                    <div class="p-4 text-bg-dark rounded-3">
                        <h2>Direccion</h2>
                        <p class="lead">Calle de Cuchilleros 15 28005 Madrid</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-6">
                    <br>
                    <br>
                    <br>
                    <h3 class="link-info">Su mensaje se ha enviado correctamente</h3>
                    <br>
                    <br>
                    <br>
                    <p class="lead">
                        <a href="{{ route('inicio') }}" class="btn btn-lg btn-info fw-bold border-white">
                            Volver
                        </a>
                    </p>
                </div>
            </div>
        </main>
    </div>
@endsection
