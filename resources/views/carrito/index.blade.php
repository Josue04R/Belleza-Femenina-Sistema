@extends('layouts.app3')

@section('title', 'Carrito de Compras')

@section('content')

<style>
    :root {
        --color-primario: #912f5d;
        --color-primario-hover: #7a294d;
        --color-secundario: #f2aec7;
        --color-texto-secundario: #6b0b21;
        --color-fondo: #fff7fb;
        --color-error: #d9534f;
        --color-error-hover: #c9302c;
    }

    body {
        background-color: var(--color-fondo);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    h2 {
        color: var(--color-primario);
        font-weight: 700;
        letter-spacing: 1px;
        text-shadow: 1px 1px 3px rgba(145, 47, 93, 0.3);
    }

    /* Botones personalizados */
    .btn-purple {
        background-color: var(--color-primario);
        border-color: var(--color-primario);
        color: white;
        font-weight: 600;
        border-radius: 0.6rem;
        padding: 0.55rem 1.6rem;
        box-shadow: 0 5px 15px rgba(145, 47, 93, 0.3);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }
    .btn-purple:hover {
        background-color: var(--color-primario-hover);
        border-color: var(--color-primario-hover);
        box-shadow: 0 8px 20px rgba(122, 41, 77, 0.5);
        color: white;
    }

    .btn-success {
        background-color: var(--color-secundario);
        border-color: var(--color-secundario);
        color: var(--color-primario);
        font-weight: 600;
        border-radius: 0.6rem;
        padding: 0.5rem 1.5rem;
        box-shadow: 0 5px 15px rgba(242, 174, 199, 0.4);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }
    .btn-success:hover {
        background-color: #e79ec0;
        border-color: #e79ec0;
        color: var(--color-primario-hover);
        box-shadow: 0 8px 22px rgba(231, 158, 192, 0.6);
    }

    .btn-warning {
        background-color: #f6b93b;
        border-color: #f6b93b;
        color: #4a2c01;
        font-weight: 600;
        border-radius: 0.6rem;
        padding: 0.4rem 1.2rem;
        box-shadow: 0 4px 12px rgba(246, 185, 59, 0.4);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }
    .btn-warning:hover {
        background-color: #d99e18;
        border-color: #d99e18;
        box-shadow: 0 6px 16px rgba(217, 158, 24, 0.6);
        color: #3b2400;
    }

    .btn-danger {
        background-color: var(--color-error);
        border-color: var(--color-error);
        color: white;
        font-weight: 600;
        border-radius: 0.6rem;
        padding: 0.4rem 1.2rem;
        box-shadow: 0 4px 12px rgba(217, 83, 79, 0.4);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }
    .btn-danger:hover {
        background-color: var(--color-error-hover);
        border-color: var(--color-error-hover);
        box-shadow: 0 6px 16px rgba(201, 48, 44, 0.6);
        color: white;
    }

    /* Contenedor central */
    .container {
        max-width: 960px;
        background-color: white;
        padding: 2rem 2.5rem;
        border-radius: 1rem;
        box-shadow: 0 10px 30px rgba(145, 47, 93, 0.1);
    }

    /* Contenedor acciones (botones) */
    .acciones-carrito {
        margin-bottom: 1.8rem;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1rem;
    }
    .acciones-carrito > a {
        flex-grow: 1;
        text-align: center;
        min-width: 180px;
    }

    /* Tabla */
    table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0 0.7rem;
        font-weight: 500;
    }

    thead tr {
        background-color: var(--color-secundario);
        color: var(--color-texto-secundario);
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        border-radius: 1rem;
        box-shadow: 0 2px 10px rgba(242, 174, 199, 0.3);
    }
    thead th {
        padding: 0.8rem 1rem;
    }

    tbody tr {
        background-color: white;
        box-shadow: 0 6px 18px rgba(145, 47, 93, 0.07);
        border-radius: 1rem;
        transition: transform 0.25s ease, box-shadow 0.3s ease;
    }
    tbody tr:hover {
        box-shadow: 0 8px 25px rgba(145, 47, 93, 0.2);
        transform: translateY(-3px);
    }

    tbody td {
        padding: 1rem 1.25rem;
        vertical-align: middle;
        color: #4a4a4a;
    }

    tbody td:first-child {
        font-weight: 600;
        text-align: left;
        padding-left: 1.5rem;
        color: var(--color-primario);
    }

    /* Botones pequeños dentro de la tabla */
    .btn-sm {
        padding: 0.3rem 0.7rem;
        font-size: 0.875rem;
        font-weight: 600;
        box-shadow: none;
        border-radius: 0.5rem;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }
    .btn-sm:hover {
        box-shadow: 0 0 10px rgba(145, 47, 93, 0.3);
    }

    /* Modal personalizado */
    .modal-content {
        border-radius: 1.25rem;
        box-shadow: 0 12px 40px rgba(145, 47, 93, 0.3);
        overflow: hidden;
    }

    .modal-header.bg-danger {
        background-color: var(--color-error);
        color: white;
        font-weight: 700;
        letter-spacing: 0.05em;
        border-top-left-radius: 1.25rem;
        border-top-right-radius: 1.25rem;
        box-shadow: 0 5px 15px rgba(217, 83, 79, 0.7);
    }

    .modal-header .btn-close {
        filter: brightness(0) invert(1);
        opacity: 0.9;
        transition: opacity 0.3s ease;
    }
    .modal-header .btn-close:hover {
        opacity: 1;
    }

    .modal-body {
        background-color: #fff0f7;
        padding: 2rem 2.5rem;
        font-weight: 600;
        color: var(--color-texto-secundario);
        text-align: center;
        font-size: 1.1rem;
    }

    .modal-footer {
        background-color: #fff0f7;
        border-top: none;
        padding: 1.5rem 2.5rem;
        justify-content: center;
        gap: 1.2rem;
    }

    .modal-footer .btn {
        padding: 0.6rem 2.2rem;
        font-weight: 700;
        border-radius: 1.5rem;
        box-shadow: 0 4px 15px rgba(145, 47, 93, 0.25);
        transition: box-shadow 0.3s ease;
    }
    .modal-footer .btn:hover {
        box-shadow: 0 7px 22px rgba(145, 47, 93, 0.45);
    }

    /* Responsive */
    @media (max-width: 575.98px) {
        .acciones-carrito {
            flex-direction: column;
            gap: 1rem;
        }
        .acciones-carrito > a {
            min-width: 100%;
        }
    }
</style>

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
