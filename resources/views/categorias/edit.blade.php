@extends('template')

@section('content')
    <h1 class="text-center">Editar Categoria</h1>

        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif

        <div class="col-8 m-auto">
            <form action="/categorias/{{$categoria->id}}/editar" name="formCad" id="formCad" method="POST">
                @csrf
                @method('PUT')
                <input class="form-control" type="text" name="dsCategoria" id="categoria dsCategoria" placeholder="Descrição da Categoria" value="{{$categoria->dsCategoria ?? ''}}" required><br>
                <input class="btn btn-primary mb-2" type="submit" value="Salvar">
            </form>
            <a href="/categorias"><button class="btn btn-outline-primary">Voltar</button></a>
        </div>
@endsection