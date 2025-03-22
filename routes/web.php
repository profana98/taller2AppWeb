<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PersonaController;

Route::get('/personas', [PersonaController::class, 'index']);

Route::get('/personass', function () {
    $personas = [
        (object) ['nombre' => 'Juan', 'edad' => 25, 'rol' => 'Estudiante'],
        (object) ['nombre' => 'Ana', 'edad' => 30, 'rol' => 'Docente']
    ];

    return view('personass.index', compact('personas'));
}); //return view('personass.index', ['personas' => $personas]);
