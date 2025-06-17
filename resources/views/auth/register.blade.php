<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro - IMC App</title>
    <style>
        body {
            background-color: #e8f5e9;
            font-family: Arial, sans-serif;
            color: #1b5e20;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            color: #2e7d32;
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #c8e6c9;
        }

        button {
            background-color: #43a047;
            color: white;
            padding: 12px;
            width: 100%;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
            font-weight: bold;
        }

        button:hover {
            background-color: #388e3c;
        }

        .extra-links {
            text-align: center;
            margin-top: 20px;
        }

        .extra-links a {
            color: #2e7d32;
            text-decoration: none;
        }

        .extra-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Crear cuenta</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label for="name">Nombre completo</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>

            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>

            <label for="password_confirmation">Confirmar contraseña</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>

            <button type="submit">Registrarse</button>
        </form>

        <div class="extra-links">
            <p>¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión aquí</a></p>
        </div>
    </div>
</body>
</html>
