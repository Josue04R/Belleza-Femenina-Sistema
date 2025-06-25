@extends('layouts.app2')

@section('title', 'Editar Rol')

@section('page_css')
  <link href="{{ asset('css/pedidos/styles.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="container py-5">
    <div class="form-card">
        <h2><i class="bi bi-pencil-square me-2"></i>Editar Rol</h2>

        <form>
            <div class="mb-3">
                <label class="form-label">Nombre del Rol</label>
                <input type="text" class="form-control" value="Administrador">
            </div>
            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea class="form-control" rows="3">Acceso total</textarea>
            </div>
            <div class="mb-4">
                <label class="form-label">Permisos</label>
                <select class="form-select" multiple>
                    <option selected>Ver</option>
                    <option selected>Crear</option>
                    <option>Editar</option>
                    <option>Eliminar</option>
                </select>
            </div>
            <div class="d-flex justify-content-end gap-3">
                <a href="{{ route('permisos') }}" class="btn btn-outline-secondary px-4">Cancelar</a>
                <button type="submit" class="btn btn-primario px-4">Guardar Cambios</button>
            </div>
        </form>
    </div>
</div>
@endsection
