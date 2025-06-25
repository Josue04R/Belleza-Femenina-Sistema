@extends('layouts.app3')

@section('title', 'Gestión de Pedidos')

@section('page_css')
    <link href="{{ asset('css/pedidos_usuarios/styles.css') }}" rel="stylesheet">
@endsection

@section('content')
<br><br>
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h2 class="display-5 fw-bold" style="color: #d6336c;">
                <i class="bi bi-bag-check me-2"></i>Gestión de Pedidos
            </h2>
            <p class="text-muted">Administra los pedidos de tus clientes con estilo</p>
        </div>
    </div>

    <div class="card-body p-0 bg-white shadow-sm rounded-3">
        <div class="table-responsive p-3">
            <table class="table table-borderless table-striped align-middle mb-0">
                <thead>
                    <tr class="text-uppercase small text-white">
                        <th class="py-3 px-4">#</th>
                        <th class="py-3 px-4">ID Venta</th>
                        <th class="py-3 px-4">Ubicación</th>
                        <th class="py-3 px-4">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="align-middle">
                        <td class="px-4">1</td>
                        <td class="px-4">1023</td>
                        <td class="px-4">La Unión Sur</td>
                        <td class="px-4">
                            <span class="badge bg-warning text-dark status-badge">
                                <i class="bi bi-clock me-1"></i>Pendiente
                            </span>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td class="px-4">2</td>
                        <td class="px-4">1034</td>
                        <td class="px-4">La Unión Sur</td>
                        <td class="px-4">
                            <span class="badge bg-pink text-white status-badge">
                                <i class="bi bi-truck me-1"></i>Enviado
                            </span>
                        </td>
                    </tr>
                    <tr class="align-middle">
                        <td class="px-4">3</td>
                        <td class="px-4">1045</td>
                        <td class="px-4">La Unión Sur</td>
                        <td class="px-4">
                            <span class="badge bg-success text-white status-badge">
                                <i class="bi bi-check-circle me-1"></i>Entregado
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-footer bg-light">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center mb-0">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Siguiente</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection
