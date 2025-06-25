@extends('layouts.app2')

@section('title', 'Detalles del Producto')

@section('page_css')
  <link href="{{ asset('css/productos/ver.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="container py-4">
    <h2 class="text-center mb-4" style="color: var(--color-primario);">Detalles del Producto</h2>

    <div class="card card-detalle p-4 mx-auto" style="max-width: 600px;">
        <div class="mb-3">
            <div class="detalle-label">Nombre:</div>
            <div class="detalle-valor">Camiseta Blanca</div>
        </div>
        <div class="mb-3">
            <div class="detalle-label">Categoría:</div>
            <div class="detalle-valor">Ropa Casual</div>
        </div>
        <div class="mb-3">
            <div class="detalle-label">Precio:</div>
            <div class="detalle-valor">$12.99</div>
        </div>
        <div class="mb-3">
            <div class="detalle-label">Stock Disponible:</div>
            <div class="detalle-valor">35 unidades</div>
        </div>
        <div class="mb-3">
            <div class="detalle-label">Descripción:</div>
            <div class="detalle-valor">Camiseta de algodón blanca ideal para clima cálido.</div>
        </div>

        <div class="text-end mt-4">
            <a href="{{ route('productos') }}" class="btn btn-personalizado">Volver</a>
        </div>
    </div>
</div>
@endsection
