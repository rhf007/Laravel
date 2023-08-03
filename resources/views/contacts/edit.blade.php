<!DOCTYPE html>
<html>
    <head>
        <title>Edit Contact</title>
    </head>
    <body>
        <h1>Edit Contact</h1>
        <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
            @csrf
            @method('PUT')
            <p>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ $contact->name }}">
            </p>
            <p>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ $contact->email }}">
            </p>
            <p>
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" value="{{ $contact->phone }}">
            </p>
            <button type="submit">Save</button>
        </form>
    </body>
</html>