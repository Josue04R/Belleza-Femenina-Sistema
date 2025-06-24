<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>@yield('title', 'Sistema')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        body, html {
            height: 100%;
            margin: 0;
            background: linear-gradient(to right, #ffc0cb, #ffe0e9);
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
        }

        nav.navbar {
            background-color: #d6336c;
            padding-top: 1.2rem;
            padding-bottom: 1.2rem;
            padding-left: 1rem;
            padding-right: 1rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1030;
            box-shadow: 0 2px 5px rgba(214, 51, 108, 0.4);
            /* overflow-x: hidden; <-- ELIMINADO para que no corte los dropdowns */
        }


        .container-fluid {
            max-width: 1200px;
            margin: 0 auto;
        }

        nav.navbar .navbar-brand {
            color: white;
            font-size: 1.4rem;
            font-weight: 700;
        }

        nav.navbar .nav-link,
        nav.navbar .dropdown-toggle {
            color: white;
            font-weight: 500;
            white-space: nowrap;
            cursor: pointer;
        }

        nav.navbar .nav-link:hover,
        nav.navbar .dropdown-toggle:hover {
            color: #ffb6c1;
        }

        .navbar-nav {
            overflow-x: auto;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
            flex-wrap: nowrap;
        }

        .navbar-nav::-webkit-scrollbar {
            height: 5px;
        }

        .navbar-nav::-webkit-scrollbar-thumb {
            background-color: #d6336c;
            border-radius: 5px;
        }

        .navbar-collapse {
            overflow-x: visible !important;
        }

        .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.7);
        }

        .navbar-toggler-icon {
            filter: invert(1);
        }

        .dropdown-menu {
            background-color: #d6336c;
            border: none;
            min-width: 200px;
        }

        .dropdown-menu a.dropdown-item {
            color: white;
        }

        .dropdown-menu a.dropdown-item:hover {
            background-color: #ffb6c1;
            color: #6b0b21;
        }

        main.content {
            flex: 1 0 auto;
            margin: 100px auto 30px auto; /* arriba 100px, auto a los lados para centrar, abajo 30px */
            padding: 20px 30px; /* espacio interior a izquierda y derecha */
            background-color: rgba(255, 255, 255, 0.85);
            max-width: 1200px;
            border-radius: 6px;
            box-shadow: 0 0 15px rgba(214, 51, 108, 0.3);
        }

        footer {
            flex-shrink: 0;
            background-color: #d6336c;
            color: white;
            text-align: center;
            padding: 15px 0;
            font-size: 0.9rem;
            margin-top: auto;
        }
    </style>
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
