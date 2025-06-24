@extends('layouts.app3')

@section('title', 'Editar Perfil')

@section('content')
<div class="container py-5" style="max-width: 600px;">
    <h2 class="mb-4 text-center" style="color: #912f5d;">Editar Perfil</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('perfil.update') }}" id="formEditarPerfil" class="needs-validation card shadow p-4 border-0 rounded-4" novalidate method="POST">
        @csrf

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control form-control-lg rounded-pill border-2"  style="border-color: #912f5d;" value="{{ old('nombre', $user->nombre) }}" required>
        </div>

        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" id="apellido" name="apellido" class="form-control form-control-lg rounded-pill border-2"  style="border-color: #912f5d;" value="{{ old('apellido', $user->apellido) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" id="email" name="email" class="form-control form-control-lg rounded-pill border-2"  style="border-color: #912f5d;" value="{{ old('email', $user->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" id="telefono" name="telefono" class="form-control form-control-lg rounded-pill border-2"  style="border-color: #912f5d;" value="{{ old('telefono', $user->telefono) }}">
        </div>

        <hr>
        <p><strong>¿Deseas cambiar tu contraseña?</strong> (opcional)</p>

        <div class="mb-3">
            <label for="password" class="form-label">Nueva Contraseña</label>
            <input type="password" id="password" name="password"class="form-control form-control-lg rounded-pill border-2"  style="border-color: #912f5d;">
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg rounded-pill border-2"  style="border-color: #912f5d;">
        </div>

        <div class="text-end">
            <a href="{{ route('perfil') }}" class="btn btn-primary px-4 py-2"
                    style="background-color: #912f5d; border: none; border-radius: 30px; font-weight: 600; transition: background-color 0.3s ease;"
                    onmouseover="this.style.backgroundColor='#a73a76';"
                    onmouseout="this.style.backgroundColor='#912f5d';">
                   Volver
            </a>
            <button type="submit" class="btn btn-primary px-4 py-2"
                style="background-color: #912f5d; border: none; border-radius: 30px;">
                Guardar Cambios
            </button>
        </div>
    </form>
</div>

<!-- <script>
    (function () {
        'use strict';
        const form = document.getElementById('formEditarPerfil');
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            } else {
                event.preventDefault();
                alert('Cambios guardados (vista de edición).');
                window.location.href = "{{ route('perfil') }}";
            }
            form.classList.add('was-validated');
        });
    })();
</script> -->
@endsection
