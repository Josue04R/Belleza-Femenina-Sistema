@extends('layouts.app2')

@section('title', 'Editar Usuario')

@section('content')
<style>
    :root {
        --color-primario:rgb(214, 51, 127);
        --color-primario-hover:rgb(175, 47, 105);
        --color-secundario: #f2aec7;
        --color-texto-secundario:rgb(185, 36, 71);
    }

    .container {
        max-width: 500px;
    }

    h2 {
        color: var(--color-primario);
        font-weight: 700;
        text-transform: uppercase;
        text-align: center;
    }

    form {
        background: white;
        padding: 2rem;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem rgba(145, 47, 93, 0.1);
    }

    label {
        font-weight: 600;
        color: var(--color-primario);
    }

    input.form-control,
    select.form-select {
        border: 2px solid var(--color-primario);
        border-radius: 0.5rem;
        transition: border-color 0.3s ease;
    }
    input.form-control:focus,
    select.form-select:focus {
        border-color: var(--color-secundario);
        box-shadow: 0 0 8px var(--color-secundario);
    }

    .btn-danger {
        background-color: var(--color-primario);
        border: 2px solid var(--color-primario);
        border-radius: 50px;
        padding: 0.6rem 2rem;
        font-weight: 700;
        width: 100%;
        transition: background-color 0.3s ease;
        box-shadow: 0 3px 8px rgba(145, 47, 93, 0.3);
        margin-top: 1rem;
    }
    .btn-danger:hover {
        background-color: var(--color-primario-hover);
        border-color: var(--color-primario-hover);
    }

    .btn-secondary {
        background: transparent;
        color: var(--color-texto-secundario);
        border: 2px solid var(--color-texto-secundario);
        border-radius: 50px;
        padding: 0.6rem 2rem;
        font-weight: 700;
        width: 100%;
        margin-top: 1rem;
        transition: background-color 0.3s ease, color 0.3s ease;
        text-align: center;
        display: inline-block;
        text-decoration: none;
    }
    .btn-secondary:hover {
        background-color: var(--color-texto-secundario);
        color: white;
    }
</style>

<div class="container py-4">
    <h2>Editar Usuario</h2>
    <form action="#" method="POST">
        <!-- Agrega CSRF si usas Laravel -->

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre Completo</label>
            <input type="text" id="nombre" name="nombre" class="form-control" value="Ana López" required>
        </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo Electrónico</label>
            <input type="email" id="correo" name="correo" class="form-control" value="ana@example.com" required>
        </div>
        <div class="mb-3">
            <label for="rol" class="form-label">Rol</label>
            <select id="rol" name="rol" class="form-select" required>
                <option value="Administrador" selected>Administrador</option>
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

        <button type="submit" class="btn btn-danger">Actualizar Usuario</button>
        <a href="{{ route('usuarios') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
