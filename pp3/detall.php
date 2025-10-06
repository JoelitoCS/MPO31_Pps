<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pp3</title>
    <style>
      .pelicula {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #1c1c1c;
            color: #fff;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.5);
            font-family: 'Arial', sans-serif;
        }

        /* Imagen de la película */
        .pelicula img {
            max-height: 450px;
            object-fit: cover;
            border-radius: 10px;
            margin-left: 250px;
        }

        /* Título */
        .pelicula h2 {
            font-size: 2rem;
            margin-bottom: 15px;
            color: #ffcc00;
            text-align: center;
        }

        /* Botones de horarios */
        .divBotones {
            margin: 15px 0;
            text-align: center;
        }
        .botonesHorario {
            background-color: #ffcc00;
            border: none;
            color: #1c1c1c;
            padding: 10px 18px;
            margin: 5px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.2s;
        }
        .botonesHorario:hover {
            background-color: #e6b800;
            transform: scale(1.05);
        }

        /* Información adicional */
        .pelicula p {
            line-height: 1.6;
            margin: 8px 0;
        }

        /* Botones principales (Ver tráiler y Volver) */
        .pelicula .botonPrincipal {
            display: inline-block;
            margin: 10px 10px 0 0;
            padding: 12px 25px;
            background-color: #ffcc00;
            color: #1c1c1c;
            text-decoration: none;
            font-weight: bold;
            border-radius: 8px;
            transition: background-color 0.3s, transform 0.2s;
        }
        .pelicula .botonPrincipal:hover {
            background-color: #e6b800;
            transform: scale(1.05);
        }

        /* Reparto */
        .pelicula p.reparto {
            margin-top: 10px;
            font-style: italic;
            color: #ddd;
        }  

        button{
            background-color: #ffcc00;
            border: none;
            color: #1c1c1c;
            padding: 10px 18px;
            margin: 5px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.2s;
        }

        button a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    
</body>
</html>


<?php


include_once("cartelera.php");

//Isset sirve para verificar si existe y tiene valor, entonces si hay una id dentro de cartelera.php con get, hará: 
if (isset($_GET['id'])) {

    $id = intval($_GET['id']); // le decimos que consiga de la array cartelera el parametro id, y lo guarde en la variable id

}


if (isset($cartelera[$id])) {

        $peliculas = $cartelera[$id];

        echo "<div class='pelicula'>";
        echo "<img src='{$peliculas['imatge']}' alt='{$peliculas['nom']}'>";
        echo "<h2>{$peliculas['nom']}</h2>";

        echo "<div class='divBotones'>";
        foreach($peliculas['horaris'] as $hora){
            echo "<button class='botonesHorario'>$hora</button>";
        }
        echo "</div>";

        echo "<div>";

        echo "<p>{$peliculas['sinopsi']}</p>";
        echo "<p>{$peliculas['durada']}</p>";
        echo "<p>{$peliculas['director']}</p>";

        foreach($peliculas['repartiment'] as $actor){

            echo $actor . ", ";
            echo $actor . "";
        }

        echo "<p>{$peliculas['qualificacio']}</p>";
        echo "<p>{$peliculas['genere']}</p>";

        echo "<button><a href='{$peliculas['trailer']}' target='_blank'>Ver tráiler</a></button>";
        echo "<button><a href='pelicules.php'>Volver</a></button>";
}

?>


