<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;




Route::get('/hola', function () {
    return '<h1>¡Hola! Esta es mi primera ruta en mi laptop nueva</h1>';
});

Route::get('/', [ProyectoController::class, 'index']);
