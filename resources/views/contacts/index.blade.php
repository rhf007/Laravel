<!DOCTYPE html>
<html>
    <head>
        <title>Contact List</title>
    </head>
    <body>
        <h1>Contact List</h1>
        <ul>
            @foreach($contacts as $contact)
                <li><a href="{{ route('contacts.show', $contact->id) }}">{{ $contact->name }}</a></li>
            @endforeach
        </ul>
        <a href="{{ route('contacts.create') }}">Create New Contact</a>
    </body>
</html>