<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaProductosSeeder extends Seeder
{
    /**
     * Ejecuta el seeder para insertar categorías.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoriasProductos')->insert([
            [
                'categoria' => 'Fajas Moldeadoras',
                'descripcion' => 'Fajas colombianas para moldear y estilizar el cuerpo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categoria' => 'Fajas Deportivas',
                'descripcion' => 'Fajas para uso durante actividades deportivas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categoria' => 'Fajas Post Parto',
                'descripcion' => 'Fajas para recuperación post parto',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

