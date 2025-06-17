<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Rutas públicas
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/dashboard');
});

/*
|--------------------------------------------------------------------------
| Rutas protegidas (solo usuarios logueados)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    // Vista de bienvenida / dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Vista para subir imagen
    Route::get('/analizar', function () {
        return view('welcome');
    });

    Route::get('/historial', function () {
        $registros = Auth::user()->analisis()->latest()->get();
        return view('historial', compact('registros'));
            });


    // Procesar imagen y enviar a backend
    Route::post('/analizar', function (Request $request) {
        if ($request->hasFile('imagen')) {
            $nombre = uniqid() . '.' . $request->file('imagen')->getClientOriginalExtension();
            $rutaFisica = storage_path('app/public/imagenes/' . $nombre);

            if (!file_exists(dirname($rutaFisica))) {
                mkdir(dirname($rutaFisica), 0777, true);
            }

            $request->file('imagen')->move(dirname($rutaFisica), $nombre);

            $respuesta = Http::attach(
                'imagen',
                file_get_contents($rutaFisica),
                $nombre
            )->post('http://127.0.0.1:8001/api/analizar-imagen');

            $resultado = $respuesta->json()['resultado'] ?? 'Error al procesar';

            return view('resultado', [
                'resultado' => $resultado,
                'imagen' => $nombre
            ]);
        }

        return back()->with('error', 'No se recibió imagen.');
    });

});

/*
|--------------------------------------------------------------------------
| Rutas de autenticación (Laravel Breeze)
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';

