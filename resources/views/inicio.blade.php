@extends ('layouts.mainLayout')
@section('content-title', 'Peluqueria Laravel')
@section('content-area')
    <div id="inicio">
        <img class="mb-4" class="rounded mx-auto d-block" src="./images/logoCompletoNegro.png" alt="Logo Barberia Laravel"
            width="250" height="100">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <p class="lead">
                <a href="{{ route('reservas.index') }}" class="btn btn-lg btn-info fw-bold border-white">Reservar cita</a>
            </p>
            <div class="form-signin w-100 m-auto" id="formularioLogin">
                @if (Auth::check())
                    <p class="lead">
                        <a href="{{ route('productos.index') }}" class="btn btn-lg btn-info fw-bold border-white">
                            Ir a la tienda
                        </a>
                    </p>
                    <a class="btn btn-lg btn-warning fw-bold border-white" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <h2 class="h2 mb-3 fw-normal">Debe estar registrado para poder comprar</h2>
                        <div class="form-floating">
                            <input id="email" type="email"
                                class="form-control text-bg-dark @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="email">Introduce: user@email.com</label>
                        </div>
                        <div class="form-floating">
                            <input id="password" type="password"
                                class="form-control text-bg-dark @error('password') is-invalid @enderror" name="password"
                                required autocomplete="current-password" placeholder="Contraseña">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <label for="password">Introduce: password</label>
                        </div>
                        <div class="row mb-3">
                            <div class="form-check">
                                <input type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">Recordar usuario y contraseña</label>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-lg btn-info fw-bold border-white">Login</button>
                            <a href="{{ route('register') }}" class="btn btn-lg btn-info fw-bold border-white">
                                Registrarse
                            </a>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link text-warning" href="{{ route('password.request') }}">¿Has olvidado la
                                contraseña?</a>
                        @endif
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection
