<html>

<head>
    <title>Nombre de la app - @yield('titulo')</title>
</head>

<body>
    @section('battalateral')
    Esto es la barra lateral
    @show

    <div class="container">
        @yield('contenido')
        
    </div>
</body>

</html>