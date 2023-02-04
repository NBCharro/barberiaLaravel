@extends ('layouts.mainLayout')
@section('content-title', 'Carrito')
@section('content-area')
    @php
        $total = 0;
        foreach ($productosComprados as $producto) {
            $precioTotalProducto = $producto['precio'] * $producto['cantidad'];
            $total += $precioTotalProducto;
        }
    @endphp
    <h1 class="link-info h1">Compra realizada</h1>
    <hr>
    <br>
    <table class="table table-dark table-striped table-hover" id="tablaCompraRealizada">
        <thead class='bg-secondary text-white'>
            <tr class="table-active h5">
                <th scope="col">Imagen</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productosComprados as $producto)
                <tr>
                    <td>
                        <img src="/images/productos/{{ $producto['imagen'] }}" alt="Imagen de {{ $producto['nombre'] }}">
                    </td>
                    <td class='text-table align-middle h4'>
                        {{ $producto['nombre'] }}
                    </td>
                    <td class='text-table align-middle h4'>
                        {{ $producto['cantidad'] }}
                    </td>
                    <td class='text-table align-middle h4'>
                        @priceformat($producto['precio'] * $producto['cantidad'])
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot class='bg-secondary text-white'>
            <tr class="table-active h5">
                <th class='text-table align-middle'>
                    <h3>Total (EUR)</h3>
                </th>
                <th colspan="2"></th>
                <th class='text-table align-middle'>
                    <h3>@priceformat($total)</h3>
                </th>
            </tr>
        </tfoot>
    </table>
    <a href="{{ route('inicio') }}" class="btn btn-lg btn-info fw-bold border-white">Volver</a>
@endsection
