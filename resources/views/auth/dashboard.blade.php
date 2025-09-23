<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

</head>
<body>
    <h1>Welcome, {{ auth()->user()->name }}!</h1>
    <p>You are logged in as {{ auth()->user()->email }}</p>

    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
