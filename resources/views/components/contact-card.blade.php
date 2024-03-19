<article>
    <pre class="p-2 rounded">{{ json_encode($contact, JSON_PRETTY_PRINT) }}</pre>
    <div class="flex gap-4">
        <form hx-post="/delete-contact/{{ $contact->id }}" hx-target="closest article" hx-swap="outerHTML">
            @csrf
            <button>Delete</button>
        </form>
        <a href=" /contacts/{{ $contact->id }}" role="button">View details</a>
    </div>
</article>