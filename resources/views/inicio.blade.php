@extends ('layout.mainLayout')
@section('content-title', 'Peluqueria Laravel')
@section('content-area')
    <div id="inicio">
        <img class="mb-4" class="rounded mx-auto d-block" src="./images/logoCompletoNegro.png" alt="Logo Barberia Laravel"
            width="250" height="100">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <p class="lead">
                <a href="{{ route('reservas.index') }}" class="btn btn-lg btn-info fw-bold border-white">Reservar cita</a>
            </p>
            <div class="form-signin w-100 m-auto">
                <form>
                    <h2 class="h2 mb-3 fw-normal">Debe estar registrado para poder comprar</h2>
                    <div class="form-floating">
                        <input type="text" class="form-control text-bg-dark" id="floatingInput" placeholder="Usuario"
                            required>
                        <label for="floatingInput">Usuario</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control text-bg-dark" id="floatingPassword"
                            placeholder="Contraseña" required>
                        <label for="floatingPassword">Contraseña</label>
                    </div>
                    <br>
                    <div>
                        <button class="btn btn-lg btn-info fw-bold border-white" type="submit">
                            Login
                        </button>
                        <button class="btn btn-lg btn-info fw-bold border-white" type="submit">
                            Registrarse
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
