@extends('template')

@section('content')
<h1 class="text-center">Crud - Produtos</h1> <hr>
    <div class="text-center mt-3 mb-2 link">
        <a href="/"><button class="btn btn-primary">Menu</button></a>
    </div>

<div class = "text-center mt-3 mb-4"> 
    <a href="/produtos/criar">
        <button class="btn btn-success">Novo Produto</button>
    </a>
</div>

<div class='col-8 m-auto'>
    @csrf 
    <table class="table text-center">
    <thead>
        <tr>
        <th scope="col">Imagem</th>
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Categoria</th>
        <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produtos as $produto)
        <tr>
            <td><img src="/images/{{$produto->imagem}}" width="100px" height="100px" ></td>
            <td>{{$produto->nmProduto}}</td>
            <td>{{$produto->dsProduto}}</td>
            <td>{{$produto->idCategoria}}</td>
            <td>

            <a href='/produtos/{{$produto->id}}/editar'>
                <button class = "btn btn-primary">Editar</button>
            </a>
            <a href='/produtos/{{$produto->id}}' class="js-del">
                <button class ="btn btn-danger">Deletar</button>
            </a>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection
