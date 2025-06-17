<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Historial de Análisis</title>
    <style>
        body {
            background-color: #e8f5e9;
            font-family: Arial, sans-serif;
            color: #1b5e20;
            padding: 40px;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
            color: #2e7d32;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 16px;
            text-align: center;
            border-bottom: 1px solid #e0e0e0;
        }

        th {
            background-color: #43a047;
            color: white;
        }

        tr:hover {
            background-color: #f1f8e9;
        }

        img {
            width: 100px;
            height: auto;
            border-radius: 8px;
        }

        .volver {
            display: inline-block;
            margin-top: 30px;
            padding: 10px 20px;
            background-color: #2e7d32;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }

        .volver:hover {
            background-color: #1b5e20;
        }
    </style>
</head>
<body>
    <h1>Historial de Análisis</h1>

    <table>
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Resultado</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($registros as $registro)
                <tr>
                    <td>
                        <img src="{{ asset('storage/imagenes/' . $registro->nombre_imagen) }}" alt="Imagen">
                    </td>
                    <td>{{ $registro->resultado }}</td>
                    <td>{{ $registro->created_at->format('d/m/Y H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No hay análisis registrados aún.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div style="text-align: center;">
        <a href="/dashboard" class="volver">Volver al inicio</a>
    </div>
</body>
</html>
