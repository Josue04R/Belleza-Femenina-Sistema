@extends('layouts.app2')

@section('title', 'Editar Producto')

@section('page_css')
  <link href="{{ asset('css/productos/editar.css') }}" rel="stylesheet">
@endsection

@section('content')

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
