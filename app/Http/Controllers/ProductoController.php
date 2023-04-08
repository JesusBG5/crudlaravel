<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    //
    function index(){
        $productos = Producto::get();
        return view('productos.index',[ 'productos' => $productos ]);
    }

    function destroy(Producto $producto){
        $producto->delete();
        return redirect('productos')->with('mensaje','Producto eliminado');
    }

    function create(){
        return view('productos.nuevo');
    }

    function store(Request $request){
        $datos = $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
        ]);
        $producto = Producto::create($datos);
        return redirect('productos')->with('mensaje','Producto registrado');
    }

    function edit(Producto $producto){
        return view('productos.editar',[ 'producto' => $producto ]);
    }

    function update(Request $request,Producto $producto){
        $producto->update([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'descripcion' => $request->descripcion,
        ]);
        return redirect('productos')->with('mensaje','Producto modificado');
    }
}