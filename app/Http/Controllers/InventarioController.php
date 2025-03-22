<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Models\Producto;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function create(Producto $producto)
    {
        return view('inventarios.create', compact('producto'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cantidad' => 'required|integer',
            'tipo' => 'required|in:entrada,salida',
            'descripcion' => 'nullable',
        ]);

        $producto = Producto::findOrFail($request->producto_id);

        Inventario::create([
            'producto_id' => $producto->id,
            'cantidad' => $request->cantidad,
            'tipo' => $request->tipo,
            'descripcion' => $request->descripcion,
        ]);

        // Actualizar la cantidad en el producto
        if ($request->tipo == 'entrada') {
            $producto->cantidad += $request->cantidad;
        } else {
            $producto->cantidad -= $request->cantidad;
        }
        $producto->save();

        return redirect()->route('productos.show', $producto->id)
            ->with('success', 'Inventario actualizado.');
    }
}

