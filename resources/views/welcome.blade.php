<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Subir imagen - IMC Detector</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e8f5e9; /* verde claro */
            color: #1b5e20;
            text-align: center;
            padding-top: 50px;
        }

        h1 {
            color: #2e7d32;
        }

        form {
            background-color: #ffffff;
            padding: 30px;
            display: inline-block;
            border-radius: 10px;
            box-shadow: 0px 2px 10px rgba(0,0,0,0.1);
        }

        input[type="file"] {
            margin: 10px 0;
        }

        button {
            background-color: #43a047;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #388e3c;
        }
    </style>
</head>
<body>
    <h1>Analizador de IMC</h1>
    <form action="/analizar" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="imagen" required><br>
        <button type="submit">Analizar Imagen</button>
    </form>
</body>
</html>

