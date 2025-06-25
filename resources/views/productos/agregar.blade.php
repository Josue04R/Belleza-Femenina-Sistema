@extends('layouts.app2')

@section('title', 'Agregar Producto')

@section('page_css')
  <link href="{{ asset('css/productos/agregar.css') }}" rel="stylesheet">
@endsection

@section('content')

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
