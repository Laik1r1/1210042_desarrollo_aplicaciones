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
        <div class="row">
            @foreach ($articles as $article)
                <!-- Card For Article -->
                <div class="mt-3 card container" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('images/article_land.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{ Str::limit($article->content, 100, $end = '...') }}</p>
                        <a href="{{ route('article.viewMore', ['id' => $article->id]) }}" class="btn btn-primary">View
                            More</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



</body>

</html>
