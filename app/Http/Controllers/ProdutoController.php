<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        $categorias = Categoria::all();

        return view('produtos.index', compact('produtos', 'categorias'));
    }

    public function create()
    {
        $categorias = Categoria::all();

        return view('produtos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $categorias = Categoria::all();
        $produto = new Produto;

        $produto->nmProduto = $request->nmProduto;
        $produto->dsProduto = $request->dsProduto;
        $produto->idCategoria = $request->idCategoria;

        // Upload da imagem
        if ($request->hasFile('imagem')) {
            $file = $request->file('imagem');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move(public_path('/images'), $filename);
            $produto->imagem = $filename;
        }

        $produto->save();

        return redirect('/produtos');
    }

    public function edit($id)
    {
        $categorias = Categoria::all();
        $produto = Produto::findOrFail($id);

        return view('produtos.edit', ['produtos' => $produto], compact('produto', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        $categoria = Categoria::all();
        $data = $request->all();

        // Upload da imagem
        if ($request->hasFile('imagem')) {
            $file = $request->file('imagem');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move(public_path('/images'), $filename);
            $data['imagem'] = $filename;
        }

        Produto::findOrFail($request->id)->update($data);

        return redirect('/produtos');
    }

    public function destroy($id)
    {
        Produto::findOrFail($id)->delete();

        return redirect('/produtos');
    }
}
