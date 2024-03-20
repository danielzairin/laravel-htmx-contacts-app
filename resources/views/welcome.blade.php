<x-layout>
    <section>
        <h2>Add a contact</h2>
        <form hx-post="/contacts" hx-target="#contact-list" hx-swap="beforeend" hx-on::after-request="if (event.detail.successful) this.reset()" enctype="multipart/form-data">
            @csrf
            <div>
                <label>
                    Avatar
                    <input type="file" name="avatar" accept="image/*">
                </label>
            </div>
            <div>
                <label>
                    Name
                    <input type="text" name="name" required>
                </label>
            </div>
            <div>
                <label>
                    E-mail
                    <input type="email" name="email" required>
                </label>
            </div>
            <button>Add to contacts</button>
        </form>
    </section>
    <hr>
    <h2>Contacts</h2>
    <ul id="contact-list">
        @foreach ($contacts as $contact)
        <li class="list-none">
            <x-contact-card :contact="$contact" />
        </li>
        @endforeach
    </ul>
</x-layout>