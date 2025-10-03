<?php

include("cartelera.php");

if (isset($_GET['id'])) {

    $id = ($_GET['id']); // le decimos que consiga de la array cartelera el parametro id, y lo guarde en la variable id

}


if (isset($cartelera[$id])) {

        $pelicula = $cartelera[$id];

        echo "<h1>{$pelicula['nom']}</h1>";
        echo "<img src='{$pelicula['imatge']}' alt='{$pelicula['nom']}' width = '220px'></img>";

        echo "<div class='divBotones'>";

        foreach($pelicula['horaris'] as $hora){

        echo "<button class='botonesHorario'>$hora</button>";

        }

        echo "</div>";

        echo "<p>{$pelicula['sinopsi']}</p>";
        echo "<p>{$pelicula['durada']}</p>";
        echo "<p>{$pelicula['director']}</p>";

        foreach($pelicula['repartiment'] as $actor){

            echo $actor . ", ";
            echo $actor . "";
        }

        echo "<p>{$pelicula['qualificacio']}</p>";
        echo "<p>{$pelicula['genere']}</p>";

        echo "<button><a href='{$pelicula['trailer']}'>Ver tráiler</a></button>";
        echo "<button><a href='pelicules.php'>Volver</a></button>";
}

?>


