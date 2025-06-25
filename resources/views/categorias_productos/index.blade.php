@extends('layouts.app2')

@section('title', 'Gestión de Categorías')

@section('content')

@section('page_css')
  <link href="{{ asset('css/categorias/styles.css') }}" rel="stylesheet">
@endsection

<div class="container py-4">

    <h2 class="mb-4 text-center" style="color: var(--color-primario);">Gestión de Categorías de Producto</h2>

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-3 gap-3">
        <div class="w-100" style="max-width: 300px;">
            <input type="text" class="form-control" placeholder="Buscar categoría...">
        </div>
        <a href="{{ route('categorias.agregar') }}" class="btn btn-personalizado">
            Agregar Nueva Categoría
        </a>
    </div>

    <div class="table-responsive shadow-sm rounded">
        <table class="table table-striped table-hover align-middle">
            <thead class="text-center">
                <tr>
                    <th>#</th>
                    <th>Nombre de la Categoría</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td>1</td>
                    <td>Ropa Casual</td>
                    <td>Prendas informales para uso diario</td>
                    <td>
                        <div class="d-flex justify-content-center gap-2 flex-wrap">
                            <a href="{{ route('categorias.editar', 1) }}" class="btn btn-sm btn-outline-danger">Editar</a>
                            <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalEliminarCategoria">Eliminar</button>
                        </div>
                    </td>
                </tr>
                <!-- Puedes agregar más categorías estáticas aquí -->
            </tbody>
        </table>
    </div>

</div>

<!-- Modal Confirmar Eliminación -->
<div class="modal fade" id="modalEliminarCategoria" tabindex="-1" aria-labelledby="modalEliminarCategoriaLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-danger shadow-sm">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEliminarCategoriaLabel">¿Eliminar Categoría?</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body text-center">
        <i class="bi bi-exclamation-triangle-fill text-danger" style="font-size: 2.5rem;"></i>
        <p class="mt-3">¿Estás seguro de que deseas eliminar esta categoría? Esta acción no se puede deshacer.</p>
        <strong>Categoría:</strong> Ropa Casual
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-personalizado">Sí, Eliminar</button>
      </div>
    </div>
  </div>
</div>
@endsection
