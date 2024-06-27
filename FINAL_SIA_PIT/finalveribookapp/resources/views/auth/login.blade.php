<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container">
        <form action="{{ route('login.submit') }}" method="POST">
            @csrf
            <h2>Login</h2>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <span class="error">{{ $message }}</span>
            @enderror
            @if ($errors->has('email') || $errors->has('password'))
                <span class="error">Invalid credentials. Please try again.</span>
            @endif
            <button type="submit">Login</button>
            <p>Don't have an account? <a href="{{ route('register.form') }}">Register!</a></p>
        </form>
    </div>
</body>
</html>
