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

         :root {
            --rosa_principal: #ff6b9e;
            --rosa_claro: #ffb6c1;
            --rosa_oscuro: #d94d82;
            --gris_claro: #f8f9fa;
            --gris_oscuro: #343a40;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #fff;
        }

        .custom_navbar {
            background: linear-gradient(135deg, var(--rosa_principal), var(--rosa_oscuro));
            box-shadow: 0 4px 15px rgba(214, 41, 118, 0.2);
        }

        .navbar_brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: white !important;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        .nav_link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 500;
            margin: 0 8px;
            transition: all 0.3s;
        }

        .nav_link:hover {
            color: white !important;
            transform: translateY(-2px);
        }

        .dropdown_menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .dropdown_item:hover {
            background-color: var(--rosa_claro);
            color: white;
        }

        .search_btn {
            background-color: white;
            color: var(--rosa_principal);
            border: none;
            border-radius: 50px;
            padding: 8px 20px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .search_btn:hover {
            background-color: var(--rosa_oscuro);
            color: white;
            transform: translateY(-2px);
        }

        .search_input {
            border-radius: 50px;
            border: none;
            padding: 10px 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .hero_section {
            background: linear-gradient(rgba(255, 107, 158, 0.8), rgba(255, 107, 158, 0.8)),
                url('https://images.unsplash.com/photo-1483985988355-763728e1935b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
            margin-bottom: 50px;
        }

        .hero_title {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero_subtitle {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }

        .btn_primary {
            background-color: white;
            color: var(--rosa_principal);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s;
        }

        .btn_primary:hover {
            background-color: var(--rosa_oscuro);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .section_title {
            font-weight: 700;
            color: var(--rosa_oscuro);
            margin-bottom: 40px;
            position: relative;
            display: inline-block;
        }

        .section_title:after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background-color: var(--rosa_principal);
            bottom: -10px;
            left: 25%;
        }

        .product_card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            margin-bottom: 30px;
        }

        .product_card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(214, 41, 118, 0.2);
        }

        .product_img {
            height: 250px;
            object-fit: cover;
            transition: all 0.5s;
        }

        .product_card:hover .product_img {
            transform: scale(1.05);
        }

        .product_badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: var(--rosa_principal);
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .product_title {
            font-weight: 600;
            color: var(--gris_oscuro);
            margin-top: 15px;
        }

        .product_price {
            color: var(--rosa_principal);
            font-weight: 700;
            font-size: 1.2rem;
        }

        .product_old_price {
            text-decoration: line-through;
            color: #999;
            font-size: 0.9rem;
            margin-left: 5px;
        }

        .btn_add_to_cart {
            background-color: var(--rosa_principal);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 15px;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn_add_to_cart:hover {
            background-color: var(--rosa_oscuro);
            transform: translateY(-2px);
        }

        .custom_footer {
            background: linear-gradient(135deg, var(--rosa_principal), var(--rosa_oscuro));
            color: white;
            padding: 60px 0 20px;
            margin-top: 80px;
        }

        .footer_title {
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .footer_links {
            list-style: none;
            padding: 0;
        }

        .footer_links li {
            margin-bottom: 10px;
        }

        .footer_links a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.3s;
        }

        .footer_links a:hover {
            color: white;
            padding-left: 5px;
        }

        .social_icons {
            margin-top: 20px;
        }

        .social_icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            margin-right: 10px;
            transition: all 0.3s;
        }

        .social_icons a:hover {
            background-color: white;
            color: var(--rosa_principal);
            transform: translateY(-5px);
        }

        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 40px;
            color: rgba(255, 255, 255, 0.7);
        }

        /* Efectos especiales */
        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(255, 107, 158, 0.7);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(255, 107, 158, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(255, 107, 158, 0);
            }
        }
    </style>

    @yield('page_css')
    
</head>
<body>
    <nav style="background-color: #d6336c; padding: 1rem 0;  width: 100%; top: 0; z-index: 1030; display: flex; align-items: center; justify-content: space-between;">
    
    <div style="width: 30%; text-align: left; padding-left: 1rem;">
        <a href="#" style="color: white; font-weight: bold; font-size: 1.4rem; text-decoration: none;">Belleza Femenina</a>
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
        <a href="#" style="color: white; margin-left: 1rem; text-decoration: none;">Pedidos</a>
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
                    <li><a href="#">Blog de moda</a></li>
                    <li><a href="#">Tendencias</a></li>
                    <li><a href="#">Guía de tallas</a></li>
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