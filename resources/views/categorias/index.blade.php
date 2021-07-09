@extends('template')

@section('content')
<h1 class="text-center">Crud - Categorias</h1> <hr>
    <div class="text-center mt-3 mb-2 link">
        <a href="/"><button class="btn btn-primary">Menu</button></a>
    </div>

<div class = "text-center mt-3 mb-4"> 
    <a href="/categorias/criar">
        <button class="btn btn-success">Nova Categoria</button>
    </a>
</div>

<div class='col-8 m-auto'>
    @csrf 
    <table class="table text-center">
    <thead>
        <tr>
        <th scope="col">ID da categoria</th>
        <th scope="col">Descrição da categoria</th>
        <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categorias as $categoria)
        <tr>
            <th scope="row">{{$categoria->id}}</th>
            <td>{{$categoria->dsCategoria}}</td>
            <td>
                <a href='/categorias/{{$categoria->id}}/editar'>
                    <button class = "btn btn-primary">Editar</button>
                </a>

                <a href='/categorias/{{$categoria->id}}'>
                    <button class ="btn btn-danger">Deletar</button>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection
