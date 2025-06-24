@extends('layouts.app3')

@section('title', 'Gestión de Pedidos')

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
                    <!-- Fila 1 -->
                    <tr class="align-middle">
                        <td class="px-4">1</td>
                        <td class="px-4">1023</td>
                        <td class="px-4">todas la unión sur</td>
                        <td class="px-4">
                            <span class="badge bg-warning text-dark status-badge">
                                <i class="bi bi-clock me-1"></i>Pendiente
                            </span>
                        </td>
                    </tr>

                    <!-- Fila 2 -->
                    <tr class="align-middle">
                        <td class="px-4">2</td>
                        <td class="px-4">1034</td>
                        <td class="px-4">todas la unión sur</td>
                        <td class="px-4">
                            <span class="badge bg-pink text-white status-badge">
                                <i class="bi bi-truck me-1"></i>Enviado
                            </span>
                        </td>
                    </tr>

                    <!-- Fila 3 -->
                    <tr class="align-middle">
                        <td class="px-4">3</td>
                        <td class="px-4">1045</td>
                        <td class="px-4">todas la unión sur</td>
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

<style>
  /* Gradiente en la cabecera */
  .table thead tr {
    background: linear-gradient(135deg, #d6336c 0%, #ff6b9e 100%);
  }
  /* Zebra soft */
  .table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(214, 51, 108, 0.03);
  }
  /* Hover elevación */
  .table tbody tr {
    transition: transform .2s, box-shadow .2s;
  }
  .table tbody tr:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
  }

  /* Badges de estado uniformes */
  .status-badge {
    display: inline-block;
    min-width: 100px;
    text-align: center;
    font-size: .875rem;
  }

  /* Color de badge personalizado */
  .bg-pink {
    background-color: #d6336c !important;
  }

  /* Paginación rosa */
  .pagination .page-link {
    color: #d6336c !important;
  }
  .pagination .page-item.active .page-link {
    background-color: #d6336c !important;
    border-color: #d6336c !important;
    color: #fff !important;
  }
  .pagination .page-link:hover {
    background-color: rgba(214,51,108,0.1);
  }
</style>
@endsection
