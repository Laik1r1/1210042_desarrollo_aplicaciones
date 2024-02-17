@extends('layouts.acti')


@section('side-content')
    <a href="/home" class="menu-item">Home</a>
    <a href="/user" class="menu-item">Usuarios</a>
    <a href="/article" class="menu-item">Articulos</a>
    <a href="/category" class="menu-item  is-active">Categoria</a>
    <a href="/config" class="menu-item">Configuraciones</a>
@endsection

@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    @if (Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
        </div>
    @endif
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary" href="{{ route('category') }}" role="button">Crear</a>
    </div>
    <table id="example" class="table table-striped" style="width: 100%;">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Accciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description }}</td>
                    <td><a class="btn btn-primary" href="{{ route('categories.edit', ['id' => $category->id]) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
