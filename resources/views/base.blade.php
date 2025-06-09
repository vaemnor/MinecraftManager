<!DOCTYPE html>
<html lang="en">

    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    </head>

    <body>
        <header class="bg-success">
            <div class="py-5 text-center">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="logo">
                </a>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg shadow-sm bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto">
                        @yield('navbar')
                    </ul>
                    <form class="d-flex" action="{{ route('search') }}" method="get">
                        <input class="form-control me-2" type="text" name="query" placeholder="Search">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container p-5">
            @yield('content')
        </div>

        <footer class="text-center pt-3 pb-2 mt-5 border-top text-muted small">
            <p>Built with ❤️ by vaemnor &nbsp;|&nbsp; <a class="text-decoration-none" href="https://github.com/vaemnor/MinecraftManager" target="_blank">GitHub Repo</a></p>
        </footer>
    </body>

</html>
