@extends('layouts.app3')

@section('page_css')
  <link href="{{ asset('css/inicio/styles.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- Alertas (solo diseño mejorado) -->
    @if(session('success'))
        <div class="alert alert-success alert-elegante alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i>
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger alert-elegante alert-dismissible fade show" role="alert">
            <i class="fas fa-exclamation-circle me-2"></i>
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Productos - Solo rediseño visual -->
    <div class="container-productos">
        <div class="productos-grid">
            @foreach ($productos as $producto)
                <!-- Tarjeta de Producto (nuevo diseño) -->
                <div class="producto-card">
                    @if($producto->destacado)
                        <span class="producto-badge">⭐ Destacado</span>
                    @endif
                    
                    <div class="producto-imagen-container">
                        <img src="{{ $producto->imagenUrl ?? 'https://via.placeholder.com/300' }}" 
                             class="producto-imagen" 
                             alt="{{ $producto->nombre }}">
                    </div>
                    
                    <div class="producto-info">
                        <h3 class="producto-nombre">{{ $producto->nombre }}</h3>
                        
                        @if($producto->variantes->isNotEmpty())
                            <p class="producto-precio">${{ number_format($producto->variantes->min('precio'), 2) }}</p>
                        @endif
                        
                        <button class="producto-btn" 
                                data-bs-toggle="modal" 
                                data-bs-target="#modal-producto-{{ $producto->id }}">
                            <i class="fas fa-shopping-bag me-1"></i> Añadir
                        </button>
                    </div>
                </div>

                <!-- Modal (misma funcionalidad, nuevo diseño) -->
                <div class="modal fade" id="modal-producto-{{ $producto->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <form action="{{ route('carrito.agregar') }}" method="POST">
                                @csrf
                                <div class="modal-header modal-header-rosa">
                                    <h5 class="modal-title">{{ $producto->nombre }}</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="modal-producto-container">
                                        <div class="modal-producto-imagen">
                                            <img src="{{ $producto->imagenUrl ?? 'https://via.placeholder.com/300' }}" 
                                                 alt="{{ $producto->nombre }}">
                                        </div>
                                        <div class="modal-producto-detalles">
                                            <p class="producto-categoria">{{ $producto->categoria->categoria ?? 'General' }}</p>
                                            <p class="producto-descripcion">{{ $producto->descripcion }}</p>
                                            
                                            <div class="producto-especificaciones">
                                                <p><strong>Material:</strong> {{ $producto->material }}</p>
                                                <p><strong>Estado:</strong> {{ $producto->estado ?? 'Disponible' }}</p>
                                            </div>
                                            
                                            @if ($producto->variantes->isNotEmpty()))
                                                <input type="hidden" name="productoVarianteId" id="productoVarianteId-{{ $producto->id }}" value="{{ $producto->variantes[0]->id }}">
                                                
                                                <div class="variantes-container">
                                                    <div class="variante-selector">
                                                        <label for="talla-{{ $producto->id }}">Talla:</label>
                                                        <select id="talla-{{ $producto->id }}" class="form-select" data-product="{{ $producto->id }}">
                                                            @foreach ($producto->variantes->pluck('talla')->unique() as $talla)
                                                                <option value="{{ $talla }}">{{ $talla }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="variante-selector">
                                                        <label for="color-{{ $producto->id }}">Color:</label>
                                                        <select id="color-{{ $producto->id }}" class="form-select" data-product="{{ $producto->id }}">
                                                            @foreach ($producto->variantes->pluck('color')->unique() as $color)
                                                                <option value="{{ $color }}">{{ $color }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="precio-container">
                                                    <div>
                                                        <span class="precio-label">Precio:</span>
                                                        <span id="precio-{{ $producto->id }}" class="precio-valor">
                                                            ${{ number_format($producto->variantes[0]->precio, 2) }}
                                                        </span>
                                                    </div>
                                                    
                                                    <div class="cantidad-container">
                                                        <label for="cantidad-{{ $producto->id }}">Cantidad:</label>
                                                        <div class="cantidad-selector">
                                                            <button type="button" class="cantidad-btn" onclick="this.nextElementSibling.stepDown()">-</button>
                                                            <input type="number" name="cantidad" id="cantidad-{{ $producto->id }}" 
                                                                   value="1" min="1" max="{{ $producto->variantes[0]->stock }}" 
                                                                   class="cantidad-input">
                                                            <button type="button" class="cantidad-btn" onclick="this.previousElementSibling.stepUp()">+</button>
                                                        </div>
                                                        <small id="stock-{{ $producto->id }}" class="stock-disponible">
                                                            Stock: {{ $producto->variantes[0]->stock }}
                                                        </small>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secundario" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-primario">
                                        <i class="fas fa-cart-plus me-1"></i> Agregar al carrito
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
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
                        stockElem{{ $producto->id }}.innerText = `Stock: ${variante.stock}`;
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