<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión - IMC App</title>
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
        <h1>Iniciar sesión</h1>

        @if ($errors->any())
    <div style="background-color: #ffcdd2; color: #b71c1c; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
        <ul style="list-style: none; padding: 0;">
            @foreach ($errors->all() as $error)
                <li>⚠️ {{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


        @if (session('status'))
            <div style="background-color: #dcedc8; padding: 10px; margin-bottom: 20px; border-radius: 5px;">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" required autofocus value="{{ old('email') }}">

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Ingresar</button>
        </form>

        <div class="extra-links">
            <p>¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate aquí</a></p>
        </div>
    </div>
</body>
</html>
