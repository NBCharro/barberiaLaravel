<header class="container-fluid main-header p-3">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('inicio') }}">
                <img src="{{ asset('images/logoCompletoNegro.png') }}" alt="Logo" width="180"
                    class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav nav nav-pills mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{ route('inicio') }}"
                            class="px-3 nav-link menu-item {{ Route::is('inicio') ? 'active text-white' : 'link-info' }}">
                            Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('reservas.index') }}"
                            class="px-3 nav-link menu-item
                        {{ Route::is('reservas.index') || Route::is('reservas.store') ? 'active text-white' : 'link-info' }}
                    ">
                            Reservar cita
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('empresa') }}"
                            class="px-3 nav-link menu-item {{ Route::is('empresa') ? 'active text-white' : 'link-info' }}">
                            Empresa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('servicios') }}"
                            class="px-3 nav-link menu-item {{ Route::is('servicios') ? 'active text-white' : 'link-info' }}">
                            Servicios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contactos.index') }}"
                            class="px-3 nav-link menu-item {{ Route::is('contactos.index') || Route::is('contactos.store') ? 'active text-white' : 'link-info' }}">
                            Contacto
                        </a>
                    </li>
                    @if (Auth::check())
                        <li class="nav-item">
                            <a href="{{ route('productos.index') }}"
                                class="px-3 nav-link menu-item
                    {{ Route::is('productos.index') || Route::is('productos.show') ? 'active text-white' : 'link-info' }}
                    ">
                                Tienda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('carrito') }}"
                                class="px-3 nav-link menu-item {{ Route::is('carrito') || Route::is('agregarProductoCarrito') ? 'active text-white' : 'link-info' }}">
                                Carrito
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
