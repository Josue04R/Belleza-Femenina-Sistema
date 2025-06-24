{{-- filepath: resources/views/inicio/inicio.blade.php --}}
@extends('layouts.app4')

@section('content')
    <!-- Hero Section -->
    <section class="hero_section">
        <div class="container">
            <h1 class="hero_title">Lo mejor en moda</h1>
            <p class="hero_subtitle">Descubre las últimas tendencias en moda femenina</p>
            <a href="#" class="btn btn_primary btn-lg pulse">Ver colección</a>
        </div>
    </section>

    <!-- Productos destacados -->
    <section class="container mb-5">
        <h2 class="text-center section_title">Productos más vendidos</h2>
        <div class="row">
            <!-- Producto 1 -->
            <div class="col-md-4 col-lg-3">
                <div class="card product_card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1585487000160-6ebcfceb0d03?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                            class="card-img-top product_img" alt="Vestido floral">
                        <span class="product_badge">Más vendido</span>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title product_title">Vestido Floral Primaveral</h5>
                        <div class="mb-3">
                            <span class="product_price">$59.99</span>
                            <span class="product_old_price">$79.99</span>
                        </div>
                        <button class="btn btn_add_to_cart">Añadir al carrito</button>
                    </div>
                </div>
            </div>
            <!-- Producto 2 -->
            <div class="col-md-4 col-lg-3">
                <div class="card product_card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                            class="card-img-top product_img" alt="Blusa elegante">
                        <span class="product_badge">25% OFF</span>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title product_title">Blusa Elegante Seda</h5>
                        <div class="mb-3">
                            <span class="product_price">$39.99</span>
                            <span class="product_old_price">$49.99</span>
                        </div>
                        <button class="btn btn_add_to_cart">Añadir al carrito</button>
                    </div>
                </div>
            </div>
            <!-- Producto 3 -->
            <div class="col-md-4 col-lg-3">
                <div class="card product_card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1543076447-215ad9ba6923?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                            class="card-img-top product_img" alt="Pantalón moderno">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title product_title">Pantalón Moderno</h5>
                        <div class="mb-3">
                            <span class="product_price">$45.99</span>
                        </div>
                        <button class="btn btn_add_to_cart">Añadir al carrito</button>
                    </div>
                </div>
            </div>
            <!-- Producto 4 -->
            <div class="col-md-4 col-lg-3">
                <div class="card product_card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1582426750875-13465457b9ce?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                            class="card-img-top product_img" alt="Falda plisada">
                        <span class="product_badge">Nuevo</span>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title product_title">Falda Plisada Elegante</h5>
                        <div class="mb-3">
                            <span class="product_price">$49.99</span>
                        </div>
                        <button class="btn btn_add_to_cart">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nuevas tendencias -->
    <section class="container mb-5">
        <h2 class="text-center section_title">Nuevas Tendencias</h2>
        <div class="row">
            <!-- Producto 5 -->
            <div class="col-md-4 col-lg-3">
                <div class="card product_card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                            class="card-img-top product_img" alt="Conjunto deportivo">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title product_title">Conjunto Deportivo</h5>
                        <div class="mb-3">
                            <span class="product_price">$65.99</span>
                        </div>
                        <button class="btn btn_add_to_cart">Añadir al carrito</button>
                    </div>
                </div>
            </div>
            <!-- Producto 6 -->
            <div class="col-md-4 col-lg-3">
                <div class="card product_card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1576566588028-4147f3842f27?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                            class="card-img-top product_img" alt="Abrigo ligero">
                        <span class="product_badge">30% OFF</span>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title product_title">Abrigo Ligero</h5>
                        <div class="mb-3">
                            <span class="product_price">$79.99</span>
                            <span class="product_old_price">$99.99</span>
                        </div>
                        <button class="btn btn_add_to_cart">Añadir al carrito</button>
                    </div>
                </div>
            </div>
            <!-- Producto 7 -->
            <div class="col-md-4 col-lg-3">
                <div class="card product_card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                            class="card-img-top product_img" alt="Top veraniego">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title product_title">Top Veraniego</h5>
                        <div class="mb-3">
                            <span class="product_price">$29.99</span>
                        </div>
                        <button class="btn btn_add_to_cart">Añadir al carrito</button>
                    </div>
                </div>
            </div>
            <!-- Producto 8 -->
            <div class="col-md-4 col-lg-3">
                <div class="card product_card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1595341595379-cf0f0f13c9a4?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                            class="card-img-top product_img" alt="Zapatos elegantes">
                        <span class="product_badge">Exclusivo</span>
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title product_title">Zapatos Elegantes</h5>
                        <div class="mb-3">
                            <span class="product_price">$89.99</span>
                        </div>
                        <button class="btn btn_add_to_cart">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner promocional -->
    <section class="container mb-5">
        <div class="row align-items-center bg-light p-4 rounded-3"
            style="background: linear-gradient(to right, #fff, var(--rosa_claro));">
            <div class="col-md-6">
                <h3 class="fw-bold" style="color: var(--rosa_oscuro);">Oferta Especial de Verano</h3>
                <p class="mb-4">Hasta 50% de descuento en toda la colección de verano. ¡No te lo pierdas!</p>
                <a href="#" class="btn btn_primary">Comprar ahora</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                    alt="Oferta especial" class="img-fluid rounded floating" style="max-height: 200px;">
            </div>
        </div>
    </section>
@endsection