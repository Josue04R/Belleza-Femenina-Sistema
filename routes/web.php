<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PerfilUsuarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/login', [AuthController::class, 'showLoginForm']
) -> name('login');

Route::post(
    '/login', [AuthController::class, 'loguearse']
) -> name('iniciarSesion');

Route::get(
    '/registro', [AuthController::class, 'showRegisterForm']
) -> name('registro');

Route::post('/registro', [AuthController::class, 'store'])->name('register');

//permisos roles
// Vista principal con la tabla de roles
Route::get('/permisos_roles', function () {
    return view('permisos_roles.index');
})->name('permisos');

// Vista para agregar un nuevo rol
Route::get('/permisos_roles/crear', function () {
    return view('permisos_roles.agregar');
})->name('permisos_roles.agregar');

// Vista para editar un rol (puedes recibir el ID si es necesario)
Route::get('/permisos_roles/{id}/editar', function ($id) {
    // En un futuro podrías pasar datos a la vista como el rol a editar
    return view('permisos_roles.editar', compact('id'));
})->name('permisos_roles.editar');


//usuarios
Route::get('/gestion_usuarios', function () {
    return view('usuarios.index');
})-> name('usuarios');

Route::get('/gestion_usuarios/agregar', function () {
    return view('usuarios.agregar');
})->name('usuarios.agregar');

Route::get('/gestion_usuarios/editar', function () {
    return view('usuarios.editar');
})->name('usuarios.editar');


//categoeia productos
Route::get('/categoria_productos', function () {
    return view('categorias_productos.index');
})-> name('categorias');

// Vista para crear categoría
Route::get('/categoria_productos/crear', function () {
    return view('categorias_productos.agregar');
})->name('categorias.agregar');

// Vista para editar categoría (ejemplo con ID fijo para pruebas)
Route::get('/categoria_productos/{id}/editar', function ($id) {
    $categoria = (object)[
        'id' => $id,
        'nombre' => 'Ropa Casual',
        'descripcion' => 'Prendas informales para uso diario'
    ];
    return view('categorias_productos.editar', compact('categoria'));
})->name('categorias.editar');


//productos
Route::get('/productos', function () {
    return view('productos.index');
})-> name('productos');

// Crear nuevo producto
Route::get('/productos/agregar', function () {
    return view('productos.agregar');
})->name('productos.agregar');

// Ver detalles del producto (simulado con ID 1 como ejemplo)
Route::get('/productos/{id}', function ($id) {
    return view('productos.ver', ['id' => $id]);
})->name('productos.ver');

// Editar producto (simulado con ID 1)
Route::get('/productos/{id}/editar', function ($id) {
    return view('productos.editar', ['id' => $id]);
})->name('productos.editar');


Route::get('/ventas', function () {
    return view('ventas.index');
})-> name('ventas');

Route::get('/pedidos', function () {
    return view('pedidos.index');
})-> name('pedidos');

Route::get('/gastos', function () {
    return view('gastos_operativos.index');
})-> name('gastos');

//perfil usuarios clientes
Route::get('/perfil', function () {
    return view('perfil.index');
})-> name('perfil');

Route::get('/perfil/editar', function () {
    return view('perfil.editar');
})-> name('perfil.editar');

Route::get('/pedidos_usuarios', function () {
    return view('pedidos_usuarios.index');
})-> name('pedidosUser');

//carrito
Route::get('/carrito', function () {
    return view('carrito.index');
})-> name('carrito');

// Agregar producto
Route::get('/carrito/agregar', function () {
    return view('carrito.agregar');
})->name('carrito.agregar');

// Editar producto
Route::get('/carrito/editar/{id}', function ($id) {
    $producto = [
        'id' => $id,
        'nombre' => 'Camiseta',
        'cantidad' => 2,
        'precio' => 15.50
    ];
    return view('carrito.editar', compact('producto'));
})->name('carrito.editar');

// Proceder al pago
Route::get('/carrito/pago', function () {
    return view('carrito.pago');
})->name('carrito.pago');




Route::get('/compras', function () {
    return view('compras.index');
})-> name('compras');