<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
    <script src="https://unpkg.com/htmx.org@1.9.11"></script>
</head>

<body>
    <main class="container">
        <h3>{{$contact->name}}</h3>
        <p>ID: {{$contact->id}}</p>
        <p>E-mail: {{$contact->email}}</p>
        <form method="post" action="/delete-contact/{{$contact->id}}">
            @csrf
            <button>Delete</button>
        </form>
    </main>
</body>

</html>