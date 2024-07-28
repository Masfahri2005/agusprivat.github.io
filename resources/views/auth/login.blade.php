<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login - Privat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 400px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-group input {
            border-radius: 4px;
            border: 1px solid #ccc;
            padding: 10px;
            width: 100%;
        }
        .form-group input:focus {
            border-color: #007bff;
            outline: none;
        }
        .form-group .error {
            color: red;
            font-size: 12px;
        }
        .form-group .checkbox-label {
            display: flex;
            align-items: center;
        }
        .form-group .checkbox-label input {
            margin-right: 10px;
        }
        .form-group .forgot-password {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .form-group .forgot-password a {
            font-size: 12px;
            color: #007bff;
            text-decoration: none;
        }
        .form-group .forgot-password a:hover {
            text-decoration: underline;
        }
        .form-group .login-button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group .login-button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <h2>Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="error mt-2" />
            </div>

            <!-- Password -->
            <div class="form-group">
                <x-input-label for="password" :value="__('Kata Sandi')" />
                <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="error mt-2" />
            </div>
            <!-- Forgot Password and Login Button -->
            <div class="form-group forgot-password">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">{{ __('Lupa Kata Sandi?') }}</a>
                @endif
                <br>
                <br>
                <a href="{{ '/register' }}">{{ __('Belum Punya Akun?') }}</a>
                <br>
                <br>
                <button type="submit" class="login-button">{{ __('Masuk') }}</button>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
