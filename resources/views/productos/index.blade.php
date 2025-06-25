@extends('layouts.app2')

@section('title', 'Gestión de Productos')

@section('page_css')
  <link href="{{ asset('css/productos/styles.css') }}" rel="stylesheet">
@endsection

@section('content')


<div class="container py-4">
    <h2 class="mb-4 text-center" style="color: var(--color-primario);">Gestión de Productos</h2>

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-3 gap-3">
        <div class="w-100" style="max-width: 300px;">
            <input type="text" class="form-control" placeholder="Buscar producto...">
        </div>
        <a href="{{ route('productos.agregar') }}" class="btn btn-personalizado">
            Agregar Nuevo Producto
        </a>
    </div>

    <table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Precio</th>
            <th>Stock total</th>
            <th>Variantes</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->categoriaProducto->categoria ?? 'Sin categoría' }}</td>
                <td>${{ number_format($producto->precio, 2) }}</td>
                <td>{{ $producto->variantes->sum('stock') }}</td>
                <td>
                    <ul>
                        @foreach($producto->variantes as $variante)
                            <li>
                                Talla: {{ $variante->talla }}, Color: {{ $variante->color }}, Stock: {{ $variante->stock }}, Precio: ${{ number_format($variante->precio, 2) }}
                            </li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</div>

<!-- Modal Confirmar Eliminación -->
<div class="modal fade" id="modalEliminarProducto" tabindex="-1" aria-labelledby="modalEliminarProductoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-danger shadow-sm">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEliminarProductoLabel">¿Eliminar Producto?</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body text-center">
        <i class="bi bi-exclamation-triangle-fill text-danger" style="font-size: 2.5rem;"></i>
        <p class="mt-3">¿Estás seguro de que deseas eliminar este producto?</p>
        <strong>Producto:</strong> Camiseta Blanca
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-outline-personalizado" data-bs-dismiss="modal">Cancelar</button>
        <form method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-personalizado">Sí, Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
