{{-- filepath: resources/views/layouts/app4.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegance Boutique - Moda Femenina</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
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
    @yield('content')

    <!-- Footer -->
    <footer class="custom_footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h3 class="footer_title">Elegance Boutique</h3>
                    <p>La mejor selección de moda femenina para mujeres elegantes y modernas. Encuentra tu estilo con nosotros.</p>
                    <div class="social_icons">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h3 class="footer_title">Comprar</h3>
                    <ul class="footer_links">
                        <li><a href="#">Novedades</a></li>
                        <li><a href="#">Ofertas</a></li>
                        <li><a href="#">Colecciones</a></li>
                        <li><a href="#">Categorías</a></li>
                        <li><a href="#">Regalos</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h3 class="footer_title">Información</h3>
                    <ul class="footer_links">
                        <li><a href="#">Sobre nosotros</a></li>
                        <li><a href="#">Blog de moda</a></li>
                        <li><a href="#">Tendencias</a></li>
                        <li><a href="#">Guía de tallas</a></li>
                        <li><a href="#">Preguntas frecuentes</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h3 class="footer_title">Contacto</h3>
                    <p><i class="fas fa-map-marker-alt me-2"></i> La Union Sur, Centro</p>
                    <p><i class="fas fa-phone me-2"></i> +503 74747474</p>
                    <p><i class="fas fa-envelope me-2"></i> bellezafemenina@gmail.com</p>
                    <div class="mt-3">
                        <h5 class="mb-2">Suscríbete a nuestro boletín</h5>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Tu email">
                            <button class="btn btn-light" type="button">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center copyright">
                    <p>&copy;Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>