<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Modelo para la tabla productos.
 * Representa un producto general.
 */
class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'material',
        'categoriaProductoId',
        'imagenUrl',
        'estado',
    ];

    /**
     * Relación: Un producto pertenece a una categoría.
     */
    public function categoria()
    {
        return $this->belongsTo(CategoriaProducto::class, 'categoriaProductoId');
    }

    /**
     * Relación: Un producto tiene muchas variantes.
     */
    public function variantes()
    {
        return $this->hasMany(VarianteProducto::class, 'productoId');
    }
}
