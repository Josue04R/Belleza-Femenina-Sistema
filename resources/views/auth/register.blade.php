@extends('layouts.app')

@section('title', 'Registro')

@section('content')
<div class="auth-container">
    <div class="form-box">
        <h2>Crear Cuenta</h2>
        <form action="{{ route('register')}}" method="POST">
             @csrf 
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" required>

             <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" required>

            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" required>

            <label for="telefono">Telefoo</label>
            <input type="tel" id="telefono" name="telefono" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Registrarse</button>
        </form>

        <div class="extra-link">
            <p>¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión</a></p>
        </div>
    </div>
     @if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
@endsection
