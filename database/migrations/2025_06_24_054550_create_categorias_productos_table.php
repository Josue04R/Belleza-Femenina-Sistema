<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Migración para crear la tabla categoriasProductos.
 */
return new class extends Migration
{
    /**
     * Ejecuta la migración para crear la tabla categoriasProductos.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('categoriasProductos', function (Blueprint $table) {
            $table->id();
            $table->string('categoria', 50)->comment('Nombre de la categoría');
            $table->text('descripcion')->nullable()->comment('Descripción de la categoría');
            $table->timestamps(); // created_at y updated_at automáticos
        });
    }

    /**
     * Revierte la migración eliminando la tabla categoriasProductos.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('categoriasProductos');
    }
};
