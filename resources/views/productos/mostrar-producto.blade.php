@extends('layout.mainLayout')
@section('content-title', 'Peluqueria Laravel')
@section('content-area')
    <h1 class="link-info h1 py-3">{{ $producto->nombre }}</h1>
    <hr>
    <form action="{{ route('actualizarCarrito') }}" method="post">
        @csrf
        <div class="row featurette pb-4 pt-4">
            <div class="col-md-5 order-md-1">
                <img src="/images/productos/{{ $producto->imagen }}" alt="Imagen de {{ $producto->nombre }}" width="50%">
            </div>
            <div class="col-md-7 order-md-2 pb-4">
                <div class="row row-cols-1 row-cols-sm-2 g-4">
                    <div class="col d-flex flex-column gap-2">
                        <h4 class="fw-semibold mb-0 h3">Fabricante</h4>
                        <p class="text-muted h4">{{ $producto->fabricante }}</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <h4 class="fw-semibold mb-0 h3">Categoría</h4>
                        <p class="text-muted h4">{{ $producto->categoria }}</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <h4 class="fw-semibold mb-0 h3">Precio</h4>
                        <p class="text-muted h4">@priceformat($producto->precio)</p>
                    </div>
                    <div class="col d-flex flex-column gap-2">
                        <h4 class="fw-semibold mb-0 h3">Stock</h4>
                        <select name="cantidad" id="cantidad" class="form-select">
                            @for ($i = 0; $i <= $producto->stock; $i++)
                                <option>{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-12 order-md-3 border-bottom pb-4 pt-4">
                <div class="col d-flex flex-column gap-2">
                    <h4 class="fw-semibold mb-0 h3">Descripción</h4>
                    <p class="text-muted h4">{{ $producto->descripcion }}</p>
                </div>
            </div>
        </div>
        <div class="pb-4 pt-4">
            <a href="{{ route('productos.index') }}" class="btn btn-lg btn-info fw-bold border-white">
                Volver
            </a>
            <input type="hidden" name="id" value="{{ $producto->id }}">
            <input type="hidden" name="nombre" value="{{ $producto->nombre }}">
            <input type="hidden" name="precio" value="{{ $producto->precio }}">
            <input type="hidden" name="imagen" value="{{ $producto->imagen }}">
            <input type="hidden" name="stock" value="{{ $producto->stock }}">
            <input type="submit" class="btn btn-lg btn-info fw-bold border-white" value="Añadir al carrito">
        </div>
    </form>
@endsection
