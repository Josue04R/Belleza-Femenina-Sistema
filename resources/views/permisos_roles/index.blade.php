@extends('layouts.app2')

@section('title', 'Gestión de Permisos y Roles')

@section('page_css')
  <link href="{{ asset('css/permisos_roles/styles.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="container py-5">
    <h2 class="mb-5 text-center" style="color: var(--color-primario); text-transform: uppercase;">Gestión de Permisos y Roles</h2>

    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
        <input id="buscarRol" type="text" class="form-control shadow-sm" placeholder="Buscar roles...">
        <a href="{{ route('permisos_roles.agregar') }}" class="btn btn-primario shadow">
            <i class="bi bi-plus-circle me-2"></i> Agregar Nuevo Rol
        </a>

    </div>

    <div class="table-responsive">
        <table class="table table-striped align-middle mb-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Rol</th>
                    <th>Descripción</th>
                    <th>Permisos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><strong>Administrador</strong></td>
                    <td>Acceso total</td>
                    <td>
                        <span class="badge badge-permiso me-1">Crear</span>
                        <span class="badge badge-permiso me-1">Editar</span>
                        <span class="badge badge-permiso me-1">Eliminar</span>
                        <span class="badge badge-permiso me-1">Ver</span>
                    </td>
                    <td>
                        <div class="d-flex gap-2 justify-content-center">
                            <a href="{{ route('permisos_roles.editar', 1) }}" class="btn btn-sm btn-outline-primario"><i class="bi bi-pencil"></i></a>
                            <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalEliminarRol"><i class="bi bi-trash"></i></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Eliminar -->
<div class="modal fade" id="modalEliminarRol" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content border-primario shadow">
            <div class="modal-header bg-primario">
                <h5 class="modal-title"><i class="bi bi-exclamation-triangle-fill me-2"></i>Confirmar Eliminación</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <p class="fw-semibold">Esta acción no se puede deshacer.</p>
                <p class="text-danger">Rol: <strong>Administrador</strong></p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primario">Eliminar</button>
            </div>
        </div>
    </div>
</div>
@endsection
