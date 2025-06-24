@extends('layouts.app3')

@section('title', 'Proceder al Pago')

@section('content')

<style>
    :root {
        --color-primario: #912f5d;
        --color-primario-hover: #7a294d;
        --color-secundario: #f2aec7;
        --color-texto-secundario: #6b0b21;
    }

    body {
        background-color: #fff7fb;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .container {
        max-width: 480px;
        background: white;
        padding: 2.5rem 2rem;
        border-radius: 1rem;
        box-shadow: 0 8px 30px rgb(145 47 93 / 0.15);
        margin: 3rem auto;
    }

    h2 {
        color: var(--color-primario);
        font-weight: 700;
        letter-spacing: 1px;
        margin-bottom: 1.5rem;
    }

    p {
        color: var(--color-texto-secundario);
        font-weight: 600;
        margin-bottom: 1rem;
        line-height: 1.5;
    }

    .btn-group {
        margin-top: 2rem;
        display: flex;
        justify-content: center;
        gap: 1.2rem;
        flex-wrap: wrap;
    }

    .btn-secondary {
        background-color: #dba3b7;
        border-color: #dba3b7;
        color: var(--color-texto-secundario);
        font-weight: 600;
        padding: 0.6rem 2.5rem;
        border-radius: 2rem;
        box-shadow: 0 3px 8px rgb(219 163 183 / 0.5);
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    .btn-secondary:hover {
        background-color: #c98aa5;
        border-color: #c98aa5;
        color: white;
        box-shadow: 0 5px 12px rgb(201 138 165 / 0.7);
    }

    .btn-purple {
        background-color: var(--color-primario);
        border-color: var(--color-primario);
        color: white;
        font-weight: 700;
        padding: 0.6rem 2.5rem;
        border-radius: 2rem;
        box-shadow: 0 6px 15px rgb(145 47 93 / 0.45);
        transition: background-color 0.3s ease;
    }
    .btn-purple:hover {
        background-color: var(--color-primario-hover);
        border-color: var(--color-primario-hover);
        box-shadow: 0 8px 20px rgb(122 41 77 / 0.7);
        color: white;
    }
</style>

<div class="container text-center">
    <h2>Proceder al Pago</h2>

    <p class="fw-semibold">Estás a un paso de completar tu compra.</p>
    <p>Revisa los detalles de tu pedido y elige tu método de pago para finalizar.</p>

    <div class="btn-group">
        <a href="{{ route('carrito') }}" class="btn btn-secondary">Cancelar</a>
        <button class="btn btn-purple">Pagar</button>
    </div>
</div>

@endsection
