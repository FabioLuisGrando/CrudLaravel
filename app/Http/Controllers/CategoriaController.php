<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();

        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $categoria = new Categoria;

        $categoria->dsCategoria = $request->dsCategoria;

        $categoria->save();

        return redirect('/categorias');
    }

    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);

        return view('categorias.edit', ['categoria' => $categoria], compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $categoria = $request->all();

        Categoria::findOrFail($request->id)->update($categoria);

        return redirect('/categorias');
    }

    public function destroy($id)
    {
        Categoria::findOrFail($id)->delete();

        return redirect('/categorias');
    }
}
