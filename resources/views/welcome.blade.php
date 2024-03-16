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
        <article>
            <h2>Add a contact</h2>
            <form method="post" action="/contacts">
                @csrf
                <div>
                    <label>
                        Name
                        <input type="text" name="name">
                    </label>
                </div>
                <div>
                    <label>
                        E-mail
                        <input type="email" name="email">
                    </label>
                </div>
                <button type="submit">Add to Contacts</button>
            </form>
        </article>
        <h2>Contacts</h2>
        <ul>
            @foreach ($contacts as $contact)
            <li>
                <span>{{$contact->name}}, {{$contact->email}}</span>
            </li>
            @endforeach
        </ul>
    </main>
</body>

</html>