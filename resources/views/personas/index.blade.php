@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lista de Personas</h2>
        <ul>
            @foreach($personas as $persona)
                <li>{{ $persona->nombre }} - Edad: {{ $persona->edad }} - Rol: {{ $persona->rol }}</li>
            @endforeach
        </ul>
    </div>
@endsection
