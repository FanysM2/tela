@extends('layouts.app')

@section('content')
    <style>
        .container {
            max-width: 600px;
            margin: 40px auto;
            font-family: Arial, sans-serif;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: #343a40; /* Color del texto de la pregunta */
        }

        form {
            background-color: #f8f9fa; /* Fondo claro para el formulario */
            border: 1px solid #007bff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: 600;
            color: #343a40;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 2px solid #007bff;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus {
            border-color: #0056b3;
            box-shadow: 0 0 5px rgba(0, 86, 179, 0.5);
        }

        button {
            background-color: #007bff;
            border: none;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="container">
        <h1>Responder Pregunta</h1>
        <p><strong>{{ $question->text }}</strong> ({{ $question->type }})</p>
        
        <form action="{{ route('questions.storeAnswer') }}" method="POST">
            @csrf
            <input type="hidden" name="question_id" value="{{ $question->id }}">
            
            @if ($question->type == 'multiple')
                @foreach ($question->answers as $answer)
                    <div class="form-group">
                        <input type="radio" name="answer_id" value="{{ $answer->id }}" id="answer{{ $answer->id }}">
                        <label for="answer{{ $answer->id }}">{{ $answer->text }}</label>
                    </div>
                @endforeach
            @else
                <div class="form-group">
                    <label for="answer_text">Escribe tu respuesta:</label>
                    <input type="text" name="answer_text" id="answer_text" required>
                </div>
            @endif
            
            <button type="submit">Enviar Respuesta</button>
        </form>
    </div>
@endsection


