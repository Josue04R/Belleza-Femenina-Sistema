@extends('layouts.app3')

@section('title', 'Gestión de Perfil de Usuario')

@section('content')
<div class="container py-5" style="max-width: 600px;">
    <h2 class="mb-5 text-center" style="color: #912f5d; font-weight: 700; font-family: 'Montserrat', sans-serif;">
        Gestión de Perfil de Usuario
    </h2>

    <div class="card shadow rounded-4 border-0">
        <div class="card-body p-4">
            <p class="mb-3"><strong style="color: #912f5d;">Nombre:</strong> Luis Pérez</p>
            <p class="mb-3"><strong style="color: #912f5d;">Correo electrónico:</strong> luis@example.com</p>
            <p class="mb-3"><strong style="color: #912f5d;">Teléfono:</strong> 7012-3456</p>
            <p class="mb-4"><strong style="color: #912f5d;">Contraseña:</strong> <span style="letter-spacing: 0.3em;">********</span></p>

            <div class="text-end">

                <a href="{{ route('perfil.editar') }}" class="btn btn-primary px-4 py-2"
                    style="background-color: #912f5d; border: none; border-radius: 30px; font-weight: 600; transition: background-color 0.3s ease;"
                    onmouseover="this.style.backgroundColor='#a73a76';"
                    onmouseout="this.style.backgroundColor='#912f5d';">
                    Editar Perfil
                </a>

            </div>
        </div>
    </div>
</div>
@endsection
