<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pp3</title>
    <style>

        body {
            margin: 0;
            padding: 20px;
            background-color: #0a0a0a; /* fondo oscuro */
            color: #f0f0f0;
            font-family: Arial, Helvetica, sans-serif;
        }

        h1 {
            text-align: center;
            color: #e6b800; /* dorado */
            margin-bottom: 30px;
            font-size: 2em;
            letter-spacing: 1px;
        }

        /* Contenedor general (grid flexible) */
        .cartelera {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 1.5rem;
            justify-items: center;
            margin-top: 20px;
        }

        /* Tarjeta de película */
        .pelicula {
            background-color: #1a1a1a;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
            text-align: center;
            width: 260px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            padding-bottom: 15px;
        }

        .pelicula:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(217, 31, 38, 0.6);
        }

        .pelicula img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-bottom: 2px solid #d91f26;
        }

        /* Título de película */
        .pelicula h2 {
            color: #e6b800;
            font-size: 1.1em;
            margin: 12px 0 8px;
        }

        /* Horarios */
        .divBotones {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 6px;
            margin-bottom: 10px;
        }

        .botonesHorario {
            background: transparent;
            border: 1px solid #e6b800;
            color: #f0f0f0;
            border-radius: 5px;
            padding: 5px 10px;
            font-size: 0.85em;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .botonesHorario:hover {
            background-color: #e6b800;
            color: #0a0a0a;
        }

        /* Botones principales */
        button {
            background-color: #d91f26;
            border: none;
            color: white;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 6px;
            cursor: pointer;
            margin: 5px;
            font-size: 0.9em;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #b8181e;
        }

        button a {
            color: inherit;
            text-decoration: none;
        }

        /* Layout detalle */
        .detalle {
            max-width: 800px;
            margin: 0 auto;
            background-color: #1a1a1a;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.4);
            padding: 20px;
        }

        .detalle img {
            display: block;
            margin: 0 auto 20px;
            border-radius: 8px;
            max-width: 100%;
        }

        

    </style>
</head>
<body>
    <h1>Cartelera OCine</h1>
    <?php

        include_once("pelicules.php");

    ?>
    
</body>
</html>