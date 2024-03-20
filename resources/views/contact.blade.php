<x-layout>
    <nav aria-label="breadcrumb">
        <ul>
            <li><a href="/">Home</a></li>
            <li>Contact</li>
            <li>{{ $contact->name }}</li>
        </ul>
    </nav>
    <h1>{{ $contact->name }}</h1>
    @if ($contact->avatar)
    <img src="{{ $contact->avatar }}" alt="Avatar of {{ $contact->name }}" class="h-56 aspect-square object-cover rounded mb-4">
    @endif
    <pre class="p-2 rounded">{{ json_encode($contact, JSON_PRETTY_PRINT) }}</pre>
    <div class="flex gap-4">
        <form method="post" action="/delete-contact/{{$contact->id}}">
            @csrf
            <button>Delete</button>
        </form>
        <a href="/contacts/{{ $contact->id }}/edit" role="button">Edit details</a>
    </div>
</x-layout>