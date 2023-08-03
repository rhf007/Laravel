<!DOCTYPE html>
<html>
    <head>
        <title>Create New Contact</title>
    </head>
    <body>
        <h1>Create New Contact</h1>
        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <p>
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </p>
            <p>
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </p>
            <p>
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone">
            </p>
            <button type="submit">Save</button>
        </form>
    </body>
</html>