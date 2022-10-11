<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>LAB360 - @yield('title')</title>

    <!-- CSS FILES -->
    <link href="{{asset('web-assets/vendor/bootstrap-5.2.1-dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('web-assets/css/style.css')}}" rel="stylesheet">
    @yield('css')
    <!-- CSS FILES -->
</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container-fluid" id="main-menu">
            <a class="navbar-brand" href="#"><img src="{{asset('web-assets/img/logo.png')}}"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SERVICE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control" type="search" placeholder="buscar" id="search-input">
                    <button type="submit" id="search-button"><img src="{{asset('web-assets/img/search.png')}}"></button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid" id="main-container">
        
        @yield('content')

    </div>

    <!-- JS FILES -->
    <script src="{{asset('web-assets/vendor/bootstrap-5.2.1-dist/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @yield('js')
    <!-- JS FILES -->
</body>

</html>