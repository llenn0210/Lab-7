<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <form method="POST" action="/login">
        <h2>Login</h2>
    @csrf
    <input name="email" type="email" placeholder="Email" required>
    <input name="password" type="password" placeholder="Password" required>
    <button type="submit">Login</button>
     <div class="extra-links">
            <p>Don't have an account? <a href="/register">Register</a></p>
        </div>
        
</form>
</body>
</html>