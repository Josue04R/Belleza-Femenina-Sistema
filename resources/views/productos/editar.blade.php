@extends('layouts.app2')

@section('title', 'Editar Producto')

@section('content')
<style>
    :root {
        --color-primario: #912f5d;
        --color-primario-hover: #7a294d;
        --color-secundario: #f2aec7;
        --color-texto-secundario: #6b0b21;
    }

    .btn-personalizado {
        background-color: var(--color-primario);
        color: white;
        border: none;
        border-radius: 30px;
        padding: 10px 28px;
        font-weight: 600;
        font-size: 16px;
        transition: 0.3s;
    }

    .btn-personalizado:hover {
        background-color: var(--color-primario-hover);
        color: white;
        transform: scale(1.03);
        box-shadow: 0 4px 12px rgba(145, 47, 93, 0.4);
    }

    .btn-cancelar {
        background-color: transparent;
        color: var(--color-primario);
        border: 2px solid var(--color-primario);
        border-radius: 30px;
        padding: 10px 28px;
        font-weight: 600;
        font-size: 16px;
        transition: 0.3s;
    }

    .btn-cancelar:hover {
        background-color: var(--color-secundario);
        color: var(--color-texto-secundario);
        transform: scale(1.03);
    }

    .form-control:focus {
        border-color: var(--color-primario);
        box-shadow: 0 0 0 0.2rem rgba(145, 47, 93, 0.25);
    }
</style>

<div class="container py-4">
    <h2 class="mb-3 text-center" style="color: var(--color-primario);">Editar Producto</h2>

    <div class="card shadow-sm rounded mx-auto" style="max-width: 650px;">
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label">Nombre del Producto</label>
                    <input type="text" class="form-control" value="Camiseta Blanca">
                </div>
                <div class="mb-3">
                    <label class="form-label">Categoría</label>
                    <select class="form-select">
                        <option>Ropa Casual</option>
                        <option selected>Deportes</option>
                        <option>Electrónica</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Precio</label>
                    <input type="number" class="form-control" step="0.01" value="12.99">
                </div>
                <div class="mb-3">
                    <label class="form-label">Stock</label>
                    <input type="number" class="form-control" value="35">
                </div>
                <div class="text-center mt-4 d-flex justify-content-center gap-3 flex-wrap">
                    <a href="{{ route('productos') }}" class="btn btn-cancelar">Cancelar</a>
                    <button type="button" class="btn btn-personalizado">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
