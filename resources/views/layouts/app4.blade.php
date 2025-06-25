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
    <link rel="stylesheet" href="{{ asset('css/app_estilos/app4.css') }}">

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