<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Modelo para la tabla categoriasProductos.
 * Representa las categorías de productos.
 */
class CategoriaProducto extends Model
{
    use HasFactory;

    protected $table = 'categoriasProductos';

    protected $fillable = [
        'categoria',
        'descripcion',
    ];

    /**
     * Relación: Una categoría tiene muchos productos.
     */
    public function productos()
    {
        return $this->hasMany(Producto::class, 'categoriaProductoId');
    }
}
