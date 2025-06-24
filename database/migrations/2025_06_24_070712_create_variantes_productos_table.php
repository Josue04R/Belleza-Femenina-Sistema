<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migración para crear la tabla variantesProductos.
 *
 * Almacena variantes específicas de productos (talla, color, stock, precio).
 */
return new class extends Migration
{
    /**
     * Ejecuta la migración para crear la tabla variantesProductos.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('variantesProductos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('productoId')->comment('ID del producto asociado');

            $table->string('talla', 10)->comment('Talla de la variante');
            $table->string('color', 30)->comment('Color de la variante');
            $table->integer('stock')->default(0)->comment('Cantidad disponible en stock');
            $table->decimal('precio', 10, 2)->nullable()->comment('Precio específico si difiere del producto base');

            $table->timestamps();

            $table->foreign('productoId')
                ->references('id')
                ->on('productos')
                ->onDelete('cascade');

            $table->index('productoId'); // Índice para mejorar joins y búsquedas
        });
    }

    /**
     * Revierte la migración eliminando la tabla variantesProductos.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('variantesProductos');
    }
};
