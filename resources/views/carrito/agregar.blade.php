@extends('layouts.app3')

@section('title', 'Agregar Producto')

@section('page_css')
  <link href="{{ asset('css/carrito/agregar.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="container py-5">
    <h2 class="text-center mb-4">Agregar Producto</h2>

    <form>
        <div class="mb-4">
            <label class="form-label" for="nombre">Nombre del producto</label>
            <input type="text" id="nombre" class="form-control" placeholder="Ejemplo: Camiseta" required>
        </div>

        <div class="mb-4">
            <label class="form-label" for="cantidad">Cantidad</label>
            <input type="number" id="cantidad" class="form-control" min="1" value="1" required>
        </div>

        <div class="mb-4">
            <label class="form-label" for="precio">Precio unitario</label>
            <input type="number" id="precio" class="form-control" step="0.01" min="0" placeholder="Ejemplo: 15.50" required>
        </div>

        <div class="btn-group">
            <a href="{{ route('carrito') }}" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-success">Agregar</button>
        </div>
    </form>
</div>

@endsection
