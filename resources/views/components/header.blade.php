<header class="container-fluid main-header p-3">
    <nav class="navbar navbar-expand-sm bg-dark" data-bs-theme="dark">
        <div>
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logoCompletoNegro.png') }}" alt="Logo" width="180"
                    class="d-inline-block align-text-top">
            </a>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <ul class="nav nav-pills">
                <li class="nav-item ">
                    <a href="{{ route('inicio') }}"
                        class="nav-link menu-item {{ Route::is('inicio') ? 'active' : 'link-info' }} ">
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('reservas.index') }}"
                        class="nav-link menu-item
                        {{ Route::is('reservas.index') || Route::is('reservas.store') ? 'active' : 'link-info' }}
                    ">
                        Reservar cita
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('empresa') }}"
                        class="nav-link menu-item {{ Route::is('empresa') ? 'active' : 'link-info' }}">
                        Empresa
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('servicios') }}"
                        class="nav-link menu-item {{ Route::is('servicios') ? 'active' : 'link-info' }}">
                        Servicios
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contactos.index') }}"
                        class="nav-link menu-item {{ Route::is('contactos.index') || Route::is('contactos.store') ? 'active' : 'link-info' }}">
                        Contacto
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('productos.index') }}"
                        class="nav-link menu-item
                        {{ Route::is('productos.index') || Route::is('productos.show') ? 'active' : 'link-info' }}
                    ">
                        Tienda
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('carrito') }}"
                        class="nav-link menu-item {{ Route::is('carrito') || Route::is('agregarProductoCarrito') ? 'active' : 'link-info' }}">
                        Carrito
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="{{ route('productos.index') }}"
                        class="nav-link menu-item
                        {{ Route::is('productos.index') || Route::is('productos.show') ? 'active' : 'link-info' }}
                    ">
                        Almacen
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('carrito') }}"
                        class="nav-link menu-item {{ Route::is('carrito') || Route::is('agregarProductoCarrito') ? 'active' : 'link-info' }}">
                        Pedido
                    </a>
                </li> --}}
            </ul>
        </div>
    </nav>
</header>
