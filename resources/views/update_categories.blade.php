<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <form id="category_form"
        action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.edit') }}"
        method="POST">

        @csrf
        @if (isset($category))
            @method('PUT')
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control"
                        value="{{ isset($category) ? $category->name : '' }}" required>
                </div>

                <div class="form-group">
                    <label for="description">Descripcion</label>
                    <textarea name="description" id="description" class="form-control">{{ isset($category) ? $category->description : '' }}</textarea>
                </div>
            </div>
        </div>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button type="submit" id="submit-btn"
                class="btn btn-primary">{{ isset($category) ? 'Actualizar' : 'Guardar' }}</button>
            <a class="btn btn-primary"
                href="{{ isset($category) ? route('category.delete', $category->id) : 'Eliminar' }}"
                role="button">Borrar</a>
            <a class="btn btn-primary" href="{{ route('categoryIndex') }}" role="button">Cancelar</a>
        </div>

    </form>
</body>

</html>
