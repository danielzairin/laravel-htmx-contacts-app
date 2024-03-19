<x-layout>
    <nav aria-label="breadcrumb">
        <ul>
            <li><a href="/">Home</a></li>
            <li>Contact</li>
            <li>{{ $contact->name }}</li>
        </ul>
    </nav>
    <h1>{{ $contact->name }}</h1>
    <pre class="p-2 rounded">{{ json_encode($contact, JSON_PRETTY_PRINT) }}</pre>
    <div class="flex gap-4">
        <form method="post" action="/delete-contact/{{$contact->id}}">
            @csrf
            <button>Delete</button>
        </form>
        <a href="/contacts/{{ $contact->id }}/edit" role="button">Edit details</a>
    </div>
</x-layout>