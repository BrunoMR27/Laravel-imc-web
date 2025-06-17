<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del Análisis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f8e9;
            color: #33691e;
            text-align: center;
            padding-top: 50px;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            display: inline-block;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0,0,0,0.1);
        }

        img {
            border-radius: 10px;
            margin-top: 20px;
            width: 300px;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            background-color: #66bb6a;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #558b2f;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Resultado del Análisis</h1>
        <p><strong>Respuesta del modelo:</strong> {{ $resultado }}</p>
        <img src="{{ asset('storage/imagenes/' . $imagen) }}" alt="Imagen analizada">
        <br>
        <a href="/">Volver</a>
    </div>
</body>
</html>

