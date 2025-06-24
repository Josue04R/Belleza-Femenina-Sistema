@extends('layouts.app3')

@section('title', 'Proceder al Pago')

@section('page_css')
  <link href="{{ asset('css/carrito/pago.css') }}" rel="stylesheet">
@endsection

@section('content')

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
