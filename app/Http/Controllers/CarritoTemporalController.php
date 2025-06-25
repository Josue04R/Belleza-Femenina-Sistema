<?php

namespace App\Http\Controllers;
use App\Models\VarianteProducto;
use Illuminate\Http\Request;


/**
 * Controlador temporal para manejar el carrito sin persistencia en base de datos.
 */
class CarritoTemporalController extends Controller
{

    public function mostrar()
    {
        $carrito = session()->get('carrito', []);
        return view('carrito.index', compact('carrito'));
    }

    // Método para agregar producto al carrito (ya lo tienes)
    public function agregar(Request $request)
    {
        $request->validate([
            'productoVarianteId' => 'required|exists:variantesProductos,id',
            'cantidad' => 'required|integer|min:1',
        ]);

        $variante = VarianteProducto::findOrFail($request->productoVarianteId);

        if ($request->cantidad > $variante->stock) {
            return back()->with('error', 'No hay suficiente stock disponible.');
        }

        $carrito = session()->get('carrito', []);

        $key = array_search($variante->id, array_column($carrito, 'productoVarianteId'));

        if ($key !== false) {
            $carrito[$key]['cantidad'] += $request->cantidad;
        } else {
            $carrito[] = [
                'productoVarianteId' => $variante->id,
                'nombre' => $variante->producto->nombre,
                'talla' => $variante->talla,
                'color' => $variante->color,
                'precio' => $variante->precio,
                'cantidad' => $request->cantidad,
            ];
        }

        session()->put('carrito', $carrito);

        $variante->decrement('stock', $request->cantidad);

        return back()->with('success', 'Producto agregado al carrito.');
    }

    /**
     * Eliminar un producto del carrito.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
   public function eliminar(Request $request)
   {
        $carrito = session()->get('carrito', []);

        foreach ($carrito as $index => $item) {
            if ($item['productoVarianteId'] == $request->productoVarianteId) {
                // Devolver stock a la base de datos
                $variante = VarianteProducto::find($request->productoVarianteId);
                if ($variante) {
                    $variante->increment('stock', $item['cantidad']);
                }

                // Eliminar del carrito
                unset($carrito[$index]);
                break;
            }
        }

        session()->put('carrito', array_values($carrito));

        return redirect()->route('carrito')->with('success', 'Producto eliminado del carrito.');
    }


    /**
     * Editar la cantidad de un producto en el carrito.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function editarCantidad(Request $request)
    {
        $request->validate([
            'productoVarianteId' => 'required|integer',
            'cantidad' => 'required|integer|min:1',
        ]);

        $carrito = session()->get('carrito', []);

        foreach ($carrito as $index => $item) {
            if ($item['productoVarianteId'] == $request->productoVarianteId) {
                $variante = ProductoVariante::find($request->productoVarianteId);

                if (!$variante) {
                    return back()->with('error', 'Variante no encontrada.');
                }

                $cantidadActual = $item['cantidad'];
                $nuevaCantidad = $request->cantidad;

                if ($nuevaCantidad > $cantidadActual) {
                    // Verificar stock disponible para aumentar
                    $diferencia = $nuevaCantidad - $cantidadActual;
                    if ($diferencia > $variante->stock) {
                        return back()->with('error', 'No hay suficiente stock para aumentar la cantidad.');
                    }
                    $variante->decrement('stock', $diferencia);
                } elseif ($nuevaCantidad < $cantidadActual) {
                    // Devolver stock a la base de datos
                    $diferencia = $cantidadActual - $nuevaCantidad;
                    $variante->increment('stock', $diferencia);
                }

                // Actualizar cantidad en carrito
                $carrito[$index]['cantidad'] = $nuevaCantidad;

                session()->put('carrito', $carrito);

                return back()->with('success', 'Cantidad actualizada.');
            }
        }

        return back()->with('error', 'Producto no encontrado en el carrito.');
    }
}
