@extends('layouts.app2')

@section('title', 'Gestión de Usuarios')

@section('page_css')
  <link href="{{ asset('css/usuarios/styles.css') }}" rel="stylesheet">
@endsection

@section('content')

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
