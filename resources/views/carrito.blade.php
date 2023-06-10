@php
    if (isset($_SESSION['productosComprados'])) {
        $productosComprados = $_SESSION['productosComprados'];
    } else {
        $_SESSION['productosComprados'] = [];
        $productosComprados = $_SESSION['productosComprados'];
    }
    $total = 0;
    foreach ($productosComprados as $producto) {
        $precioTotalProducto = $producto['precio'] * $producto['cantidad'];
        $total += $precioTotalProducto;
    }
@endphp
@extends ('layouts.mainLayout')
@section('content-title', 'Carrito')
@section('content-area')
    <h1 class="link-info h1 py-3">Carrito</h1>
    <hr>
    <br>
    <form action="{{ route('actualizarCantidadCarrito') }}" method="post">
        @csrf
        <div class="table-responsive">
            <table class="table table-dark table-striped table-hover" id="tablaCarrito">
                <thead class='bg-secondary text-white'>
                    <tr class="table-active h5">
                        <th scope="col">IMAGEN</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">PRECIO</th>
                        <th scope="col">CANTIDAD</th>
                        <th scope="col">PRECIO</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($productosComprados) == 0)
                        <tr id="carritoVacio">
                            <td colspan="5">
                                <h5 class="h3">No has agregado productos</h5>
                            </td>
                        </tr>
                    @else
                        @foreach ($productosComprados as $producto)
                            <tr>
                                <td>
                                    <img src="/images/productos/{{ $producto['imagen'] }}"
                                        alt="Imagen de {{ $producto['nombre'] }}">
                                </td>
                                <td class='text-table align-middle h4'>
                                    {{ $producto['nombre'] }}
                                </td>
                                <td class='text-table align-middle h4 text-nowrap'>
                                    @priceformat($producto['precio'])
                                </td>
                                <td class='text-table align-middle'>
                                    <select name="productos[{{ $producto['id'] }}]" id="productos[{{ $producto['id'] }}]"
                                        class="form-select" onchange="this.form.submit()">
                                        @for ($i = 0; $i <= intval($producto['stock']); $i++)
                                            <option {{ intval($producto['cantidad']) == $i ? 'selected' : '' }}>
                                                {{ $i }}
                                            </option>
                                        @endfor
                                    </select>
                                </td>
                                <td class='text-table align-middle h4 text-nowrap'>
                                    @priceformat($producto['precio'] * $producto['cantidad'])
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
                <tfoot class='bg-secondary text-white'>
                    <tr class="table-active h5">
                        <th class='text-table align-middle'>
                            <h3>Total (EUR)</h3>
                        </th>
                        <th colspan="3"></th>
                        <th class='text-table align-middle text-nowrap'>
                            <h3 id="totalCarrito">@priceformat($total)</h3>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </form>
    <p class="lead">
        <a href="{{ route('compraRealizada') }}" class="btn btn-lg btn-info fw-bold border-white" id="botonComprar">
            Comprar productos
        </a>
    </p>
    <script>
        const tablaCarrito = document.getElementById("tablaCarrito");
        const botonComprar = document.getElementById("botonComprar");

        if (tablaCarrito.children[1].firstElementChild.id == 'carritoVacio') {
            botonComprar.disabled = true;
        }
    </script>
@endsection
