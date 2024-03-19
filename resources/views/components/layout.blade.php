<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacts</title>

    <script src="https://unpkg.com/htmx.org@1.9.11"></script>
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><strong><a href="/">Contacts</a></strong></li>
            </ul>
            <ul>
                <li><a href="/">Home</a></li>
            </ul>
        </nav>
    </header>
    <main class="">
        {{ $slot }}
    </main>
</body>

</html>