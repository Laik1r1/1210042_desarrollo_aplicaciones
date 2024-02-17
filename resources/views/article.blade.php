@extends('layouts.acti')

@section('side-content')
    <a href="/home" class="menu-item">Home</a>
    <a href="/user" class="menu-item">Usuarios</a>
    <a href="/article" class="menu-item is-active">Articulos</a>
    <a href="/category" class="menu-item">Categoria</a>
    <a href="/config" class="menu-item">Configuraciones</a>
@endsection

@section('content')
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary" href="{{route('articles')}}" role="button">Crear</a>
    </div>
    <table id="example" class="table table-striped" style="width: 100%;">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Accciones</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($articles as $article)
                <tr>
                    <td>{{$article->title}}</td>
                    <td>{{$article->author}}</td>
                    <td><a class="btn btn-primary" href="{{route('articles.edit',['id'=>$article->id])}}">Editar</a></td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection
