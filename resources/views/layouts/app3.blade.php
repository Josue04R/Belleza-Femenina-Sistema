<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>@yield('title', 'Sistema')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/app_estilos/app3.css') }}">

    @yield('page_css')
    
</head>
<body>
    <nav style="background-color: #d6336c; padding: 1rem 0;  width: 100%; top: 0; z-index: 1030; display: flex; align-items: center; justify-content: space-between;">
    
    <div style="width: 30%; text-align: left; padding-left: 1rem;">
        <a href="/" style="color: white; font-weight: bold; font-size: 1.4rem; text-decoration: none;">Belleza Femenina</a>
    </div>

    <div style="width: 40%; text-align: center;">
        <form style="display: inline-flex; width: 100%; max-width: 500px;">
        <input type="search" placeholder="Buscar productos..." aria-label="Buscar"
                style="flex: 1; padding: 0.4rem 0.6rem; border: none; border-radius: 4px 0 0 4px;" />
        <button type="submit" style="background: white; border: none; border-radius: 0 4px 4px 0; padding: 0 0.75rem;">
            🔍
        </button>
        </form>
    </div>

    <div style="width: 30%; text-align: right; padding-right: 1rem;">
        @auth
        <a href="{{route('pedidosUser')}}" style="color: white; margin-left: 1rem; text-decoration: none;">Pedidos</a>
        <a href="{{ route('compras') }}" style="color: white; margin-left: 1rem; text-decoration: none;">Compras</a>
        @endauth
        <a href="#" style="color: white; position: relative; text-decoration: none; display: inline-block;margin-left: 1rem;">
            <span style="font-size: 1.5rem;">🛒</span>
            <span style="
                position: absolute;
                top: -5px;
                right: -10px;
                color: white;
                border: 2px solid #d6336c;
                border-radius: 50%;
                font-size: 0.7rem;
                padding: 2px 6px;
                font-weight: bold;
                line-height: 1;
                min-width: 20px;
                text-align: center;
            ">0</span>
        </a>


        <div style="position: relative; display: inline-block; margin-left: 1rem;">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" style="color: white; text-decoration: none; display: flex; align-items: center;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-circle" style="margin-right: 5px;"></i> Cuenta
            </a>
            <ul class="dropdown-menu">
                @guest
                    <li><a class="dropdown-item" href="{{route('login')}}">Iniciar sesión</a></li>
                    <li><a class="dropdown-item" href="{{route('registro')}}">Registrarse</a></li>
                @endguest

                @auth
                    <li><a class="dropdown-item" href="{{route('perfil')}}">Perfil</a></li>
                    <li>
                        <a class="dropdown-item" href="#"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="bi bi-box-arrow-right"></i> Cerrar sesión
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </li>
                @endauth
            </ul>
        </div>

    </div>

</nav>


    <main class="container-fluid">
        @yield('content')
    </main>

   <footer class="custom_footer">
    <div class="container">
        <div class="row d-flex justify-content-between text-center text-lg-start align-items-start">
            <!-- IZQUIERDA -->
            <div class="col-lg-4 mb-4 text-start">
                <h3 class="footer_title">Belleza Femenina</h3>
                <p>La mejor selección de moda femenina para mujeres elegantes y modernas. Encuentra tu estilo con nosotros.</p>
                <div class="social_icons">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- CENTRO -->
            <div class="col-lg-3 mb-4 d-flex flex-column align-items-center">
                <h3 class="footer_title">Información</h3>
                <ul class="footer_links list-unstyled text-center">
                    <li><a href="{{ route('sobre_nosotros') }}">Sobre nosotros</a></li>
                    <li><a href="{{route('guia_tallas')}}">Guía de tallas</a></li>
                    <li><a href="{{ route('preguntas_frecuentes') }}">Preguntas frecuentes</a></li>
                </ul>
            </div>

            <!-- DERECHA -->
            <div class="col-lg-4 mb-4 text-end">
                <h3 class="footer_title">Contacto</h3>
                <p><i class="fas fa-map-marker-alt me-2"></i> La Union Sur, Centro</p>
                <p><i class="fas fa-phone me-2"></i> +503 74747474</p>
                <p><i class="fas fa-envelope me-2"></i> bellezafemenina@gmail.com</p>
            </div>
        </div>

        <!-- COPYRIGHT -->
        <div class="row">
            <div class="col-12 text-center mt-3">
                <p class="mb-0">&copy; Todos los derechos reservados.</p>
            </div>
        </div>
    </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>