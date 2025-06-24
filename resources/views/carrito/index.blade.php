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
                <tr>
                    <td>Camiseta</td>
                    <td>2</td>
                    <td>$15.50</td>
                    <td>$31.00</td>
                    <td>
                        <a href="{{ route('carrito.editar', ['id' => 1]) }}" class="btn btn-warning btn-sm me-2 shadow-sm">
                            Editar
                        </a>
                        <button class="btn btn-danger btn-sm shadow-sm" data-bs-toggle="modal" data-bs-target="#modalEliminarProducto">
                            Eliminar
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal Eliminar Producto -->
<div class="modal fade" id="modalEliminarProducto" tabindex="-1" aria-labelledby="modalEliminarProductoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title" id="modalEliminarProductoLabel">Eliminar Producto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <p>¿Está seguro que desea eliminar este producto del carrito?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Eliminar</button>
            </div>
        </div>
    </div>
</div>

@endsection
