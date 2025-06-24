@extends('layouts.app')

@section('title', 'Iniciar Sesión')

@section('content')
<div class="auth-container">
    <div class="form-box">
        <h2>Iniciar Sesión</h2>
        <form action="{{ route('iniciarSesion') }}" method="POST">
             @csrf
            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Ingresar</button>
        </form>

        <div class="extra-link">
            <p>¿No tienes cuenta? <a href="{{ route('registro') }}">Regístrate</a></p>
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
