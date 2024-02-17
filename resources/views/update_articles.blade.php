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
    <form id="article_form"
        action="{{ isset($article) ? route('articles.update', $article->id) : route('articles.edit') }}" method="POST">

        @csrf
        @if (isset($article))
            @method('PUT')
        @endif
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="title">Titulo</label>
                    <input type="text" name="title" id="title" class="form-control"
                        value="{{ isset($article) ? $article->title : '' }}" required>
                </div>

                <div class="form-group">
                    <label for="content">Contenido</label>
                    <textarea name="content" id="content" class="form-control">{{ isset($article) ? $article->content : '' }}</textarea>
                </div>

                <div class="form-group">
                    <label for="author">Autor</label>
                    <input type="text" name="author" id="author" class="form-control"
                        value="{{ isset($article) ? $article->author : '' }}">
                </div>

                <div class="form-group">
                    <label for="category_id">Categoria</label>
                    <select class="form-control" id="category_id" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ isset($article) && $article->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <button type="submit" id="submit-btn" class="btn btn-primary">{{ isset($article) ? 'Actualizar' : 'Guardar' }}</button>
        <a class="btn btn-primary" href="{{ isset($article) ? route('article.delete', $article->id) : 'Eliminar' }}" role="button">Borrar</a>
        <a class="btn btn-primary" href="{{ route('article') }}" role="button">Cancelar</a>

    </form>
</body>

</html>
