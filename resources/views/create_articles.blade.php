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
        <div class="card">
            <div class="card-body">
                <form action="{{ route('article.create') }}" method="POST">

                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Titulo</label>
                        <input type="title" name="title" class="form-control" placeholder="Ingrese el titulo">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Contenido</label>
                        <textarea name="content" cols="30" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Autor</label>
                        <input type="text" name="author" class="form-control" placeholder="Ingrese el titulo">
                    </div>

                    <div class="form-group">
                        <label for="category_id">Categoria</label>
                        <input type="category_id" name="category_id" class="form-control" placeholder="numero">
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <a class="btn btn-primary" href="{{ route('article') }}" role="button">Cancelar</a>
                    

                </form>
            </div>
        </div>

    </body>

    </html>
