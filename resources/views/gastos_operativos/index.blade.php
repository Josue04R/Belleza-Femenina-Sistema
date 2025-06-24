@extends('layouts.app2')

@section('title', 'Gestión de Gastos Operativos')

@section('content')
<div class="container py-4">
    <h2 class="mb-4 text-center" style="color: #912f5d;">Gestión de Gastos Operativos</h2>

    <!-- Botón para agregar gasto -->
    <div class="mb-3 text-end">
        <button class="btn btn-sm" style="background-color: #912f5d; color: white;" data-bs-toggle="modal" data-bs-target="#modalAgregarGasto" id="btnAgregarGasto">
            Agregar Gasto
        </button>
    </div>

    <!-- Tabla de gastos -->
    <div class="card shadow-sm">
        <div class="card-header text-white" style="background-color: #212529;">Lista de Gastos</div>
        <div class="card-body">
            <table class="table table-striped" id="tablaGastos">
                <thead class="table-light text-center">
                    <tr>
                        <th>Fecha</th>
                        <th>Descripción</th>
                        <th>Monto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2025-06-01</td>
                        <td>Compra de materiales</td>
                        <td>$250.00</td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-danger btnEliminarGasto">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal: Agregar Gasto -->
<div class="modal fade" id="modalAgregarGasto" tabindex="-1" aria-labelledby="modalAgregarGastoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="formAgregarGasto">
            <div class="modal-content">
                <div class="modal-header text-white" style="background-color: #912f5d;">
                    <h5 class="modal-title" id="modalAgregarGastoLabel">Agregar Gasto</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="fechaGasto" class="form-label">Fecha</label>
                        <input type="date" id="fechaGasto" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcionGasto" class="form-label">Descripción</label>
                        <input type="text" id="descripcionGasto" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="montoGasto" class="form-label">Monto</label>
                        <input type="number" id="montoGasto" class="form-control" min="0" step="0.01" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn" style="background-color: #912f5d; color: white;">Agregar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal: Confirmar Eliminar Gasto -->
<div class="modal fade" id="modalConfirmarEliminarGasto" tabindex="-1" aria-labelledby="modalConfirmarEliminarGastoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header text-white" style="background-color: #dc3545;">
                <h5 class="modal-title" id="modalConfirmarEliminarGastoLabel">Eliminar Gasto</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de que deseas eliminar el gasto de <strong id="descripcionGastoEliminar"></strong>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" id="btnConfirmarEliminarGasto" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap 5 JS Bundle (Popper incluido) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function() {
    console.log('Documento listo - jQuery funcionando');

    let filaAEliminar = null;
    const modalEliminarElem = document.getElementById('modalConfirmarEliminarGasto');
    const modalEliminar = new bootstrap.Modal(modalEliminarElem);

    // Delegación para botón eliminar en tabla (dinámicos y estáticos)
    $('#tablaGastos').on('click', '.btnEliminarGasto', function(e) {
        e.preventDefault();
        e.stopPropagation();
        console.log('Botón Eliminar clickeado');

        filaAEliminar = $(this).closest('tr');
        const descripcion = filaAEliminar.find('td:nth-child(2)').text();
        $('#descripcionGastoEliminar').text(descripcion);

        modalEliminar.show();
    });

    // Confirmar eliminación
    $('#btnConfirmarEliminarGasto').click(function() {
        if (filaAEliminar) {
            console.log('Eliminando fila de gasto:', filaAEliminar.find('td:nth-child(2)').text());
            filaAEliminar.remove();
            modalEliminar.hide();
            alert('Gasto eliminado correctamente');
            filaAEliminar = null;
        } else {
            console.log('No hay fila para eliminar');
        }
    });

    // Agregar nuevo gasto
    $('#formAgregarGasto').submit(function(e) {
        e.preventDefault();

        const fecha = $('#fechaGasto').val();
        const descripcion = $('#descripcionGasto').val().trim();
        const monto = parseFloat($('#montoGasto').val());

        if (!fecha || !descripcion || isNaN(monto) || monto <= 0) {
            alert('Por favor complete todos los campos correctamente.');
            return;
        }

        const nuevaFila = `
            <tr>
                <td>${fecha}</td>
                <td>${descripcion}</td>
                <td>$${monto.toFixed(2)}</td>
                <td class="text-center">
                    <button class="btn btn-sm btn-danger btnEliminarGasto">Eliminar</button>
                </td>
            </tr>
        `;

        $('#tablaGastos tbody').prepend(nuevaFila);

        // Ocultar modal Agregar Gasto con Bootstrap 5
        const modalAgregar = bootstrap.Modal.getInstance(document.getElementById('modalAgregarGasto'));
        if (modalAgregar) {
            modalAgregar.hide();
        }

        this.reset();
        alert('Gasto agregado correctamente');
    });
});
</script>
@endsection
