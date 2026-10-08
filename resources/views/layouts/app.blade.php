<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Hoja & Taza')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@500;600&family=Karla:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --verde: #2E4A3B;
            --hoja: #6E8B5B;
            --papel: #F7F8F4;
            --tinta: #1E2420;
            --ambar: #B7792B;
        }
        * { box-sizing: border-box; }
        body { margin: 0; font-family: 'Karla', system-ui, sans-serif; background: var(--papel); color: var(--tinta); line-height: 1.55; }
        a { color: inherit; }
        .container { max-width: 1100px; margin: 0 auto; padding: 0 1.25rem; }

        header { background: var(--verde); color: var(--papel); }
        header .container { display: flex; justify-content: space-between; align-items: center; padding-block: 1rem; }
        .logo { font-family: 'Lora', serif; font-size: 1.5rem; font-weight: 600; text-decoration: none; }
        nav a { margin-left: 1.25rem; text-decoration: none; opacity: .85; }
        nav a:hover, nav a:focus-visible { opacity: 1; text-decoration: underline; }

        main { padding-block: 2.5rem 4rem; }
        h1, h2, h3 { font-family: 'Lora', serif; }

        footer { border-top: 1px solid #D9DDD3; padding-block: 1.5rem; font-size: .9rem; color: #5A635C; }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <a href="{{ route('home') }}" class="logo">Hoja &amp; Taza</a>
            <nav>
                <a href="{{ route('home') }}">Catálogo</a>
                <a href="#">Carrito (0)</a>
            </nav>
        </div>
    </header>

    <main class="container">
        @yield('content')
    </main>

    <footer>
        <div class="container">
            &copy; {{ date('Y') }} Hoja &amp; Taza. Proyecto de prácticas con Laravel.
        </div>
    </footer>
</body>
</html>