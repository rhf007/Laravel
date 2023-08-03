<!DOCTYPE html>
<html>
    <head>
        <title>Contact Details</title>
    </head>
    <body>
        <h1>Contact Details</h1>
        <p>Name: {{ $contact->name }}</p>
        <p>Email: {{ $contact->email }}</p>
        <p>Phone: {{ $contact->phone }}</p>
        <a href="{{ route('contacts.edit', $contact->id) }}">Edit</a>
        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </body>
</html>