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
                <form action="{{ route('category.create') }}" method="POST">

                    @csrf
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Titulo</label>
                        <input type="title" name="name" class="form-control" placeholder="Ingrese el titulo">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Descripcion</label>
                        <textarea name="description" cols="30" rows="10"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <a class="btn btn-primary" href="{{ route('categoryIndex') }}" role="button">Cancelar</a>


                </form>
            </div>
        </div>

    </body>

    </html>
