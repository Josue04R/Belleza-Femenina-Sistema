@extends('layouts.app2')

@section('title', 'Agregar Usuario')

@section('page_css')
  <link href="{{ asset('css/usuarios/agregar.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="container py-4">
    <h2>Agregar Usuario</h2>
    <form action="#" method="POST">
        <!-- Agrega CSRF si usas Laravel -->
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre Completo</label>
            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ej. Juan Pérez" required>
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo Electrónico</label>
            <input type="email" id="correo" name="correo" class="form-control" placeholder="Ej. juan@example.com" required>
        </div>
        <div class="mb-3">
            <label for="rol" class="form-label">Rol</label>
            <select id="rol" name="rol" class="form-select" required>
                <option value="" disabled selected>Selecciona un rol</option>
                <option value="Administrador">Administrador</option>
                <option value="Usuario">Usuario</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select id="estado" name="estado" class="form-select" required>
                <option value="Activo" selected>Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select>
        </div>

        <button type="submit" class="btn btn-danger">Guardar Usuario</button>
        <a href="{{ route('usuarios') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
