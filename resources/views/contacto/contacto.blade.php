@extends ('layout.mainLayout')
@section('content-title', 'Contacto')
@section('content-area')
    <h1 class="link-info h1">Contacto</h1>
    <p class="lead">Si quieres contactar con nosotros rellena el siguiente formulario</p>
    <hr>
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li><strong>{{ $error }}</strong></li>
                    @endforeach
                </ul>
            </div>
            <hr>
        @endif
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
                        <h2>Dirección</h2>
                        <p class="lead">Calle Leñeros 23, 2400 León</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-6">
                    <form action="{{ route('contactos.store') }}" method="post">
                        @csrf
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    placeholder="Nombre">
                            </div>

                            <div class="col-sm-6">
                                <label for="telefono" class="form-label">Teléfono <span
                                        class="text-muted">(Opcional)</span></label>
                                <input type="text" class="form-control" id="telefono" name="telefono">
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="nombre@email.com"
                                    name="email">
                            </div>

                            <div class="col-12">
                                <label for="asunto" class="form-label">Asunto</label>
                                <div class="input-group has-validation">
                                    <input type="text" class="form-control" id="asunto" placeholder="Asunto"
                                        name="asunto">
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="mensaje" class="form-label">Mensaje</label>
                                <textarea class="form-control" name="mensaje" id="mensaje" rows="3" placeholder="Escribe aqui tu mensaje"></textarea>
                            </div>

                            <hr class="my-4">

                            <button class="w-100 btn btn-lg btn-info fw-bold border-white" type="submit">
                                Enviar mensaje
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
@endsection
