@extends('layouts.app3')

@section('title', 'Editar Producto')

@section('content')

<style>
    :root {
        --color-primario: #912f5d;
        --color-primario-hover: #7a294d;
        --color-secundario: #f2aec7;
        --color-texto-secundario: #6b0b21;

        --color-warning: #d18c3b;
        --color-warning-hover: #b26e27;
    }

    body {
        background-color: #fff7fb;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    h2 {
        color: var(--color-primario);
        font-weight: 700;
        letter-spacing: 1px;
    }

    form {
        background: white;
        padding: 2rem 2.5rem;
        border-radius: 1rem;
        box-shadow: 0 8px 30px rgb(145 47 93 / 0.15);
        max-width: 480px;
        margin: 0 auto;
    }

    .form-label {
        font-weight: 600;
        color: var(--color-texto-secundario);
        margin-bottom: 0.5rem;
        display: block;
    }

    input.form-control {
        border-radius: 0.5rem;
        border: 1.8px solid #dba3b7;
        padding: 0.5rem 1rem;
        font-weight: 500;
        color: #4a4a4a;
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
        width: 100%;
    }
    input.form-control::placeholder {
        color: #b58ea1;
    }
    input.form-control:focus {
        border-color: var(--color-primario);
        box-shadow: 0 0 8px rgb(145 47 93 / 0.5);
        outline: none;
    }

    .btn-group {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-top: 1.5rem;
    }

    .btn-secondary {
        background-color: #dba3b7;
        border-color: #dba3b7;
        color: var(--color-texto-secundario);
        font-weight: 600;
        padding: 0.5rem 2rem;
        border-radius: 2rem;
        box-shadow: 0 3px 8px rgb(219 163 183 / 0.5);
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    .btn-secondary:hover {
        background-color: #c98aa5;
        border-color: #c98aa5;
        color: white;
        box-shadow: 0 5px 12px rgb(201 138 165 / 0.7);
    }

    .btn-warning {
        background-color: var(--color-warning);
        border-color: var(--color-warning);
        color: white;
        font-weight: 600;
        padding: 0.5rem 2rem;
        border-radius: 2rem;
        box-shadow: 0 4px 10px rgb(209 140 59 / 0.4);
        transition: background-color 0.3s ease;
    }
    .btn-warning:hover {
        background-color: var(--color-warning-hover);
        border-color: var(--color-warning-hover);
        box-shadow: 0 6px 15px rgb(178 110 39 / 0.7);
        color: white;
    }
</style>

<div class="container py-5">
    <h2 class="text-center mb-4">Editar Producto</h2>

    <form>
        <div class="mb-4">
            <label class="form-label" for="nombre">Nombre del producto</label>
            <input type="text" id="nombre" class="form-control" value="{{ $producto['nombre'] }}" required>
        </div>

        <div class="mb-4">
            <label class="form-label" for="cantidad">Cantidad</label>
            <input type="number" id="cantidad" class="form-control" min="1" value="{{ $producto['cantidad'] }}" required>
        </div>

        <div class="mb-4">
            <label class="form-label" for="precio">Precio unitario</label>
            <input type="number" id="precio" class="form-control" step="0.01" min="0" value="{{ $producto['precio'] }}" required>
        </div>

        <div class="btn-group">
            <a href="{{ route('carrito') }}" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-warning">Guardar Cambios</button>
        </div>
    </form>
</div>

@endsection
