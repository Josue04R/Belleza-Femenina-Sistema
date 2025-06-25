{{-- filepath: resources/views/inicio/inicio.blade.php --}}
@extends('layouts.app3')


@section('content')
   @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif


    <div class="row">
        @foreach ($productos as $producto)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $producto->imagenUrl ?? 'https://via.placeholder.com/300' }}" class="card-img-top" alt="{{ $producto->nombre }}">
                    <div class="card-body text-center">
                        <h5>{{ $producto->nombre }}</h5>
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-producto-{{ $producto->id }}">
                            Añadir al carrito
                        </button>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="modal-producto-{{ $producto->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form action="{{ route('carrito.agregar') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title">{{ $producto->nombre }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                            </div>
                            <div class="modal-body row">
                                <div class="col-md-5">
                                    <img src="{{ $producto->imagenUrl ?? 'https://via.placeholder.com/300' }}" class="img-fluid" alt="{{ $producto->nombre }}">
                                </div>
                                <div class="col-md-7">


                                    <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
                                    <p><strong>Material:</strong> {{ $producto->material }}</p>
                                    <p><strong>Estado:</strong> {{ $producto->estado ?? 'Disponible' }}</p>
                                    <p><strong>Categoría:</strong> {{ $producto->categoria->categoria ?? 'N/A' }}</p>


                                    @if ($producto->variantes->isNotEmpty())
                                        <input type="hidden" name="productoVarianteId" id="productoVarianteId-{{ $producto->id }}" value="{{ $producto->variantes[0]->id }}">


                                        <div class="mb-2">
                                            <label for="talla-{{ $producto->id }}"><strong>Talla:</strong></label>
                                            <select id="talla-{{ $producto->id }}" class="form-select talla-select" data-product="{{ $producto->id }}">
                                                @foreach ($producto->variantes->pluck('talla')->unique() as $talla)
                                                    <option value="{{ $talla }}">{{ $talla }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="mb-2">
                                            <label for="color-{{ $producto->id }}"><strong>Color:</strong></label>
                                            <select id="color-{{ $producto->id }}" class="form-select color-select" data-product="{{ $producto->id }}">
                                                @foreach ($producto->variantes->pluck('color')->unique() as $color)
                                                    <option value="{{ $color }}">{{ $color }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="mb-2">
                                            <label><strong>Precio:</strong></label>
                                            <p id="precio-{{ $producto->id }}" class="fw-bold text-success h5">${{ number_format($producto->variantes[0]->precio, 2) }}</p>
                                        </div>


                                        <div class="mb-2">
                                            <label for="cantidad-{{ $producto->id }}"><strong>Cantidad:</strong></label>
                                            <input type="number" name="cantidad" id="cantidad-{{ $producto->id }}" value="1" min="1" max="{{ $producto->variantes[0]->stock }}" class="form-control cantidad-input" required>
                                            <small id="stock-{{ $producto->id }}" class="text-muted">Stock disponible: {{ $producto->variantes[0]->stock }}</small>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Confirmar y agregar al carrito</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            @foreach ($productos as $producto)
                const variantes{{ $producto->id }} = @json($producto->variantes);
                const tallaSelect{{ $producto->id }} = document.querySelector('#talla-{{ $producto->id }}');
                const colorSelect{{ $producto->id }} = document.querySelector('#color-{{ $producto->id }}');
                const precioElem{{ $producto->id }} = document.getElementById('precio-{{ $producto->id }}');
                const cantidadInput{{ $producto->id }} = document.getElementById('cantidad-{{ $producto->id }}');
                const stockElem{{ $producto->id }} = document.getElementById('stock-{{ $producto->id }}');
                const varianteIdInput{{ $producto->id }} = document.getElementById('productoVarianteId-{{ $producto->id }}');


                function actualizarDatosProducto() {
                    const talla = tallaSelect{{ $producto->id }}.value;
                    const color = colorSelect{{ $producto->id }}.value;


                    const variante = variantes{{ $producto->id }}.find(v => v.talla === talla && v.color === color);


                    if (variante) {
                        precioElem{{ $producto->id }}.innerText = `$${parseFloat(variante.precio).toFixed(2)}`;
                        cantidadInput{{ $producto->id }}.max = variante.stock;
                        cantidadInput{{ $producto->id }}.value = 1;
                        stockElem{{ $producto->id }}.innerText = `Stock disponible: ${variante.stock}`;
                        varianteIdInput{{ $producto->id }}.value = variante.id;
                        cantidadInput{{ $producto->id }}.disabled = variante.stock === 0;
                    } else {
                        precioElem{{ $producto->id }}.innerText = 'N/A';
                        cantidadInput{{ $producto->id }}.max = 0;
                        cantidadInput{{ $producto->id }}.value = 0;
                        stockElem{{ $producto->id }}.innerText = 'No disponible';
                        varianteIdInput{{ $producto->id }}.value = '';
                        cantidadInput{{ $producto->id }}.disabled = true;
                    }
                }


                tallaSelect{{ $producto->id }}.addEventListener('change', actualizarDatosProducto);
                colorSelect{{ $producto->id }}.addEventListener('change', actualizarDatosProducto);


                actualizarDatosProducto();
            @endforeach
        });
    </script>
@endsection