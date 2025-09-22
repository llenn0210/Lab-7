<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
</head>
<body>
    
    <form method="POST" action="/register">
        <h2>Register</h2>
    @csrf
    <input name="name" placeholder="Name" required>
    <input name="email" type="email" placeholder="Email" required>
    <input name="password" type="password" placeholder="Password" required>
    <input name="password_confirmation" type="password" placeholder="Confirm Password" required>
    <button type="submit">Register</button>
     <div class="extra-links">
            <p>Already have an account? <a href="/login">Login</a></p>
        </div>
</form>
</body>
</html>