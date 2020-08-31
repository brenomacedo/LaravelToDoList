<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <form method="post" class="login-form">
            @csrf
            <img class="login-image" src="{{ asset('images/logo.png') }}" alt="logo">
            <input class="login-input" placeholder="email" type="email" name="email">
            <input class="login-input" placeholder="password" type="password" name="password">
            <button class="login-button">Entrar</button>
            <a href="{{ route('register') }}" class="login-create-acc">I have not an account</a>
            <p class="login-error">Usuário ou senha incorretos!</p>
        </form>
    </div>
</body>
</html>