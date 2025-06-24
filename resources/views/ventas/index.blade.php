@extends('layouts.app2')

@section('title', 'Gestión de Ventas')

@section('content')
<div class="container py-4">

    <h2 class="mb-4 text-center" style="color: #912f5d;">Gestión de Ventas</h2>

    <!-- Registro de nueva venta -->
    <div class="card mb-5 shadow-sm">
        <div class="card-header" style="background-color: #912f5d; color: #fff;">
            Registrar Nueva Venta
        </div>
        <div class="card-body">
            <form id="formVenta">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label" style="color: #912f5d;">Cliente</label>
                        <input type="text" class="form-control" placeholder="Nombre del cliente" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" style="color: #912f5d;">Fecha</label>
                        <input type="date" class="form-control" value="{{ date('Y-m-d') }}" required>
                    </div>
                </div>

                <hr>

                <h5 style="color: #912f5d;">Productos</h5>
                <table class="table table-bordered align-middle">
                    <thead class="text-center" style="background-color: #ffd3e0;">
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Precio Unitario</th>
                            <th>Subtotal</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="productosBody">
                        <tr>
                            <td>
                                <select class="form-select">
                                    <option selected>Seleccione un producto</option>
                                    <option>Producto A</option>
                                    <option>Producto B</option>
                                </select>
                            </td>
                            <td><input type="number" class="form-control" value="1" min="1"></td>
                            <td><input type="text" class="form-control" value="10.00" readonly></td>
                            <td class="text-end">$10.00</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-outline-danger btn-eliminar-producto">Eliminar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="d-flex justify-content-between align-items-center">
                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalAgregarProducto">Agregar Producto</button>
                    <h5>Total: <span id="totalVenta">$10.00</span></h5>
                </div>

                <div class="text-end mt-4">
                    <button type="button" class="btn" style="background-color: #912f5d; color: #fff;" data-bs-toggle="modal" data-bs-target="#modalConfirmarRegistro">Registrar Venta</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Reporte de Ventas -->
    <div class="card shadow-sm">
        <div class="card-header" style="background-color: #912f5d; color: #fff;">
            <div class="d-flex justify-content-between align-items-center">
                <span>Reporte de Ventas</span>
                <button class="btn btn-outline-light btn-sm">Imprimir Todo en PDF</button>
            </div>
        </div>
        <div class="card-body">

            <div class="row mb-3 g-3">
                <div class="col-md-3">
                    <input type="date" class="form-control" placeholder="Desde">
                </div>
                <div class="col-md-3">
                    <input type="date" class="form-control" placeholder="Hasta">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Buscar cliente...">
                </div>
                <div class="col-md-2 d-grid">
                    <button class="btn" style="background-color: #912f5d; color: #fff;">Filtrar</button>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped align-middle text-center">
                    <thead style="background-color: #ffd3e0;">
                        <tr>
                            <th>#</th>
                            <th>Cliente</th>
                            <th>Fecha</th>
                            <th>Total</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ana Martínez</td>
                            <td>2025-06-15</td>
                            <td>$90.00</td>
                            <td>
                                <div class="d-flex flex-wrap gap-1 justify-content-center">
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDetalleVenta">Ver</button>
                                    <button class="btn btn-sm btn-outline-success">PDF</button>
                                    <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalEditarVenta">Editar</button>
                                    <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#modalConfirmarEliminarVenta">Eliminar</button>
                                </div>
                            </td>
                        </tr>
                        <!-- Más ventas aquí -->
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

<!-- Modal Detalle Venta -->
<div class="modal fade" id="modalDetalleVenta" tabindex="-1" aria-labelledby="detalleVentaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #912f5d; color: #fff;">
        <h5 class="modal-title" id="detalleVentaLabel">Detalle de Venta</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <p><strong>Cliente:</strong> Ana Martínez</p>
        <p><strong>Fecha:</strong> 2025-06-15</p>

        <table class="table table-bordered">
          <thead class="text-center" style="background-color: #ffd3e0;">
            <tr>
              <th>Producto</th>
              <th>Cantidad</th>
              <th>Precio</th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Producto A</td>
              <td>2</td>
              <td>$20.00</td>
              <td>$40.00</td>
            </tr>
            <tr>
              <td>Producto B</td>
              <td>1</td>
              <td>$50.00</td>
              <td>$50.00</td>
            </tr>
          </tbody>
        </table>

        <h5 class="text-end">Total: $90.00</h5>
      </div>
    </div>
  </div>
</div>

<!-- Modal Editar Venta -->
<div class="modal fade" id="modalEditarVenta" tabindex="-1" aria-labelledby="editarVentaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #912f5d; color: #fff;">
        <h5 class="modal-title" id="editarVentaLabel">Editar Venta</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label" style="color: #912f5d;">Cliente</label>
                    <input type="text" class="form-control" value="Ana Martínez">
                </div>
                <div class="col-md-6">
                    <label class="form-label" style="color: #912f5d;">Fecha</label>
                    <input type="date" class="form-control" value="2025-06-15">
                </div>
            </div>

            <table class="table table-bordered align-middle">
                <thead class="text-center" style="background-color: #ffd3e0;">
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio Unitario</th>
                        <th>Subtotal</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input class="form-control" value="Producto A" disabled></td>
                        <td><input type="number" class="form-control" value="2"></td>
                        <td><input type="number" class="form-control" value="20.00" readonly></td>
                        <td class="text-end">$40.00</td>
                        <td class="text-center"><button type="button" class="btn btn-sm btn-outline-danger">Eliminar</button></td>
                    </tr>
                </tbody>
            </table>

            <div class="text-end">
                <button type="submit" class="btn" style="background-color: #912f5d; color: #fff;">Actualizar Venta</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Agregar Producto -->
<div class="modal fade" id="modalAgregarProducto" tabindex="-1" aria-labelledby="modalAgregarProductoLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #912f5d; color: #fff;">
        <h5 class="modal-title" id="modalAgregarProductoLabel">Agregar Producto</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <form id="formAgregarProducto">
          <div class="mb-3">
            <label class="form-label" style="color: #912f5d;">Producto</label>
            <select class="form-select" required>
              <option value="">Seleccione un producto</option>
              <option data-precio="15.00">Producto A - $15.00</option>
              <option data-precio="20.00">Producto B - $20.00</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label" style="color: #912f5d;">Precio Unitario</label>
            <input type="text" class="form-control" id="precioUnitarioModal" value="$0.00" readonly>
          </div>
          <div class="mb-3">
            <label class="form-label" style="color: #912f5d;">Cantidad</label>
            <input type="number" class="form-control" id="cantidadModal" value="1" min="1" required>
          </div>
          <div class="mb-3">
            <label class="form-label" style="color: #912f5d;">Subtotal</label>
            <input type="text" class="form-control" id="subtotalModal" value="$0.00" readonly>
          </div>
          <div class="text-end">
            <button type="button" class="btn" style="background-color: #912f5d; color: #fff;" id="btnAgregarProductoModal">Agregar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Confirmar Eliminar Producto -->
<div class="modal fade" id="modalConfirmarEliminarProducto" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #912f5d; color: #fff;">
        <h5 class="modal-title">Confirmar Eliminación</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        ¿Está seguro de que desea eliminar este producto de la venta?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger" id="btnConfirmarEliminarProducto">Eliminar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Confirmar Registro de Venta -->
<div class="modal fade" id="modalConfirmarRegistro" tabindex="-1" aria-labelledby="modalConfirmarRegistroLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #912f5d; color: #fff;">
        <h5 class="modal-title" id="modalConfirmarRegistroLabel">Confirmar Registro</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body text-center">
        <p>¿Está seguro de que desea registrar esta venta?</p>
        <div class="d-flex justify-content-center gap-2">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" form="formVenta" class="btn" style="background-color: #912f5d; color: #fff;">Sí, Registrar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Confirmar Eliminar Venta -->
<div class="modal fade" id="modalConfirmarEliminarVenta" tabindex="-1" aria-labelledby="modalEliminarVentaLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #912f5d; color: #fff;">
        <h5 class="modal-title" id="modalEliminarVentaLabel">Confirmar Eliminación</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body text-center">
        <p>¿Está seguro de que desea eliminar esta venta?</p>
        <div class="d-flex justify-content-center gap-2">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger">Sí, Eliminar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Variables globales
    let productoAEliminar = null;
    const modalEliminarProducto = new bootstrap.Modal(document.getElementById('modalConfirmarEliminarProducto'));
    const modalAgregarProducto = new bootstrap.Modal(document.getElementById('modalAgregarProducto'));
    
    // Evento para eliminar producto (abre modal de confirmación)
    document.getElementById('productosBody').addEventListener('click', function(e) {
        if(e.target.classList.contains('btn-eliminar-producto')) {
            productoAEliminar = e.target.closest('tr');
            modalEliminarProducto.show();
        }
    });
    
    // Evento para confirmar eliminar producto
    document.getElementById('btnConfirmarEliminarProducto').addEventListener('click', function() {
        if(productoAEliminar) {
            productoAEliminar.remove();
            actualizarTotalVenta();
            modalEliminarProducto.hide();
        }
    });
    
    // Evento para seleccionar producto en el modal
    document.querySelector('#modalAgregarProducto select').addEventListener('change', function() {
        const precio = this.options[this.selectedIndex].dataset.precio || '0.00';
        document.getElementById('precioUnitarioModal').value = `$${precio}`;
        calcularSubtotalModal();
    });
    
    // Evento para cambiar cantidad en el modal
    document.getElementById('cantidadModal').addEventListener('input', calcularSubtotalModal);
    
    // Función para calcular subtotal en el modal
    function calcularSubtotalModal() {
        const select = document.querySelector('#modalAgregarProducto select');
        const precio = parseFloat(select.options[select.selectedIndex]?.dataset.precio || 0);
        const cantidad = parseInt(document.getElementById('cantidadModal').value) || 0;
        const subtotal = precio * cantidad;
        document.getElementById('subtotalModal').value = `$${subtotal.toFixed(2)}`;
    }
    
    // Evento para agregar producto desde el modal
    document.getElementById('btnAgregarProductoModal').addEventListener('click', function() {
        const select = document.querySelector('#modalAgregarProducto select');
        const productoTexto = select.options[select.selectedIndex].text.split(' - ')[0];
        const precio = select.options[select.selectedIndex].dataset.precio;
        const cantidad = document.getElementById('cantidadModal').value;
        
        if(select.value && cantidad > 0) {
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>
                    <select class="form-select">
                        <option selected>${productoTexto}</option>
                        <option>Producto A</option>
                        <option>Producto B</option>
                    </select>
                </td>
                <td><input type="number" class="form-control" value="${cantidad}" min="1"></td>
                <td><input type="text" class="form-control" value="${precio}" readonly></td>
                <td class="text-end">$${(cantidad * precio).toFixed(2)}</td>
                <td class="text-center">
                    <button type="button" class="btn btn-sm btn-outline-danger btn-eliminar-producto">Eliminar</button>
                </td>
            `;
            document.getElementById('productosBody').appendChild(newRow);
            actualizarTotalVenta();
            modalAgregarProducto.hide();
            document.getElementById('formAgregarProducto').reset();
            document.getElementById('precioUnitarioModal').value = '$0.00';
            document.getElementById('subtotalModal').value = '$0.00';
        }
    });
    
    // Función para actualizar el total de la venta
    function actualizarTotalVenta() {
        let total = 0;
        document.querySelectorAll('#productosBody tr').forEach(row => {
            const precio = parseFloat(row.querySelector('td:nth-child(3) input').value) || 0;
            const cantidad = parseInt(row.querySelector('td:nth-child(2) input').value) || 0;
            const subtotal = precio * cantidad;
            row.querySelector('td:nth-child(4)').textContent = `$${subtotal.toFixed(2)}`;
            total += subtotal;
        });
        document.getElementById('totalVenta').textContent = `$${total.toFixed(2)}`;
    }
    
    // Evento para actualizar total cuando cambia la cantidad
    document.getElementById('productosBody').addEventListener('input', function(e) {
        if(e.target.type === 'number') {
            actualizarTotalVenta();
        }
    });
});
</script>

@endsection