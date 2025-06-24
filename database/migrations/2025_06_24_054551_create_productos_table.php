<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migración para crear la tabla productos.
 */
return new class extends Migration
{
    /**
     * Ejecuta la migración para crear la tabla productos.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->comment('Nombre del producto');
            $table->text('descripcion')->nullable()->comment('Descripción del producto');
            $table->decimal('precio', 10, 2)->comment('Precio base del producto');
            $table->string('material', 50)->nullable()->comment('Material del producto');
            $table->unsignedBigInteger('categoriaProductoId')->nullable()->comment('ID de la categoría');
            $table->string('imagenUrl', 255)->nullable()->comment('URL de la imagen');
            $table->enum('estado', ['activo', 'inactivo'])->default('activo')->comment('Estado del producto');
            $table->timestamps(); // created_at y updated_at automáticos

            $table->foreign('categoriaProductoId')
                  ->references('id')
                  ->on('categoriasProductos')
                  ->onDelete('set null');
        });
    }

    /**
     * Revierte la migración eliminando la tabla productos.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
