<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Hoja & Taza')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;600&family=Karla:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header class="site-header">
        <div class="container">
            <a href="{{ route('home') }}" class="logo">Hoja &amp; Taza</a>
            <nav class="site-nav">
                <a href="{{ route('home') }}">Catálogo</a>
                <a href="#">Carrito (0)</a>
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="container">
            &copy; {{ date('Y') }} Hoja &amp; Taza. Derechos reservados ante cualquier taza de té que se haga en otra página que no sea esta.
        </div>
    </footer>
</body>
</html>