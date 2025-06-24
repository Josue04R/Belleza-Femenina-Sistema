@extends('layouts.app2')

@section('title', 'Gestión de Pedidos')

@section('content')
<div class="container py-4 main-content">

    <h2 class="mb-4 text-center" style="color: #912f5d;">Gestión de Pedidos</h2>

    <!-- Registro de nuevo pedido -->
    <div class="card mb-5 shadow-sm">
        <div class="card-header" style="background-color: #912f5d; color: #fff;">
            Registrar Nuevo Pedido
        </div>
        <div class="card-body">
            <form id="formPedido">
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="cliente" class="form-label" style="color: #912f5d;">Cliente</label>
                        <input type="text" id="cliente" name="cliente" class="form-control" placeholder="Nombre del cliente" required>
                    </div>
                    <div class="col-md-6">
                        <label for="fecha_pedido" class="form-label" style="color: #912f5d;">Fecha de Pedido</label>
                        <input type="date" id="fecha_pedido" name="fecha_pedido" class="form-control" value="{{ date('Y-m-d') }}" required>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label for="direccion_envio" class="form-label" style="color: #912f5d;">Dirección de Envío</label>
                        <input type="text" id="direccion_envio" name="direccion_envio" class="form-control" placeholder="Dirección completa" required>
                    </div>
                    <div class="col-md-3">
                        <label for="ciudad" class="form-label" style="color: #912f5d;">Ciudad</label>
                        <input type="text" id="ciudad" name="ciudad" class="form-control" placeholder="Ciudad" required>
                    </div>
                    <div class="col-md-3">
                        <label for="codigo_postal" class="form-label" style="color: #912f5d;">Código Postal</label>
                        <input type="text" id="codigo_postal" name="codigo_postal" class="form-control" placeholder="Código postal" required pattern="\d{4,10}" title="Ingrese un código postal válido">
                    </div>
                </div>

                <hr>

                <h5 style="color: #912f5d;">Productos</h5>
                <table class="table table-bordered align-middle">
                    <thead class="text-center" style="background-color: #ffd3e0;">
                        <tr>
                            <th>Producto</th>
                            <th style="width: 100px;">Cantidad</th>
                            <th style="width: 130px;">Precio Unitario</th>
                            <th style="width: 130px;">Subtotal</th>
                            <th style="width: 90px;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="productosBody">
                        <tr>
                            <td>
                                <select class="form-select" name="producto[]" required>
                                    <option value="" selected disabled>Seleccione un producto</option>
                                    <option value="producto_a">Producto A</option>
                                    <option value="producto_b">Producto B</option>
                                </select>
                            </td>
                            <td><input type="number" name="cantidad[]" class="form-control text-center" value="1" min="1" required></td>
                            <td><input type="text" name="precio_unitario[]" class="form-control text-end" value="15.00" readonly></td>
                            <td class="text-end">$15.00</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-outline-danger btn-eliminar-producto" title="Eliminar producto">Eliminar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="d-flex justify-content-between align-items-center">
                    <button type="button" id="btnAgregarProducto" class="btn btn-sm btn-outline-danger">Agregar Producto</button>
                    <h5>Total: <span id="totalPedido">$15.00</span></h5>
                </div>

                <hr>

                <h5 style="color: #912f5d;">Estado del Envío</h5>
                <div class="row g-3 align-items-center mb-3">
                    <div class="col-md-6">
                        <label for="estado_envio" class="form-label" style="color: #912f5d;">Estado</label>
                        <select id="estado_envio" name="estado_envio" class="form-select" required>
                            <option value="Preparando">Preparando</option>
                            <option value="Enviado">Enviado</option>
                            <option value="Entregado">Entregado</option>
                            <option value="Cancelado">Cancelado</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="empresa_envio" class="form-label" style="color: #912f5d;">Empresa de Envío</label>
                        <input type="text" id="empresa_envio" name="empresa_envio" class="form-control" placeholder="Ejemplo: DHL, FedEx" required>
                    </div>
                </div>

                <div class="text-end mt-4">
                    <button type="button" id="btnRegistrarPedido" class="btn" style="background-color: #912f5d; color: #fff;">Registrar Pedido</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Reporte de Pedidos -->
    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #912f5d; color: #fff;">
            <span>Reporte de Pedidos</span>
            <button class="btn btn-outline-light btn-sm">Imprimir Todo en PDF</button>
        </div>
        <div class="card-body">

            <div class="row mb-3 g-3">
                <div class="col-md-3">
                    <input type="date" class="form-control" placeholder="Desde" name="fecha_desde">
                </div>
                <div class="col-md-3">
                    <input type="date" class="form-control" placeholder="Hasta" name="fecha_hasta">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Buscar cliente..." name="buscar_cliente">
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
                            <th>Estado</th>
                            <th>Empresa Envío</th>
                            <th>Total</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Juan Pérez</td>
                            <td>2025-06-15</td>
                            <td>Enviado</td>
                            <td>DHL</td>
                            <td>$120.00</td>
                            <td>
                                <div class="d-flex flex-wrap gap-1 justify-content-center">
                                    <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDetallePedido">Ver</button>
                                    <button class="btn btn-sm btn-outline-success">PDF</button>
                                    <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modalEditarPedido">Editar</button>
                                    <button class="btn btn-sm btn-outline-secondary btn-eliminar-pedido">Eliminar</button>
                                </div>
                            </td>
                        </tr>
                        <!-- Más pedidos aquí -->
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

<!-- Modal Detalle Pedido -->
<div class="modal fade" id="modalDetallePedido" tabindex="-1" aria-labelledby="detallePedidoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #912f5d; color: #fff;">
        <h5 class="modal-title" id="detallePedidoLabel">Detalle de Pedido</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <p><strong>Cliente:</strong> Juan Pérez</p>
        <p><strong>Fecha:</strong> 2025-06-15</p>
        <p><strong>Dirección de Envío:</strong> Calle 123, Ciudad</p>
        <p><strong>Estado:</strong> Enviado</p>
        <p><strong>Empresa de Envío:</strong> DHL</p>

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
              <td>3</td>
              <td>$20.00</td>
              <td>$60.00</td>
            </tr>
            <tr>
              <td>Producto B</td>
              <td>3</td>
              <td>$20.00</td>
              <td>$60.00</td>
            </tr>
          </tbody>
        </table>

        <h5 class="text-end">Total: $120.00</h5>
      </div>
    </div>
  </div>
</div>

<!-- Modal Editar Pedido -->
<div class="modal fade" id="modalEditarPedido" tabindex="-1" aria-labelledby="editarPedidoLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #912f5d; color: #fff;">
        <h5 class="modal-title" id="editarPedidoLabel">Editar Pedido</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="editar_cliente" class="form-label" style="color: #912f5d;">Cliente</label>
                    <input type="text" id="editar_cliente" class="form-control" value="Juan Pérez" required>
                </div>
                <div class="col-md-6">
                    <label for="editar_fecha_pedido" class="form-label" style="color: #912f5d;">Fecha de Pedido</label>
                    <input type="date" id="editar_fecha_pedido" class="form-control" value="2025-06-15" required>
                </div>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-md-6">
                    <label for="editar_direccion_envio" class="form-label" style="color: #912f5d;">Dirección de Envío</label>
                    <input type="text" id="editar_direccion_envio" class="form-control" value="Calle 123, Ciudad" required>
                </div>
                <div class="col-md-3">
                    <label for="editar_ciudad" class="form-label" style="color: #912f5d;">Ciudad</label>
                    <input type="text" id="editar_ciudad" class="form-control" value="Ciudad" required>
                </div>
                <div class="col-md-3">
                    <label for="editar_codigo_postal" class="form-label" style="color: #912f5d;">Código Postal</label>
                    <input type="text" id="editar_codigo_postal" class="form-control" value="00000" pattern="\d{4,10}" title="Ingrese un código postal válido" required>
                </div>
            </div>

            <h5 style="color: #912f5d;">Productos</h5>
            <table class="table table-bordered align-middle">
                <thead class="text-center" style="background-color: #ffd3e0;">
                    <tr>
                        <th>Producto</th>
                        <th style="width: 100px;">Cantidad</th>
                        <th style="width: 130px;">Precio Unitario</th>
                        <th style="width: 130px;">Subtotal</th>
                        <th style="width: 90px;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input class="form-control" value="Producto A" disabled></td>
                        <td><input type="number" class="form-control text-center" value="3" min="1" required></td>
                        <td><input type="number" class="form-control text-end" value="20.00" readonly></td>
                        <td class="text-end">$60.00</td>
                        <td class="text-center"><button type="button" class="btn btn-sm btn-outline-danger">Eliminar</button></td>
                    </tr>
                    <tr>
                        <td><input class="form-control" value="Producto B" disabled></td>
                        <td><input type="number" class="form-control text-center" value="3" min="1" required></td>
                        <td><input type="number" class="form-control text-end" value="20.00" readonly></td>
                        <td class="text-end">$60.00</td>
                        <td class="text-center"><button type="button" class="btn btn-sm btn-outline-danger">Eliminar</button></td>
                    </tr>
                </tbody>
            </table>

            <div class="row g-3 align-items-center mb-3">
                <div class="col-md-6">
                    <label for="editar_estado_envio" class="form-label" style="color: #912f5d;">Estado</label>
                    <select id="editar_estado_envio" class="form-select" required>
                        <option value="Preparando">Preparando</option>
                        <option value="Enviado" selected>Enviado</option>
                        <option value="Entregado">Entregado</option>
                        <option value="Cancelado">Cancelado</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="editar_empresa_envio" class="form-label" style="color: #912f5d;">Empresa de Envío</label>
                    <input type="text" id="editar_empresa_envio" class="form-control" value="DHL" required>
                </div>
            </div>

            <div class="text-end">
                <button type="submit" class="btn" style="background-color: #912f5d; color: #fff;">Actualizar Pedido</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Confirmación Eliminar Producto -->
<div class="modal fade" id="modalConfirmarEliminarProducto" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #912f5d; color: #fff;">
        <h5 class="modal-title">Confirmar Eliminación</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        ¿Estás seguro que deseas eliminar este producto del pedido?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger" id="btnConfirmarEliminarProducto">Eliminar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Agregar Producto -->
<div class="modal fade" id="modalAgregarProducto" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #912f5d; color: #fff;">
        <h5 class="modal-title">Agregar Producto</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <form id="formAgregarProducto">
          <div class="mb-3">
            <label for="nuevo_producto" class="form-label" style="color: #912f5d;">Producto</label>
            <select class="form-select" id="nuevo_producto" required>
              <option value="" selected disabled>Seleccione un producto</option>
              <option value="producto_a" data-precio="15.00">Producto A - $15.00</option>
              <option value="producto_b" data-precio="20.00">Producto B - $20.00</option>
              <option value="producto_c" data-precio="25.00">Producto C - $25.00</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="nuevo_precio_unitario" class="form-label" style="color: #912f5d;">Precio Unitario</label>
            <input type="text" class="form-control" id="nuevo_precio_unitario" value="$0.00" readonly>
          </div>
          <div class="mb-3">
            <label for="nueva_cantidad" class="form-label" style="color: #912f5d;">Cantidad</label>
            <input type="number" class="form-control" id="nueva_cantidad" value="1" min="1" required>
          </div>
          <div class="mb-3">
            <label class="form-label" style="color: #912f5d;">Subtotal</label>
            <input type="text" class="form-control" id="nuevo_subtotal" value="$0.00" readonly>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn" style="background-color: #912f5d; color: #fff;" id="btnConfirmarAgregarProducto">Agregar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Confirmación Registrar Pedido -->
<div class="modal fade" id="modalConfirmarRegistrarPedido" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #912f5d; color: #fff;">
        <h5 class="modal-title">Confirmar Registro</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        ¿Estás seguro que deseas registrar este pedido?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn" style="background-color: #912f5d; color: #fff;" id="btnConfirmarRegistrarPedido">Registrar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Confirmación Eliminar Pedido -->
<div class="modal fade" id="modalConfirmarEliminarPedido" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #912f5d; color: #fff;">
        <h5 class="modal-title">Confirmar Eliminación</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        ¿Estás seguro que deseas eliminar este pedido? Esta acción no se puede deshacer.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger" id="btnConfirmarEliminarPedido">Eliminar</button>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Variables globales
    let productoAEliminar = null;
    let pedidoAEliminar = null;
    
    // Inicialización de modales de Bootstrap
    const modalConfirmarEliminarProducto = new bootstrap.Modal(document.getElementById('modalConfirmarEliminarProducto'));
    const modalAgregarProducto = new bootstrap.Modal(document.getElementById('modalAgregarProducto'));
    const modalConfirmarRegistrarPedido = new bootstrap.Modal(document.getElementById('modalConfirmarRegistrarPedido'));
    const modalConfirmarEliminarPedido = new bootstrap.Modal(document.getElementById('modalConfirmarEliminarPedido'));
    
    const btnAgregarProducto = document.getElementById('btnAgregarProducto');
    const productosBody = document.getElementById('productosBody');
    const totalPedido = document.getElementById('totalPedido');
    const btnRegistrarPedido = document.getElementById('btnRegistrarPedido');
    const formPedido = document.getElementById('formPedido');
    
    // Función para actualizar totales
    function actualizarTotales() {
        let total = 0;
        productosBody.querySelectorAll('tr').forEach(row => {
            const cantidadInput = row.querySelector('input[name="cantidad[]"]');
            const precioInput = row.querySelector('input[name="precio_unitario[]"]');
            const subtotalCell = row.querySelector('td.text-end');
            if (!cantidadInput || !precioInput || !subtotalCell) return;
            const cantidad = parseInt(cantidadInput.value) || 0;
            const precio = parseFloat(precioInput.value) || 0;
            const subtotal = cantidad * precio;
            subtotalCell.textContent = `$${subtotal.toFixed(2)}`;
            total += subtotal;
        });
        totalPedido.textContent = `$${total.toFixed(2)}`;
    }
    
    // Evento para agregar producto (abre modal)
    btnAgregarProducto.addEventListener('click', () => {
        modalAgregarProducto.show();
    });
    
    // Evento para cambiar producto en el modal
    document.getElementById('nuevo_producto').addEventListener('change', function() {
        const precio = this.options[this.selectedIndex].dataset.precio || '0.00';
        document.getElementById('nuevo_precio_unitario').value = `$${precio}`;
        calcularSubtotal();
    });
    
    // Evento para cambiar cantidad en el modal
    document.getElementById('nueva_cantidad').addEventListener('input', calcularSubtotal);
    
    // Función para calcular subtotal en el modal
    function calcularSubtotal() {
        const productoSelect = document.getElementById('nuevo_producto');
        const cantidad = parseInt(document.getElementById('nueva_cantidad').value) || 0;
        const precio = parseFloat(productoSelect.options[productoSelect.selectedIndex]?.dataset.precio || 0);
        const subtotal = cantidad * precio;
        document.getElementById('nuevo_subtotal').value = `$${subtotal.toFixed(2)}`;
    }
    
    // Evento para confirmar agregar producto
    document.getElementById('btnConfirmarAgregarProducto').addEventListener('click', () => {
        const productoSelect = document.getElementById('nuevo_producto');
        const cantidadInput = document.getElementById('nueva_cantidad');
        
        if (productoSelect.value && cantidadInput.value > 0) {
            const productoTexto = productoSelect.options[productoSelect.selectedIndex].text.split(' - ')[0];
            const precio = productoSelect.options[productoSelect.selectedIndex].dataset.precio;
            
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>
                    <select class="form-select" name="producto[]" required>
                        <option value="${productoSelect.value}" selected>${productoTexto}</option>
                        <option value="producto_a">Producto A</option>
                        <option value="producto_b">Producto B</option>
                    </select>
                </td>
                <td><input type="number" name="cantidad[]" class="form-control text-center" value="${cantidadInput.value}" min="1" required></td>
                <td><input type="text" name="precio_unitario[]" class="form-control text-end" value="${precio}" readonly></td>
                <td class="text-end">$${(cantidadInput.value * precio).toFixed(2)}</td>
                <td class="text-center">
                    <button type="button" class="btn btn-sm btn-outline-danger btn-eliminar-producto" title="Eliminar producto">Eliminar</button>
                </td>
            `;
            productosBody.appendChild(newRow);
            actualizarTotales();
            modalAgregarProducto.hide();
            document.getElementById('formAgregarProducto').reset();
            // Resetear valores después de agregar
            document.getElementById('nuevo_precio_unitario').value = '$0.00';
            document.getElementById('nuevo_subtotal').value = '$0.00';
        }
    });
    
    // Evento para eliminar producto (abre modal de confirmación)
    productosBody.addEventListener('click', (e) => {
        if(e.target.classList.contains('btn-eliminar-producto')) {
            productoAEliminar = e.target.closest('tr');
            if(productoAEliminar) {
                modalConfirmarEliminarProducto.show();
            }
        }
    });
    
    // Evento para confirmar eliminar producto
    document.getElementById('btnConfirmarEliminarProducto').addEventListener('click', () => {
        if(productoAEliminar) {
            productoAEliminar.remove();
            actualizarTotales();
            modalConfirmarEliminarProducto.hide();
            productoAEliminar = null;
        }
    });
    
    // Evento para actualizar totales cuando cambia la cantidad
    productosBody.addEventListener('input', (e) => {
        if(e.target.name === 'cantidad[]') {
            actualizarTotales();
        }
    });
    
    // Evento para registrar pedido (abre modal de confirmación)
    btnRegistrarPedido.addEventListener('click', () => {
        // Validar que haya al menos un producto
        if(productosBody.querySelectorAll('tr').length === 0) {
            alert('Debe agregar al menos un producto al pedido');
            return;
        }
        
        // Validar formulario
        if(formPedido.checkValidity()) {
            modalConfirmarRegistrarPedido.show();
        } else {
            formPedido.reportValidity();
        }
    });
    
    // Evento para confirmar registrar pedido
    document.getElementById('btnConfirmarRegistrarPedido').addEventListener('click', () => {
        // Aquí iría la lógica para enviar el formulario
        alert('Pedido registrado correctamente');
        formPedido.reset();
        productosBody.innerHTML = ''; // Limpiar productos
        // Agregar una fila vacía
        productosBody.innerHTML = `
            <tr>
                <td>
                    <select class="form-select" name="producto[]" required>
                        <option value="" selected disabled>Seleccione un producto</option>
                        <option value="producto_a">Producto A</option>
                        <option value="producto_b">Producto B</option>
                    </select>
                </td>
                <td><input type="number" name="cantidad[]" class="form-control text-center" value="1" min="1" required></td>
                <td><input type="text" name="precio_unitario[]" class="form-control text-end" value="15.00" readonly></td>
                <td class="text-end">$15.00</td>
                <td class="text-center">
                    <button type="button" class="btn btn-sm btn-outline-danger btn-eliminar-producto" title="Eliminar producto">Eliminar</button>
                </td>
            </tr>
        `;
        actualizarTotales();
        modalConfirmarRegistrarPedido.hide();
    });
    
    // Evento para eliminar pedido (abre modal de confirmación)
    document.addEventListener('click', (e) => {
        if(e.target.classList.contains('btn-eliminar-pedido')) {
            pedidoAEliminar = e.target.closest('tr');
            if(pedidoAEliminar) {
                modalConfirmarEliminarPedido.show();
            }
        }
    });
    
    // Evento para confirmar eliminar pedido
    document.getElementById('btnConfirmarEliminarPedido').addEventListener('click', () => {
        if(pedidoAEliminar) {
            pedidoAEliminar.remove();
            modalConfirmarEliminarPedido.hide();
            pedidoAEliminar = null;
            alert('Pedido eliminado correctamente');
        }
    });
    
    // Inicializa totales en carga
    actualizarTotales();
});
</script>
@endsection