@extends('layouts.admin')

@section('titulo', 'Marcas')

@section('contenido')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcas</title>

    @sectionMissing('Mensaje')
        
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .text-center {
            text-align: center;
            margin: 20px;
        }

        /* Estilos para el contenedor de la imagen y los botones */
        .menu {
            display: flex;
            align-items: center; /* Alinea verticalmente la imagen y los botones */
            padding: 60px;
        }

        .menu img {
            max-width: 100%;
            height: auto;
            margin-right: 20px; /* Espacio entre la imagen y los botones */
        }

        .button {
            display: flex;
            flex-direction: column; /* Coloca los botones en una columna */
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .button {
            width: 200px; /* Ajusta el ancho de los botones */
            padding: 10px;
            font-size: 15px;
            cursor: pointer;
            border: 1px solid #073e91;
            border-radius: 5px;
            background-color: #9cbdee;
            color: #080101;
            margin-bottom: 10px; /* Espacio entre los botones */
        }

        .container {
            text-align: center;
            padding: 20px;
            color: #080101;
        }


    <style>
        .image-stack {
            display: flex;
            flex-direction: column; /* Coloca las imágenes verticalmente */
            align-items: center; /* Centra las imágenes horizontalmente */
            gap: 10px; /* Espacio entre las imágenes */
        }
      
        .image-stack img {
            width: 300px; /* Establece el ancho fijo */
            height: 300px; /* Establece la altura fija */
            object-fit: cover; /* Ajusta la imagen para que cubra el área sin distorsionar */
        } 
    </style>
    

</head>
<body>
    <div class="text-center">
        <h1 style="color: rgb(5, 0, 0);">MARCAS</h1>
    <div class="image-stack">
        <img src="{{ asset('img/Adidas.jpg') }}" alt="Imagen 1">
        
        <img src="{{ asset('img/chicos.jpg') }}" alt="Imagen 2">
      
        <img src="{{ asset('img/Liverpool.jpg') }}" alt="Imagen 3">
        
        <img src="{{ asset('img/new balance.jpg') }}" alt="Imagen 4">
    
        <img src="{{ asset('img/puma.jpg') }}" alt="Imagen 5">
     
        <img src="{{ asset('img/spring.jpg') }}" alt="Imagen 6">
     
        <!-- Añadir más imágenes si es necesario -->
    </div>
</body>
</html>
    </style>
</head>

<div class="container">
    <p> Gracias a nuestros controles de calidad y a nuestro personal experto, 
        contamos con clientes  que respaldan nuestro compromiso y calidad de todos los días.</p>
</div>
    </div>
   
   
</body>
</html>



@endif

@endsection