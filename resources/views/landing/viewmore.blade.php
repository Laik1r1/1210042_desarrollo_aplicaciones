<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Actividad7</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-xxl">
            <a class="navbar-brand" href="#">
                <span class="text-secondary fw-bold">
                    <img src="/assets/logo.png" height="30px" alt="">
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse align-center" id="main-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('landingpage') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('landingpage') }}">Artículos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    @if (Route::has('login'))
                        <div class="btn-group">
                            @auth
                                <a href="{{ url('/home') }}"
                                    class="btn btn-primary">Home</a>
                            @else
                                <a href="{{ route('login') }}"
                                    class="btn btn-dark">Log
                                    in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="btn btn-dark">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </li>
            </ul>

        </div>
    </nav>
    <!-- Cards Container -->
    <div class="mt-3 container">

        <div class="card">
            <div class="container">
                <h1 class="card-title">{{ $article->title }}</h1>
                <h6 class="card-text">publicado por: {{ $article->author }} &emsp;Publicado el:
                    {{ $article->created_at }}</h6>
                <hr>
                <p class="card-text" style="text-align: justify;">
                    {{ $article->content }}
                </p>
                <div class="mb-3 container text-end">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(Request::url()) }}"
                            class="btn btn-primary"><img src="{{ asset('images/facebook.png') }}"
                                style="width: 16px;">&emsp;FACEBOOK</a>
                        <a href="whatsapp://send?text=¡Mira este artículo! {{ urlencode(Request::url()) }}"
                            class="btn btn-success text-align:center;"><img src="{{ asset('images/whatsapp.png') }}"
                                style="width: 16px;">&emsp;WHATSAPP</a>
                    </div>
                </div>

            </div>
        </div>



    </div>

    </div>



</body>

</html>
