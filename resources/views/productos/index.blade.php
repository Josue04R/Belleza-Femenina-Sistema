@extends('layouts.app2')

@section('title', 'Gestión de Productos')

@section('content')
<style>
    :root {
        --color-primario: #912f5d;
        --color-primario-hover: #7a294d;
        --color-secundario: #f2aec7;
        --color-texto-secundario: #6b0b21;
    }

    .btn-personalizado {
        background-color: var(--color-primario);
        color: white;
        border: none;
        border-radius: 30px;
        padding: 8px 22px;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-personalizado:hover {
        background-color: var(--color-primario-hover);
        color: white;
        transform: scale(1.03);
        box-shadow: 0 4px 12px rgba(145, 47, 93, 0.4);
    }

    .btn-outline-personalizado {
        border: 2px solid var(--color-primario);
        color: var(--color-primario);
        background-color: transparent;
        border-radius: 30px;
        padding: 6px 18px;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-outline-personalizado:hover {
        background-color: var(--color-secundario);
        color: var(--color-texto-secundario);
        transform: scale(1.03);
    }

    .btn-outline-eliminar {
        border: 2px solid #dc3545;
        color: #dc3545;
        background-color: transparent;
        border-radius: 30px;
        padding: 6px 18px;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-outline-eliminar:hover {
        background-color: #f8d7da;
        color: #721c24;
        transform: scale(1.03);
    }

    .table thead {
        background-color: var(--color-secundario);
        color: var(--color-texto-secundario);
    }

    .modal-header {
        background-color: var(--color-primario);
        color: white;
    }

    .btn-close-white {
        filter: invert(1);
    }

    .form-control:focus {
        border-color: var(--color-primario);
        box-shadow: 0 0 0 0.2rem rgba(145, 47, 93, 0.25);
    }
</style>

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

    <div class="table-responsive shadow-sm rounded">
        <table class="table table-striped table-hover align-middle">
            <thead class="text-center">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td>1</td>
                    <td>Camiseta Blanca</td>
                    <td>Ropa Casual</td>
                    <td>$12.99</td>
                    <td>35</td>
                    <td>
                        <div class="d-flex justify-content-center gap-2 flex-wrap">
                            <a href="{{ route('productos.ver', 1) }}" class="btn btn-sm btn-outline-personalizado">Ver</a>
                            <a href="{{ route('productos.editar', 1) }}" class="btn btn-sm btn-outline-personalizado">Editar</a>
                            <button class="btn btn-sm btn-outline-eliminar" data-bs-toggle="modal" data-bs-target="#modalEliminarProducto">Eliminar</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
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
