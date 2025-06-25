@extends('layouts.app3')

@section('title', 'Carrito de Compras')

@section('page_css')
  <link href="{{ asset('css/carrito/styles.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="container">
    <h2 class="mb-4 text-center">Carrito de Compras</h2>

    <div class="acciones-carrito">
        <a href="{{ route('carrito.agregar') }}" class="btn btn-success shadow-sm">
            <i class="bi bi-plus-circle me-2"></i> Agregar Producto
        </a>

        <a href="{{ route('carrito.pago') }}" class="btn btn-purple shadow-sm">
            Proceder al Pago
        </a>
    </div>

    <div class="table-responsive">
        <table class="table text-center mb-0">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($carrito as $item)
                    <tr>
                        <td>
                            {{ $item['nombre'] }}<br>
                            <small>Talla: {{ $item['talla'] }}, Color: {{ $item['color'] }}</small>
                        </td>
                        <td>{{ $item['cantidad'] }}</td>
                        <td>${{ number_format($item['precio'], 2) }}</td>
                        <td>${{ number_format($item['precio'] * $item['cantidad'], 2) }}</td>
                        <td>
                            <a href="{{ route('carrito.editar', ['id' => $item['productoVarianteId']]) }}" class="btn btn-warning btn-sm me-2 shadow-sm">
                                Editar
                            </a>
                           <button 
                                type="button"
                                class="btn btn-danger btn-sm shadow-sm btn-confirmar-eliminar"
                                data-bs-toggle="modal"
                                data-bs-target="#modalEliminarProducto"
                                data-id="{{ $item['productoVarianteId'] }}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Tu carrito está vacío.</td>
                    </tr>
                @endforelse

                @if (count($carrito) > 0)
                    <tr>
                        <td colspan="3" class="text-end"><strong>Total:</strong></td>
                        <td colspan="2">
                            <strong>
                                ${{ number_format(collect($carrito)->sum(fn($item) => $item['precio'] * $item['cantidad']), 2) }}
                            </strong>
                        </td>
                    </tr>
                @endif
            </tbody>

        </table>
    </div>
</div>

<!-- Modal Eliminar Producto -->
<div class="modal fade" id="modalEliminarProducto" tabindex="-1" aria-labelledby="modalEliminarProductoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form id="formEliminarProducto" method="POST" action="{{ route('carrito.eliminar') }}" class="modal-content">
            @csrf
            <input type="hidden" name="productoVarianteId" id="modalProductoVarianteId">

            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="modalEliminarProductoLabel">Eliminar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>

            <div class="modal-body">
                <p>¿Está seguro que desea eliminar este producto del carrito?</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Espera a que todo el contenido del DOM esté cargado antes de ejecutar el código
    document.addEventListener('DOMContentLoaded', function () {

        // Selecciona todos los botones que abren el modal de confirmación de eliminación
        const eliminarBotones = document.querySelectorAll('.btn-confirmar-eliminar');

        // Obtiene el input hidden dentro del modal que almacenará el ID del producto a eliminar
        const inputHidden = document.getElementById('modalProductoVarianteId');

        // Itera sobre todos los botones de eliminar
        eliminarBotones.forEach(boton => {
            // Agrega un evento click a cada botón
            boton.addEventListener('click', () => {
                // Obtiene el valor del atributo data-id del botón presionado
                const id = boton.getAttribute('data-id');

                // Asigna ese ID al input oculto del modal
                inputHidden.value = id;
            });
        });
    });
</script>
@endsection
