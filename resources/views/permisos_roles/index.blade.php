@extends('layouts.app2')

@section('title', 'Gestión de Permisos y Roles')

@section('content')
<style>
    :root {
        --color-primario: #912f5d;
        --color-primario-hover: #7a294d;
        --color-secundario: #f2aec7;
        --color-texto-secundario: #6b0b21;
    }

    #buscarRol {
        max-width: 320px;
        transition: box-shadow 0.3s ease;
    }
    #buscarRol:focus {
        box-shadow: 0 0 8px rgba(145, 47, 93, 0.6);
        border-color: var(--color-primario);
        outline: none;
    }

    .table-responsive {
        background-color: #fff;
        border-radius: 0.75rem;
        overflow: hidden;
        box-shadow: 0 0.25rem 0.75rem rgba(145, 47, 93, 0.2);
    }

    .table thead {
        background: linear-gradient(90deg, var(--color-primario), var(--color-primario-hover));
        color: white;
        font-weight: 600;
    }

    .table tbody tr:hover {
        background-color: #fde9f0;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .badge-permiso {
        background-color: var(--color-secundario);
        color: var(--color-texto-secundario);
        font-weight: 500;
    }

    .btn-primario {
        background-color: var(--color-primario);
        color: white;
    }
    .btn-primario:hover {
        background-color: var(--color-primario-hover);
    }
    .btn-outline-primario {
        border-color: var(--color-primario);
        color: var(--color-primario);
    }
    .btn-outline-primario:hover {
        background-color: var(--color-primario);
        color: white;
    }

    .modal-header.bg-primario {
        background: linear-gradient(90deg, var(--color-primario), var(--color-primario-hover));
        color: white;
    }
    .modal-content.border-primario {
        border: 2px solid var(--color-primario);
    }

    select[multiple] {
        height: 130px;
    }
</style>

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
