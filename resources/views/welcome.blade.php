<x-layout>
    <section>
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
    </section>
    <hr>
    <h2>Contacts</h2>
    @foreach ($contacts as $contact)
    <article>
        <pre class="p-2 rounded">{{ json_encode($contact, JSON_PRETTY_PRINT) }}</pre>
        <div class="flex gap-4">
            <form method="post" action="/delete-contact/{{$contact->id}}">
                @csrf
                <button>Delete</button>
            </form>
            <a href="/contacts/{{$contact->id}}" role="button">View details</a>
        </div>
    </article>
    @endforeach
</x-layout>