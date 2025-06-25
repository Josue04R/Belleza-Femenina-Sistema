@extends('layouts.app3')

@section('title', 'Perfil de Usuario')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="container py-5" style="max-width: 600px;">
    <h2 class="mb-5 text-center" style="color: #912f5d; font-weight: 700; font-family: 'Montserrat', sans-serif;">
       Perfil
    </h2>

    <div class="card shadow rounded-4 border-0">
        <div class="card-body p-4">
            <p class="mb-3"><strong style="color: #912f5d;">Nombre:</strong>{{auth()->user()->nombre}}</p>
             <p class="mb-3"><strong style="color: #912f5d;">Apellido:</strong>{{auth()->user()->apellido}}</p>
            <p class="mb-3"><strong style="color: #912f5d;">Correo electrónico:</strong> {{auth()->user()->email}}</p>
            <p class="mb-3"><strong style="color: #912f5d;">Teléfono:</strong> {{auth()->user()->telefono}}</p>
            <p class="mb-4"><strong style="color: #912f5d;">Contraseña:</strong> <span style="letter-spacing: 0.3em;">********</span></p>

            <div class="text-end">

                <a href="{{ route('perfil.editar') }}" class="btn btn-primary px-4 py-2"
                    style="background-color: #912f5d; border: none; border-radius: 30px; font-weight: 600; transition: background-color 0.3s ease;"
                    onmouseover="this.style.backgroundColor='#a73a76';"
                    onmouseout="this.style.backgroundColor='#912f5d';">
                    Editar Perfil
                </a>
                <form id="deleteForm" action="{{ route('perfil.eliminar') }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="button" id="deleteButton" class="btn btn-danger px-4 py-2" style="border-radius: 30px; font-weight: 600;">
                        Eliminar Perfil
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('deleteButton').addEventListener('click', function(e) {
    e.preventDefault();

    Swal.fire({
        title: '¿Estás seguro?',
        text: "Esta acción eliminará tu cuenta permanentemente.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('deleteForm').submit();
        }
    });
});
</script>

@endsection
