<x-layout>
    <nav aria-label="breadcrumb">
        <ul>
            <li><a href="/">Home</a></li>
            <li>Contact</li>
            <li><a href="/contacts/{{ $contact->id }}">{{ $contact->name }}</a></li>
            <li>Edit</li>
        </ul>
    </nav>
    <h1>Edit - {{ $contact->name }}</h1>
    <form method="post" action="/edit-contact/{{$contact->id}}">
        @csrf
        <label>
            Name
            <input name="name" value="{{$contact->name}}"></input>
        </label>
        <label>
            ID
            <input name="id" readonly value="{{$contact->id}}" class="cursor-not-allowed"></input>
        </label>
        <label>
            E-mail
            <input type="email" name="email" value="{{$contact->email}}" readonly class="cursor-not-allowed">
        </label>
        <div class="flex gap-4">
            <a href="/contacts/{{ $contact->id }}" role="button">Cancel</a>
            <button>Save details</button>
        </div>
    </form>
</x-layout>