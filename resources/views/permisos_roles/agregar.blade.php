@extends('layouts.app2')

@section('title', 'Agregar Rol')

@section('page_css')
  <link href="{{ asset('css/pedidos/styles.css') }}" rel="stylesheet">
@endsection

@section('content')


<div class="container py-5">
    <div class="form-card">
        <h2><i class="bi bi-plus-circle me-2"></i>Agregar Nuevo Rol</h2>

        <form>
            <div class="mb-3">
                <label class="form-label">Nombre del Rol</label>
                <input type="text" class="form-control" placeholder="Ingrese el nombre del rol">
            </div>
            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea class="form-control" rows="3" placeholder="Ingrese la descripción del rol"></textarea>
            </div>
            <div class="mb-4">
                <label class="form-label">Permisos</label>
                <select class="form-select" multiple>
                    <option>Ver</option>
                    <option>Crear</option>
                    <option>Editar</option>
                    <option>Eliminar</option>
                </select>
            </div>
            <div class="btn-container">
                <a href="{{ route('permisos') }}" class="btn btn-outline-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primario">Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection
