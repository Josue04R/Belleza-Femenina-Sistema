@extends('layouts.app')

@section('title', 'Registro')

@section('content')
<div class="auth-container">
    <div class="form-box">
        <h2>Crear Cuenta</h2>
        <form action="#" method="POST">
            {{-- @csrf --}}
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>

            <label for="password_confirmation">Confirmar Contraseña</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>

            <button type="submit">Registrarse</button>
        </form>

        <div class="extra-link">
            <p>¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión</a></p>
        </div>
    </div>
</div>
@endsection
