<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>@yield('title', 'Sistema')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/app_estilos/app2.css') }}">

    @yield('page_css')
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <span class="navbar-brand">Mi Sistema</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegación">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto flex-nowrap gap-3">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" 
                            aria-expanded="false" data-bs-auto-close="outside">
                            Gestión Usuarios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('permisos') }}">Gestión de Permisos/Roles</a></li>
                            <li><a class="dropdown-item" href="{{ route('usuarios') }}">Gestión Users</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" 
                            aria-expanded="false" data-bs-auto-close="outside">
                            Productos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('categorias') }}">Gestión de Categorías de Productos</a></li>
                            <li><a class="dropdown-item" href="{{ route('productos') }}">Gestión de Productos</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" 
                            aria-expanded="false" data-bs-auto-close="outside">
                            Ventas y Pedidos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('ventas') }}">Gestión de Ventas (registro + reporte)</a></li>
                            <li><a class="dropdown-item" href="{{ route('pedidos') }}">Gestión de Pedidos (logística/envío)</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('gastos') }}">Gestión de Gastos Operativos</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

   

    <main class="content">
        @yield('content')
    </main>

    <footer>
        &copy; 2025 Mi Sistema - Todos los derechos reservados.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
