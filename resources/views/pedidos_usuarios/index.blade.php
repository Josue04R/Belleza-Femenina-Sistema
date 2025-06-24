@extends('layouts.app3')

@section('title', 'Gestión de Pedidos')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 text-center" style="color: #912f5d;">Gestión de Pedidos</h2>

    <div class="text-end mb-3">
        <button class="btn text-white" style="background-color: #912f5d;" data-bs-toggle="modal" data-bs-target="#modalNuevoPedido">
            <i class="bi bi-plus-circle me-1"></i> Nuevo Pedido
        </button>
    </div>

    <div class="table-responsive shadow-sm">
        <table class="table table-bordered align-middle">
            <thead class="text-white" style="background-color: #912f5d;">
                <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>Producto</th>
                    <th>Estado</th>
                    <th>Fecha</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Ana Gómez</td>
                    <td>Laptop HP</td>
                    <td><span class="badge bg-success">Enviado</span></td>
                    <td>2025-06-15</td>
                    <td class="text-center">
                        <button class="btn btn-sm" style="background-color: #912f5d; color: white;" data-bs-toggle="modal" data-bs-target="#modalEditarPedido">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminarPedido">
                            <i class="bi bi-trash3"></i>
                        </button>
                    </td>
                </tr>
                <!-- Puedes duplicar esta fila para más ejemplos -->
            </tbody>
        </table>
    </div>
</div>

<!-- Modal: Nuevo Pedido -->
<div class="modal fade" id="modalNuevoPedido" tabindex="-1" aria-labelledby="modalNuevoPedidoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form>
            <div class="modal-content">
                <div class="modal-header text-white" style="background-color: #912f5d;">
                    <h5 class="modal-title" id="modalNuevoPedidoLabel">Nuevo Pedido</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="cliente" class="form-label">Cliente</label>
                        <input type="text" id="cliente" class="form-control" placeholder="Nombre del cliente">
                    </div>
                    <div class="mb-3">
                        <label for="producto" class="form-label">Producto</label>
                        <input type="text" id="producto" class="form-control" placeholder="Nombre del producto">
                    </div>
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select id="estado" class="form-select">
                            <option>Pendiente</option>
                            <option>Enviado</option>
                            <option>Entregado</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" id="fecha" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" style="background-color: #f2aec7; color: #6b0b21;" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn text-white" style="background-color: #912f5d;" onclick="alert('Pedido agregado (vista de diseño)')">Agregar Pedido</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal: Editar Pedido -->
<div class="modal fade" id="modalEditarPedido" tabindex="-1" aria-labelledby="modalEditarPedidoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form>
            <div class="modal-content">
                <div class="modal-header" style="background-color: #912f5d;">
                    <h5 class="modal-title text-white" id="modalEditarPedidoLabel">Editar Pedido</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="editCliente" class="form-label">Cliente</label>
                        <input type="text" id="editCliente" class="form-control" value="Ana Gómez">
                    </div>
                    <div class="mb-3">
                        <label for="editProducto" class="form-label">Producto</label>
                        <input type="text" id="editProducto" class="form-control" value="Laptop HP">
                    </div>
                    <div class="mb-3">
                        <label for="editEstado" class="form-label">Estado</label>
                        <select id="editEstado" class="form-select">
                            <option>Pendiente</option>
                            <option selected>Enviado</option>
                            <option>Entregado</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="editFecha" class="form-label">Fecha</label>
                        <input type="date" id="editFecha" class="form-control" value="2025-06-15">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" style="background-color: #f2aec7; color: #6b0b21;" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn text-white" style="background-color: #912f5d;" onclick="alert('Cambios guardados (vista de diseño)')">Guardar Cambios</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal: Confirmar Eliminación -->
<div class="modal fade" id="modalEliminarPedido" tabindex="-1" aria-labelledby="modalEliminarPedidoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #912f5d;">
                <h5 class="modal-title text-white" id="modalEliminarPedidoLabel">Confirmar Eliminación</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body text-center">
                <p>¿Estás seguro que deseas eliminar este pedido?</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn" style="background-color: #f2aec7; color: #6b0b21;" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn text-white" style="background-color: #912f5d;" onclick="alert('Pedido eliminado (vista de diseño)')">Eliminar</button>
            </div>
        </div>
    </div>
</div>
@endsection
