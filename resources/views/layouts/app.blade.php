<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','DC Comic')</title>
    
    <!-- Styles -->
    @vite ('resources/js/app.js')
</head>
<body>

        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">DC COMICS</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('comics.index') }}">Comics</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('comics.create') }}">Create a new comic</a>
                        </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        
        @yield('content')

        <footer class="bg-light mt-5 p-3">
            <div class="container ">
                <ul class="row mb-0 justify-content-between">
                    <li class="col-auto">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="col-auto">
                        <a href="{{ route('comics.index') }}">Comics</a>
                    </li>
                    <li class="col-auto">
                        <a href="{{ route('comics.create') }}">Create a new comic</a>
                    </li>
                </ul>
            </div>
        </footer>

    </body>
</html>