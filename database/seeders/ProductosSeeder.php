<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Ejecuta el seeder para insertar productos de ejemplo.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            [
                'nombre' => 'Faja Moldeadora Clásica',
                'descripcion' => 'Faja colombiana con compresión alta y comodidad máxima',
                'precio' => 25.99,
                'material' => 'Nylon y Spandex',
                'categoriaProductoId' => 1,
                'imagenUrl' => 'https://i5.walmartimages.com/asr/5461ed19-b2bd-454b-bf6c-d723b18e971e.9b92c9a48354d26ef2f9f07492b86389.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Faja Deportiva Ultra',
                'descripcion' => 'Faja para uso deportivo con alta transpirabilidad',
                'precio' => 29.99,
                'material' => 'Poliéster y Elastano',
                'categoriaProductoId' => 2,
                'imagenUrl' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNxNwdqPNv23MRiAi4BUjevkLaEs8SB85GyGfDvkzJpPXBTV1qcxB0z7pSiYYnBgr-gp8&usqp=CAU',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Faja Post Parto Comfort',
                'descripcion' => 'Faja para recuperación post parto, suave y adaptable',
                'precio' => 22.50,
                'material' => 'Algodón y Lycra',
                'categoriaProductoId' => 3,
                'imagenUrl' => 'https://www.fajascolombianas.mx/cdn/shop/files/1103-FAJASTRAPLESSSECRETBROCHEBEIGE.jpg?v=1737489977',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Faja Reductora Plus',
                'descripcion' => 'Faja reductora con doble refuerzo para mayor compresión',
                'precio' => 35.00,
                'material' => 'Nylon, Spandex y Látex',
                'categoriaProductoId' => 1,
                'imagenUrl' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMgk_YQqMoy5B1SHd4vk3XxnDe4RLCHsPdfVXXAMeN178T21D1bEBfgzMnRrMpxEOWkmM&usqp=CAU',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Faja Invisible Seamless',
                'descripcion' => 'Faja sin costuras, ideal para uso diario y prendas ajustadas',
                'precio' => 28.75,
                'material' => 'Microfibra',
                'categoriaProductoId' => 2,
                'imagenUrl' => 'https://fajasmariaeperu.com/wp-content/uploads/2025/01/Faja-medio-muslo-con-mangas-_-9327-2-430x573.webp',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
