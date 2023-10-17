<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Models\Categoria;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::where('vendedor_id', auth()->user()->id) // Filtra los productos del vendedor LOGEADO
                            -> latest() // Ordena de manera DESC por el campo "created_at"
                            -> get(); // Convierte los datos extraidos de la BD en un array
        // Retornamos una vista y la enviamos a la variable "productos"
        return view('panel.vendedor.lista_productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Creamos un nuevo producto para cargarle datos
        $producto = new Producto();

        // Recuperamos todas las categorías de la BD
        $categoria = Categoria::all(); // ¡Recordar importar el modelo Categoría!

        // Retornamos la vista de creación de productos, enviamos el producto y las categorías
        return view('panel.vendedor.lista_productos.create', compact('producto', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
