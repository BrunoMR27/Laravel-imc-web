<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido - IMC App</title>
    <style>
        body {
            background-color: #e8f5e9;
            color: #1b5e20;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 60px;
        }

        .container {
            background-color: #ffffff;
            margin: 0 auto;
            padding: 40px;
            max-width: 600px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #2e7d32;
        }

        p {
            font-size: 18px;
            margin-top: 20px;
        }

        a.boton {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 24px;
            background-color: #43a047;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }

        a.boton:hover {
            background-color: #388e3c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>¡Bienvenido {{ Auth::user()->name }}!</h1>
        <p>Esta aplicación utiliza visión por computadora para estimar tu índice de masa corporal (IMC) a partir de imágenes.</p>
        <p>Solo necesitas tomar o subir una fotografía frontal y lateral, y nuestro sistema, impulsado por inteligencia artificial, te mostrará el resultado.</p>
        <a href="/analizar" class="boton">Comenzar Análisis</a>
        <a href="/historial" class="boton" style="background-color: #2e7d32; margin-left: 10px;">Ver historial de análisis</a>

    </div>

    <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" style="background-color: #c62828; color: white; border: none; padding: 10px 20px; border-radius: 5px;">
        Cerrar sesión
    </button>
</form>

</body>
</html>

