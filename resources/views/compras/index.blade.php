@extends('layouts.app3')

@section('title', 'Mis Compras')

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
    .table-custom thead {
        background-color: #f8f2f5;
    }
    .badge-status {
        font-size: 0.85rem;
        padding: 5px 10px;
        border-radius: 20px;
    }
    .card-hover:hover {
        box-shadow: 0 0 15px rgba(145, 47, 93, 0.2);
        transition: all 0.3s ease;
    }
</style>

<div class="container py-5" style="margin-top: 5rem;">

    <h2 class="mb-4 text-center fw-bold" style="color: #912f5d;">🛍️ Historial de Compras</h2>

    <div class="card card-hover border-0 shadow-sm mb-5 rounded-4">
        <div class="card-body">
            <h5 class="mb-4 fw-semibold text-muted">Compras realizadas recientemente</h5>
            <div class="table-responsive">
                <table class="table table-borderless table-hover align-middle table-custom">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th><i class="bi bi-calendar-event"></i> Fecha</th>
                            <th><i class="bi bi-bag-check"></i> Productos</th>
                            <th><i class="bi bi-cash-coin"></i> Total</th>
                            <th><i class="bi bi-box-seam"></i> Estado</th>
                            <th><i class="bi bi-eye"></i> Detalles</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-light rounded-3">
                            <td class="text-center fw-bold">1</td>
                            <td class="text-center">20/06/2025</td>
                            <td>
                                <ul class="mb-0 ps-3">
                                    <li>Faja moldeadora cintura (M, Beige) x1</li>
                                    <li>Faja reductora con tirantes (L, Negro) x2</li>
                                </ul>
                            </td>
                            <td class="text-end fw-semibold text-success">$91.00</td>
                            <td class="text-center">
                                <span class="badge bg-success badge-status">Entregado</span>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-purple" data-bs-toggle="modal" data-bs-target="#modalCompra1">Ver</button>
                            </td>
                        </tr>
                        <tr class="bg-white">
                            <td class="text-center fw-bold">2</td>
                            <td class="text-center">12/05/2025</td>
                            <td>
                                <ul class="mb-0 ps-3">
                                    <li>Faja postparto control total (S, Nude) x1</li>
                                </ul>
                            </td>
                            <td class="text-end fw-semibold text-success">$42.00</td>
                            <td class="text-center">
                                <span class="badge bg-warning text-dark badge-status">En camino</span>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-purple" data-bs-toggle="modal" data-bs-target="#modalCompra2">Ver</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Compra 1 -->
<div class="modal fade" id="modalCompra1" tabindex="-1" aria-labelledby="modalCompra1Label" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header bg-purple">
                <h5 class="modal-title" id="modalCompra1Label">🧾 Detalles de la Compra #1</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Faja moldeadora cintura - Talla M - Beige - 1 unidad - $35.00</li>
                    <li>Faja reductora con tirantes - Talla L - Negro - 2 unidades - $56.00</li>
                </ul>
                <hr>
                <p><strong>Total pagado:</strong> $91.00</p>
                <p><strong>Método de pago:</strong> Contra entrega</p>
                <p><strong>Dirección de envío:</strong> San Salvador, El Salvador</p>
                <p><strong>Estado:</strong> Entregado</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-purple" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Compra 2 -->
<div class="modal fade" id="modalCompra2" tabindex="-1" aria-labelledby="modalCompra2Label" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded-4 shadow">
            <div class="modal-header bg-purple">
                <h5 class="modal-title" id="modalCompra2Label">🧾 Detalles de la Compra #2</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Faja postparto control total - Talla S - Nude - 1 unidad - $42.00</li>
                </ul>
                <hr>
                <p><strong>Total pagado:</strong> $42.00</p>
                <p><strong>Método de pago:</strong> Tarjeta de crédito</p>
                <p><strong>Dirección de envío:</strong> Santa Tecla, La Libertad</p>
                <p><strong>Estado:</strong> En camino</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-purple" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

@endsection
