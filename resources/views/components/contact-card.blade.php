<article>
    <div class="flex gap-4 mb-4 items-center">
        @if ($contact->avatar !== null)
        <img src="{{ $contact->avatar }}" alt="An avatar of {{ $contact->name }}" class="max-h-32 aspect-square object-cover rounded-md">
        @endif
        <pre class="p-2 rounded flex-grow mb-0">{{ json_encode($contact, JSON_PRETTY_PRINT) }}</pre>
    </div>
    <div class="flex gap-4">
        <form hx-post="/delete-contact/{{ $contact->id }}" hx-target="closest article" hx-swap="outerHTML">
            @csrf
            <button>Delete</button>
        </form>
        <a href="/contacts/{{ $contact->id }}" role="button">View details</a>
    </div>
</article>