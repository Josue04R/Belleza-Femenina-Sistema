@extends('layouts.app2')

@section('title', 'Agregar Producto')

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
        padding: 8px 22px;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-personalizado:hover {
        background-color: var(--color-primario-hover);
        color: white;
        transform: scale(1.03);
        box-shadow: 0 4px 12px rgba(145, 47, 93, 0.4);
    }

    .form-control:focus {
        border-color: var(--color-primario);
        box-shadow: 0 0 0 0.2rem rgba(145, 47, 93, 0.25);
    }
</style>

<div class="container py-4">
    <h2 class="mb-4 text-center" style="color: var(--color-primario);">Agregar Producto</h2>

    <div class="card shadow-sm rounded">
        <div class="card-body">
            <form method="POST" action="#"> {{-- Acción temporal sin ruta --}}
                {{-- @csrf --}} {{-- Puedes quitarlo mientras no haya backend --}}
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Ej. Camiseta Blanca" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Categoría</label>
                    <select name="categoria" class="form-select" required>
                        <option value="">Selecciona una categoría</option>
                        <option value="Ropa Casual">Ropa Casual</option>
                        <option value="Deportes">Deportes</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Precio</label>
                    <input type="number" name="precio" class="form-control" step="0.01" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Stock</label>
                    <input type="number" name="stock" class="form-control" required>
                </div>
                <div class="text-end">
                    <a href="{{ route('productos') }}" class="btn btn-secondary me-2">Cancelar</a>
                    <button type="submit" class="btn btn-personalizado">Guardar Producto</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
