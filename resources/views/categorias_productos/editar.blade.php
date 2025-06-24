@extends('layouts.app2')

@section('title', 'Editar Categoría')

@section('content')
@section('page_css')
  <link href="{{ asset('css/categorias/editar.css') }}" rel="stylesheet">
@endsection

<div class="container py-5">
    <div class="mx-auto" style="max-width: 600px;">
        <div class="text-center">
            <h2 class="titulo-principal">Editar Categoría</h2>
        </div>

        <div class="card shadow">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="nombreCategoria" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombreCategoria" value="{{ $categoria->nombre }}">
                    </div>
                    <div class="mb-3">
                        <label for="descripcionCategoria" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcionCategoria" rows="3">{{ $categoria->descripcion }}</textarea>
                    </div>
                    <div class="botones-centrados">
                        <a href="{{ route('categorias') }}" class="btn btn-cancelar">Cancelar</a>
                        <button type="button" class="btn btn-personalizado">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
