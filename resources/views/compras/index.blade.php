@extends('layouts.app3')

@section('title', 'Proceso de Compras')

@section('content')

<style>
    .bg-purple {
        background-color: #912f5d !important;
        color: white !important;
    }
    .btn-purple {
        background-color: #912f5d;
        border-color: #912f5d;
        color: white;
    }
    .btn-purple:hover {
        background-color: #7a294d;
        border-color: #7a294d;
        color: white;
    }
</style>

<div class="container py-4">
    <h2 class="mb-4 text-center" style="color: #912f5d;">Proceso de Compras</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <h5>Detalles del Pedido</h5>
            <table class="table table-bordered mt-3">
                <thead class="table-secondary text-center">
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Zapatos deportivos</td>
                        <td class="text-center">1</td>
                        <td class="text-end">$55.00</td>
                        <td class="text-end">$55.00</td>
                    </tr>
                    <tr>
                        <td>Camisa casual</td>
                        <td class="text-center">2</td>
                        <td class="text-end">$20.00</td>
                        <td class="text-end">$40.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="fw-bold">
                        <td colspan="3" class="text-end">Total a pagar:</td>
                        <td class="text-end">$95.00</td>
                    </tr>
                </tfoot>
            </table>

            <div class="d-flex justify-content-end mt-4">
                <button class="btn btn-purple me-2" data-bs-toggle="modal" data-bs-target="#modalConfirmarCompra">Confirmar Compra</button>
                <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalResumenCompra">Ver Resumen</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Confirmar Compra -->
<div class="modal fade" id="modalConfirmarCompra" tabindex="-1" aria-labelledby="modalConfirmarCompraLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-purple">
                <h5 class="modal-title" id="modalConfirmarCompraLabel">Confirmar Compra</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <p>¿Está seguro que desea proceder con la compra?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-purple" data-bs-dismiss="modal">Sí, Confirmar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Resumen de Compra -->
<div class="modal fade" id="modalResumenCompra" tabindex="-1" aria-labelledby="modalResumenCompraLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-purple">
                <h5 class="modal-title" id="modalResumenCompraLabel">Resumen de Compra</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <h6>Productos:</h6>
                <ul>
                    <li>Zapatos deportivos - 1 unidad - $55.00</li>
                    <li>Camisa casual - 2 unidades - $40.00</li>
                </ul>
                <hr>
                <p class="fw-bold">Total: $95.00</p>
                <p>Aquí puedes mostrar más detalles como dirección de envío, método de pago, etc. (solo diseño por ahora).</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-purple" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

@endsection
