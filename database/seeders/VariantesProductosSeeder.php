<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariantesProductosSeeder extends Seeder
{
    /**
     * Ejecuta el seeder para insertar variantes de productos.
     *
     * @return void
     */
    public function run()
    {
        DB::table('variantesProductos')->insert([
            // Producto 1 - Faja Moldeadora Clásica
            ['productoId' => 1, 'talla' => 'S', 'color' => 'Negro', 'stock' => 12, 'precio' => 25.99, 'created_at' => now(), 'updated_at' => now()],
            ['productoId' => 1, 'talla' => 'M', 'color' => 'Negro', 'stock' => 15, 'precio' => 26.99, 'created_at' => now(), 'updated_at' => now()],
            ['productoId' => 1, 'talla' => 'L', 'color' => 'Negro', 'stock' => 10, 'precio' => 26.99, 'created_at' => now(), 'updated_at' => now()],

            // Producto 2 - Faja Deportiva Ultra
            ['productoId' => 2, 'talla' => 'S', 'color' => 'Azul', 'stock' => 20, 'precio' => 30.99, 'created_at' => now(), 'updated_at' => now()],
            ['productoId' => 2, 'talla' => 'M', 'color' => 'Azul', 'stock' => 12, 'precio' => 30.99, 'created_at' => now(), 'updated_at' => now()],
            ['productoId' => 2, 'talla' => 'L', 'color' => 'Azul', 'stock' => 8, 'precio' => 31.99, 'created_at' => now(), 'updated_at' => now()],

            // Producto 3 - Faja Post Parto Comfort
            ['productoId' => 3, 'talla' => 'M', 'color' => 'Beige', 'stock' => 18, 'precio' => 22.50, 'created_at' => now(), 'updated_at' => now()],
            ['productoId' => 3, 'talla' => 'L', 'color' => 'Beige', 'stock' => 15, 'precio' => 22.50, 'created_at' => now(), 'updated_at' => now()],

            // Producto 4 - Faja Reductora Plus
            ['productoId' => 4, 'talla' => 'M', 'color' => 'Negro', 'stock' => 9, 'precio' => 35.00, 'created_at' => now(), 'updated_at' => now()],
            ['productoId' => 4, 'talla' => 'L', 'color' => 'Negro', 'stock' => 7, 'precio' => 35.00, 'created_at' => now(), 'updated_at' => now()],

            // Producto 5 - Faja Invisible Seamless
            ['productoId' => 5, 'talla' => 'S', 'color' => 'Beige', 'stock' => 14, 'precio' => 28.75, 'created_at' => now(), 'updated_at' => now()],
            ['productoId' => 5, 'talla' => 'M', 'color' => 'Beige', 'stock' => 13, 'precio' => 28.75, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
