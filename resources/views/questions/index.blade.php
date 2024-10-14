@extends('layouts.app')

@section('content')
    <style>
        .container {
            max-width: 800px;
            margin: 40px auto;
            font-family: Arial, sans-serif;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: rgb(14, 36, 235); /* Color del texto del título */
            margin-bottom: 20px;
            text-align: center;
        }

        .card {
            background-color: #007bff; /* Color azul para el fondo de la tarjeta */
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 30px;
            background-color: rgb(133, 186, 247); /* Fondo blanco para el cuerpo de la tarjeta */
            border-radius: 10px; /* Asegura que el fondo blanco tenga bordes redondeados */
        }

        .list-group-item {
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
            background-color: #f8f9fa; /* Color de fondo de los elementos de la lista */
        }

        .list-group-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .badge {
            font-size: 0.9rem;
            background-color: #6c757d; /* Color para badge */
        }
    </style>

    <div class="container">
        <h1 class="text-center mb-4">Preguntas</h1>
        <div class="card shadow-lg">
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($questions as $question)
                        <li class="list-group-item d-flex justify-content-between align-items-center border-0 mb-3 shadow-sm">
                            <div>
                                <strong class="text-dark">{{ $question->text }}</strong> 
                                <span class="badge">{{ $question->type }}</span>
                            </div>
                            <a href="{{ route('questions.answer', $question->id) }}" class="btn btn-primary">Responder</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection




