<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Artisan;




Route::get('/hola', function () {
    return '<h1>¡Hola! Esta es mi primera ruta en mi laptop nueva</h1>';
});

Route::get('/', [ProyectoController::class, 'index']);

Route::get('/instalar-todo', function() {
    try {
        Artisan::call('migrate:fresh --seed --force');
        return "¡Éxito! Base de datos creada y proyectos de Cisco cargados. <a href='/'>Volver al inicio</a>";
    } catch (\Exception $e) {
        return "Error: " . $e->getMessage();
    }
});
