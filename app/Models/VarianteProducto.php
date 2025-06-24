<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Modelo para la tabla variantesProductos.
 * Representa variantes específicas (talla, color) de un producto.
 */
class VarianteProducto extends Model
{
    use HasFactory;

    protected $table = 'variantesProductos';

    protected $fillable = [
        'productoId',
        'talla',
        'color',
        'stock',
        'precio',
    ];

    /**
     * Relación: Una variante pertenece a un producto.
     */
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'productoId');
    }
}
