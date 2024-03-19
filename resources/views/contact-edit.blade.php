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
        <form method="post" action="/edit-contact/{{$contact->id}}">
            @csrf
            <label>
                Name
                <input name="name" value="{{$contact->name}}"></input>
            </label>
            <label>
                ID
                <input name="id" readonly value="{{$contact->id}}"></input>
            </label>
            <label>
                E-mail
                <input type="email" name="email" value="{{$contact->email}}" readonly>
            </label>
            <button>Save details</button>
        </form>
    </main>
</body>

</html>