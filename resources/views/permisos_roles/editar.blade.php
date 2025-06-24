@extends('layouts.app2')

@section('title', 'Editar Rol')

@section('content')
<style>
    :root {
        --color-primario: #912f5d;
        --color-primario-hover: #7a294d;
        --color-secundario: #f2aec7;
        --color-texto-secundario: #6b0b21;
    }

    .form-card {
        max-width: 620px;
        margin: auto;
        background: #fff;
        border: 2px solid var(--color-secundario);
        border-radius: 1rem;
        padding: 2rem;
        box-shadow: 0 0.75rem 1.5rem rgba(145, 47, 93, 0.1);
    }

    .form-card h2 {
        color: var(--color-primario);
        font-weight: 700;
        text-align: center;
        text-transform: uppercase;
        margin-bottom: 1.5rem;
    }

    .form-label {
        color: var(--color-texto-secundario);
        font-weight: 600;
    }

    .form-control, .form-select {
        border: 2px solid var(--color-primario);
        border-radius: 0.5rem;
        box-shadow: none;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .form-control:focus, .form-select:focus {
        border-color: var(--color-secundario);
        box-shadow: 0 0 0 0.2rem rgba(145, 47, 93, 0.25);
    }

    select[multiple] {
        height: 150px;
    }

    .btn-primario {
        background-color: var(--color-primario);
        color: white;
        border: 2px solid var(--color-primario);
        font-weight: 600;
        transition: background-color 0.3s ease, border-color 0.3s ease;
    }

    .btn-primario:hover {
        background-color: var(--color-primario-hover);
        border-color: var(--color-primario-hover);
    }

    .btn-outline-secondary {
        border: 2px solid var(--color-secundario);
        color: var(--color-texto-secundario);
        background-color: transparent;
        font-weight: 600;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn-outline-secondary:hover {
        background-color: var(--color-secundario);
        color: var(--color-texto-secundario);
    }
</style>

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
