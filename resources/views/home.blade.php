@extends('layouts.acti')

@section('side-content')
    <a href="/home" class="menu-item is-active">Home</a>
    <a href="/user" class="menu-item">Usuarios</a>
    <a href="/article" class="menu-item">Articulos</a>
    <a href="/category" class="menu-item">Categoria</a>
    <a href="/config" class="menu-item">Configuraciones</a>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Resumen</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <div class="card text-bg-success" style="max-width: 25rem;">
                        <div class="card-body">
                            <img src="{{ asset('images/usuario.svg') }}" alt="" class="float-end" height="70px">
                            <h5>Usuarios activos</h5>
                            <h3>3</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card text-bg-secondary" style="max-width: 25rem;">
                        <div class="card-body">
                            <img src="{{ asset('images/registro.svg') }}" alt="" class="float-end" height="70px">
                            <h5>Articulos activos</h5>
                            <h3>3</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card text-bg-info" style="max-width: 25rem;">
                        <div class="card-body">
                            <img src="{{ asset('images/autor.svg') }}" alt="" class="float-end" height="70px">
                            <h5>Autores</h5>
                            <h3>7</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card text-bg-warning" style="max-width: 25rem;">
                        <div class="card-body">
                            <img src="{{ asset('images/editorial.svg') }}" alt="" class="float-end" height="70px">
                            <h5>Editoriales</h5>
                            <h3>5</h3>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>
@endsection
