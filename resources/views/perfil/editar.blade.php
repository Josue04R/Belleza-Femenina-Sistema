@extends('layouts.app3')

@section('title', 'Editar Perfil')

@section('content')
<div class="container py-5" style="max-width: 600px;">
    <h2 class="mb-4 text-center" style="color: #912f5d; font-weight: 700;">Editar Perfil</h2>

    <form id="formEditarPerfil" class="needs-validation card shadow p-4 border-0 rounded-4" novalidate>
        <div class="mb-4">
            <label for="nombre" class="form-label fw-semibold" style="color: #6b0b21;">Nombre</label>
            <input type="text" id="nombre" class="form-control form-control-lg rounded-pill border-2"
                   style="border-color: #912f5d;" value="Luis Pérez" required>
            <div class="invalid-feedback">Por favor ingresa tu nombre.</div>
        </div>
        <div class="mb-4">
            <label for="email" class="form-label fw-semibold" style="color: #6b0b21;">Correo electrónico</label>
            <input type="email" id="email" class="form-control form-control-lg rounded-pill border-2"
                   style="border-color: #912f5d;" value="luis@example.com" required>
            <div class="invalid-feedback">Por favor ingresa un correo válido.</div>
        </div>
        <div class="mb-4">
            <label for="telefono" class="form-label fw-semibold" style="color: #6b0b21;">Teléfono</label>
            <input type="text" id="telefono" class="form-control form-control-lg rounded-pill border-2"
                   style="border-color: #912f5d;" value="7012-3456" required>
            <div class="invalid-feedback">Por favor ingresa un teléfono válido.</div>
        </div>
        <div class="mb-4">
            <label for="password" class="form-label fw-semibold" style="color: #6b0b21;">Contraseña</label>
            <input type="password" id="password" class="form-control form-control-lg rounded-pill border-2"
                   style="border-color: #912f5d;" value="12345678" required minlength="6">
            <div class="invalid-feedback">La contraseña debe tener al menos 6 caracteres.</div>
        </div>
        <div class="d-flex justify-content-between gap-3">
            <a href="{{ route('perfil') }}" class="btn px-4 py-2 fw-semibold"
               style="background-color: #f2aec7; color: #6b0b21; border-radius: 30px; border: none; transition: background-color 0.3s ease;"
               onmouseover="this.style.backgroundColor='#d598aa';"
               onmouseout="this.style.backgroundColor='#f2aec7';">
                Cancelar
            </a>
            <button type="submit" class="btn px-4 py-2 text-white fw-semibold"
                    style="background-color: #912f5d; border-radius: 30px; border: none; transition: background-color 0.3s ease;"
                    onmouseover="this.style.backgroundColor='#a73a76';"
                    onmouseout="this.style.backgroundColor='#912f5d';">
                Guardar Cambios
            </button>
        </div>
    </form>
</div>

<script>
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
</script>
@endsection
