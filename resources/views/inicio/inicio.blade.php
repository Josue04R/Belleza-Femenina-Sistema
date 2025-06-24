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
        <h2 class="text-center section_title">Productos</h2>
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
@endsection