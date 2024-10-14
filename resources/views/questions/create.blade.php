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
            color: rgb(12, 26, 221);
            text-align: center;
            margin-bottom: 20px;
        }

        .card {
            background-color: #007bff; /* Color azul para el fondo de la tarjeta */
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 30px;
            background-color: rgb(150, 180, 235); /* Fondo blanco para el cuerpo de la tarjeta */
            border-radius: 10px; /* Asegura que el fondo blanco tenga bordes redondeados */
        }

        .form-label {
            font-weight: 600;
            color: #343a40;
        }

        .form-control {
            border: 2px solid #007bff;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #0056b3;
            box-shadow: 0 0 5px rgba(0, 86, 179, 0.5);
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
    </style>

    <div class="container">
        <h1 class="text-center mb-4">Crear Pregunta</h1>
        <div class="card shadow-lg">
            <div class="card-body">
                <form action="{{ route('questions.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="text" class="form-label">Texto de la Pregunta:</label>
                        <input type="text" name="text" id="text" class="form-control" placeholder="Ingrese su pregunta aquí" required>
                    </div>
                    <div class="mb-4">
                        <label for="type" class="form-label">Tipo de Pregunta:</label>
                        <select name="type" id="type" class="form-select" required>
                            <option value="written">Escrita</option>
                            <option value="multiple">Opción Múltiple</option>
                        </select>
                    </div>
                    <div id="answers-container" style="display: none;">
                        <label for="answers" class="form-label">Respuestas (una por línea):</label>
                        <input type="text" name="answers[]" class="form-control mb-2" placeholder="Respuesta 1" required>
                        <input type="text" name="answers[]" class="form-control mb-2" placeholder="Respuesta 2" required>
                        <input type="text" name="answers[]" class="form-control mb-2" placeholder="Respuesta 3" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Guardar Pregunta</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('type').addEventListener('change', function() {
            document.getElementById('answers-container').style.display = this.value === 'multiple' ? 'block' : 'none';
        });
    </script>
@endsection


