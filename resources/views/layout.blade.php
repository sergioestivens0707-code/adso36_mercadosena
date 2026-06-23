    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-4Q6Gf2aSP4eDXB8Mipht37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDI" 
          crossorigin="anonymous">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        <a href="{{ url('/') }}">Inicio</a> |
        <a href="{{ url('categorias') }}">Categorias</a>
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-jlCDi7MgGQl227Qab0qiWQqQz24G6cBM0thvEMVjHnfYGF0rmFcoZFxsQBxwHKo" 
            crossorigin="anonymous"></script>
    @yield('js')
</body>
</html>
