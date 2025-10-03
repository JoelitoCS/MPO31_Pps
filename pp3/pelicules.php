
<?php

include("cartelera.php");

foreach($cartelera as $pelicula){
        echo "<h1>{$pelicula['nom']}</h1>";
        echo "<img src='{$pelicula['imatge']}' alt='{$pelicula['nom']}' width = '220px'></img>";

        echo "<div class='divBotones'>";

        foreach($pelicula['horaris'] as $hora){

        echo "<button class='botonesHorario'>$hora</button>";

        }
        echo "</div>";

        echo "<button><a href='{$pelicula['trailer']}'>Ver tráiler</a></button>";

        echo "<button><a href='detall.php?id={$pelicula['id']}'>Ver info</a></button>";

        
    }

?>