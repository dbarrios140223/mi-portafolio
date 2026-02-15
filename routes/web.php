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
        // El comando 'migrate:fresh' creará las tablas que Laravel no encuentra
        Artisan::call('migrate:fresh --seed --force');
        return "¡Tablas creadas y datos cargados! <a href='/'>Ir al inicio</a>";
    } catch (\Exception $e) {
        return "Error técnico: " . $e->getMessage();
    }


    
});
