<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi App')</title>
    <style>
        a {
            color: black;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        footer {
            margin-top: 40px;
            text-align: center;
            padding: 10px;
            background-color: coral;
        }

    </style>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('welcome') }}">WELCOME</a></li>
                <li><a href="{{ route('misiones.index') }}">LINK TO MISIONS</a></li>
                <li><a href="{{ route('tripulantes.index') }}">LINK TO CREW</a></li>
            </ul>
        </nav>
    </header>

    <main class="mt-6">
        @yield('content')
    </main>

    <footer>
        <p>&copy;Realized by: Coral Jácome García</p>
        <p>
            <a href="https://github.com/CoralJG">Visit my GitHub</a>
        </p>
    </footer>
</body>

</html>
