<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form method="POST" action="{{ route('register.submit') }}">
            @csrf
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                @error('email')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
                @error('password_confirmation')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="{{ route('login.form') }}">Login</a></p>
    </div>
</body>
</html>
