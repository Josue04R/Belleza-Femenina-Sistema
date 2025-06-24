@extends('layouts.app2')

@section('title', 'Agregar Categoría')

@section('content')
<style>
    :root {
        --color-primario: #912f5d;
        --color-primario-hover: #7a294d;
        --color-secundario: #f2aec7;
        --color-texto-secundario: #6b0b21;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f9f9f9;
    }

    .form-label {
        font-weight: 600;
        color: var(--color-primario);
    }

    .form-control {
        border-radius: 12px;
        border: 1.5px solid #ccc;
        padding: 10px 15px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: var(--color-primario);
        box-shadow: 0 0 5px rgba(145, 47, 93, 0.2);
    }

    .btn-personalizado {
        background-color: var(--color-primario);
        color: white;
        border: none;
        border-radius: 30px;
        padding: 12px 32px;
        font-weight: 600;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .btn-personalizado:hover {
        background-color: var(--color-primario-hover);
        transform: scale(1.03);
         color: white;
        box-shadow: 0 6px 14px rgba(145, 47, 93, 0.3);
    }

    .btn-cancelar {
        background-color: transparent;
        color: var(--color-primario);
        border: 2px solid var(--color-primario);
        border-radius: 30px;
        padding: 12px 32px;
        font-weight: 600;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .btn-cancelar:hover {
        background-color: var(--color-secundario);
        color: var(--color-texto-secundario);
        border-color: var(--color-primario);
        transform: scale(1.03);
    }

    .card {
        border: none;
        border-radius: 20px;
        padding: 20px 25px; /* menos padding para un cuadro más compacto */
        background-color: #fff;
    }

    .card-body {
        padding: 0;
    }

    .titulo-principal {
        font-size: 28px;
        font-weight: bold;
        color: var(--color-primario);
        margin-bottom: 8px; /* más compacto */
    }

    /* Reducir margen superior del primer campo del formulario */
    form > div:first-child {
        margin-top: 0;
    }
</style>

<div class="container py-5">
    <div class="mx-auto" style="max-width: 600px;">
        <div class="text-center">
            <h2 class="titulo-principal">Agregar Nueva Categoría</h2>
        </div>

        <div class="card shadow">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="nombreCategoria" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombreCategoria" placeholder="Ej. Electrónica">
                    </div>
                    <div class="mb-3">
                        <label for="descripcionCategoria" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcionCategoria" rows="3" placeholder="Describe brevemente la categoría..."></textarea>
                    </div>
                    <div class="d-flex justify-content-center gap-3 flex-wrap mt-4">
                        <a href="{{ route('categorias') }}" class="btn btn-cancelar">Cancelar</a>
                        <button type="button" class="btn btn-personalizado">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
