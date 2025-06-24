@extends('layouts.app2')

@section('title', 'Gestión de Usuarios')

@section('content')
<style>
    :root {
        --color-primario:rgb(214, 51, 127);
        --color-primario-hover:rgb(175, 47, 105);
        --color-secundario: #f2aec7;
        --color-texto-secundario:rgb(185, 36, 71);
    }

    /* Contenedor principal */
    .container {
        max-width: 960px;
    }

    h2 {
        color: var(--color-primario);
        font-weight: 700;
        text-transform: uppercase;
    }

    /* Input búsqueda */
    input.form-control {
        border: 2px solid var(--color-primario);
        border-radius: 0.5rem;
        transition: border-color 0.3s ease;
    }
    input.form-control:focus {
        border-color: var(--color-secundario);
        box-shadow: 0 0 5px var(--color-secundario);
    }

    /* Botón Agregar Nuevo */
    button.btn-danger {
        background-color: var(--color-primario);
        border: 2px solid var(--color-primario);
        border-radius: 50px;
        padding: 0.5rem 1.8rem;
        font-weight: 600;
        transition: background-color 0.3s ease, border-color 0.3s ease, transform 0.2s ease;
        box-shadow: 0 3px 8px rgba(145, 47, 93, 0.3);
    }
    button.btn-danger:hover {
        background-color: var(--color-primario-hover);
        border-color: var(--color-primario-hover);
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(187, 53, 113, 0.6);
    }

    /* Tabla */
    table.table {
        border-radius: 0.7rem;
        overflow: hidden;
        box-shadow: 0 0.5rem 1rem rgba(145, 47, 93, 0.1);
        background: white;
    }
    thead.table-danger {
        background-color: var(--color-secundario) !important;
    }
    thead.table-danger th {
        color: var(--color-texto-secundario) !important;
        font-weight: 700;
        text-transform: uppercase;
    }
    tbody tr:hover {
        background-color: var(--color-secundario);
        color: var(--color-texto-secundario);
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    /* Badges */
    .badge.bg-success {
        background-color: var(--color-primario) !important;
        font-weight: 600;
        font-size: 0.9rem;
        padding: 0.4em 0.75em;
    }

    /* Botones en acciones */
    .btn-outline-danger, .btn-outline-secondary {
        border-radius: 0.5rem;
        font-weight: 600;
        padding: 0.25rem 0.9rem;
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    .btn-outline-danger {
        color: var(--color-primario);
        border-color: var(--color-primario);
    }
    .btn-outline-danger:hover {
        background-color: var(--color-primario);
        color: white;
        border-color: var(--color-primario);
        box-shadow: 0 4px 8px rgba(145, 47, 93, 0.5);
    }
    .btn-outline-secondary {
        color: var(--color-texto-secundario);
        border-color: var(--color-texto-secundario);
    }
    .btn-outline-secondary:hover {
        background-color: var(--color-texto-secundario);
        color: white;
        border-color: var(--color-texto-secundario);
        box-shadow: 0 4px 8px rgba(107, 11, 33, 0.5);
    }

    /* Modal headers */
    .modal-header.bg-danger {
        background-color: var(--color-primario) !important;
        color: white !important;
        font-weight: 700;
        border-bottom: none;
    }

    /* Modal botones */
    .modal-footer .btn-secondary {
        background-color: transparent;
        color: var(--color-texto-secundario);
        border: 2px solid var(--color-texto-secundario);
        border-radius: 0.5rem;
        font-weight: 600;
        padding: 0.4rem 1.5rem;
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    .modal-footer .btn-secondary:hover {
        background-color: var(--color-texto-secundario);
        color: white;
        box-shadow: 0 4px 8px rgba(107, 11, 33, 0.6);
    }
    .modal-footer .btn-danger {
        background-color: var(--color-primario);
        border: 2px solid var(--color-primario);
        border-radius: 0.5rem;
        font-weight: 700;
        padding: 0.4rem 1.5rem;
        transition: background-color 0.3s ease;
    }
    .modal-footer .btn-danger:hover {
        background-color: var(--color-primario-hover);
        border-color: var(--color-primario-hover);
        box-shadow: 0 6px 12px rgba(122, 41, 77, 0.7);
    }

    /* Modal content border y sombra */
    .modal-content.border-danger {
        border-radius: 1rem;
        border: 3px solid var(--color-primario);
        box-shadow: 0 1rem 2rem rgba(145, 47, 93, 0.3);
    }

    /* Icono advertencia modal eliminar */
    .modal-body i.bi-exclamation-triangle-fill {
        font-size: 3rem;
    }

    /* Form controls dentro modal */
    .modal-body input.form-control,
    .modal-body select.form-select {
        border: 2px solid var(--color-primario);
        border-radius: 0.5rem;
        transition: border-color 0.3s ease;
    }
    .modal-body input.form-control:focus,
    .modal-body select.form-select:focus {
        border-color: var(--color-secundario);
        box-shadow: 0 0 8px var(--color-secundario);
    }

    .btn-danger {
        background-color: var(--color-primario) !important;
        border-color: var(--color-primario) !important;
        color: white !important;
        border-radius: 50px;
        padding: 0.5rem 1.8rem;
        font-weight: 600;
        box-shadow: 0 3px 8px rgba(145, 47, 93, 0.3);
        transition: background-color 0.3s ease, border-color 0.3s ease, transform 0.2s ease;
    }

    .btn-danger:hover {
        background-color: var(--color-primario-hover) !important;
        border-color: var(--color-primario-hover) !important;
        color: white !important;
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(187, 53, 113, 0.6);
    }


</style>

<div class="container py-4">

    <h2 class="mb-4 text-center">Gestión de Usuarios</h2>

    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-3 gap-3">
        <div class="w-100" style="max-width: 300px;">
            <input type="text" class="form-control" placeholder="Buscar usuarios...">
        </div>
        <a href="{{ route('usuarios.agregar') }}" class="btn btn-danger" aria-label="Agregar nuevo usuario">
            Agregar Nuevo Usuario
        </a>
    </div>

    <div class="table-responsive shadow-sm rounded">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-danger text-center">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Correo Electrónico</th>
                    <th>Rol</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td>1</td>
                    <td>Ana López</td>
                    <td>ana@example.com</td>
                    <td>Administrador</td>
                    <td><span class="badge bg-success">Activo</span></td>
                    <td>
                        <div class="d-flex justify-content-center gap-2 flex-wrap">
                            <a href="{{ route('usuarios.editar') }}" class="btn btn-sm btn-outline-danger" aria-label="Editar usuario Ana López">
                                Editar
                            </a>
                            <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalEliminarUsuario" aria-label="Eliminar usuario Ana López">
                                Eliminar
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- Más usuarios pueden agregarse aquí -->
            </tbody>
        </table>
    </div>

</div>

<!-- Modal Confirmar Eliminación Usuario -->
<div class="modal fade" id="modalEliminarUsuario" tabindex="-1" aria-labelledby="modalEliminarUsuarioLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-danger shadow-sm">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEliminarUsuarioLabel">¿Eliminar Usuario?</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body text-center">
        <i class="bi bi-exclamation-triangle-fill text-danger"></i>
        <p class="mt-3">¿Estás seguro de que deseas eliminar este usuario? Esta acción no se puede deshacer.</p>
        <strong>Usuario:</strong> Ana López<br>
        <strong>Correo:</strong> ana@example.com
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger">Sí, Eliminar</button>
      </div>
    </div>
  </div>
</div>
@endsection
