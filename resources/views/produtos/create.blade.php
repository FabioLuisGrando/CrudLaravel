@extends('template')

@section('content')
    <h1 class="text-center">Novo Produto</h1>

     @if(isset($errors) && count($errors)>0)
        <div class="text-center mt-4 mb-4 p-2 alert-danger">
            @foreach($errors->all() as $erro)
                {{$erro}}<br>
            @endforeach
        </div>
    @endif

    <div class="col-8 m-auto">
        <form name="formCad" id="formCad" method="POST" enctype="multipart/form-data">
            @csrf
            <input class="form-control" type="text" name="nmProduto" id="nmProduto" placeholder="Nome do Produto" value="{{$produtos->nmProduto ?? ''}}" required><br>
            <select class="form-control" name="idCategoria" id="idCategoria" value="{{$produtos->idCategoria ?? ''}}" required>
                <option value="{{$produtos->idCategoria ?? ''}}">{{$produtos->idCategoria ?? 'ID da Categoria'}}</option>
                @foreach($categorias as $categoria)
                    <option value="{{$categoria->id}}">{{$categoria->id}}</option>
                @endforeach
            </select><br>
            <input class="form-control" type="text" name="dsProduto" id="dsProduto" placeholder="Descrição do Produto" value="{{$produtos->dsProduto ?? ''}}" required><br>
            <input class="form-control" type="file" id="formFile" name="imagem"  value="{{$produtos->imagem ?? ''}}" required>
            <input class="btn btn-primary mt-3 mb-2" type="submit" value="Salvar">
        </form>
        <a href="/produtos"><button class="btn btn-outline-primary">Voltar</button></a>
    </div>
@endsection