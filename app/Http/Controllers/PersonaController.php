<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        // Lista de objetos Persona
        $personas = [
            (object) ['nombre' => 'Juan', 'edad' => 25, 'rol' => 'Estudiante'],
            (object) ['nombre' => 'Ana', 'edad' => 30, 'rol' => 'Docente'],
            (object) ['nombre' => 'Carlos', 'edad' => 40, 'rol' => 'Coordinador']
        ];

        return view('personas.index', compact('personas'));
    }
}
