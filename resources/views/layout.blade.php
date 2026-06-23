<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
          rel="stylesheet">

    @yield('css')
    <title>@yield('title')</title>
</head>

<body>
    <div class="container mt-4">
        <a href="{{ url('/') }}">Inicio</a> |
        <a href="{{ url('categorias') }}">Categorias</a>

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('js')
</body>
</html>
``