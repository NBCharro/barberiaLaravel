@extends ('layouts.mainLayout')
@section('content-title', 'Catalogo de productos')
@section('content-area')
    <h1 class="link-info h1 py-3">Catálogo de productos</h1>
    <hr>
    <table class="table table-dark table-striped table-hover" id="tablaProductos">
        <thead class='bg-secondary text-white'>
            <tr class="table-active h5">
                <th scope="col">IMAGEN</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">CATEGORIA</th>
                <th scope="col">PRECIO</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>
                        <img src="/images/productos/{{ $producto->imagen }}" alt="Imagen de {{ $producto->nombre }}"
                            width="100px" height="100px" />
                    </td>
                    <td class='text-table align-middle'>
                        {{ $producto->nombre }}
                    </td>
                    <td class='text-table align-middle'>
                        {{ $producto->categoria }}
                    </td>
                    <td class='text-table align-middle text-nowrap' name="precio">
                        @priceformat($producto->precio)
                    </td>
                    <td class='text-table align-middle'>
                        <a href="{{ route('productos.show', ['producto' => $producto]) }}">
                            <span class="material-icons text-primary">search</span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
