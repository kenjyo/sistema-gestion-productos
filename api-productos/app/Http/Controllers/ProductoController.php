<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        return response()->json(Producto::all(), 200);
    }

    
    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        
        return response()->json($producto);
    }

    public function store(Request $request)
    {
        $producto = Producto::create([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
        ]);

        return response()->json($producto, 201);
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);

        $producto->update([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
        ]);        

        return response()->json($producto, 200);
    }

    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);

        $producto->delete();

        return response()->json(null, 204);
    }
}
