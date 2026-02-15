<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    public function index() {
    $proyectos = \App\Models\Proyecto::all();
    return view('portafolio', compact('proyectos'));
}
}
