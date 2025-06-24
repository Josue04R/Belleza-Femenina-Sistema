@extends('layouts.app2')

@section('title', 'Detalles del Producto')

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

    .detalle-label {
        font-weight: 600;
        color: var(--color-texto-secundario);
    }

    .detalle-valor {
        color: #333;
        margin-bottom: 10px;
    }

    .card-detalle {
        border: 1px solid #e5e5e5;
        border-radius: 20px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }
</style>

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
