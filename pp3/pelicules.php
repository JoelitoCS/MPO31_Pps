
<?php
include_once("cartelera.php");

echo "<div class='cartelera'>";

foreach($cartelera as $pelicula){
    echo "<div class='pelicula'>";
    echo "<img src='{$pelicula['imatge']}' alt='{$pelicula['nom']}'>";
    echo "<h2>{$pelicula['nom']}</h2>";

    echo "<div class='divBotones'>";
    foreach($pelicula['horaris'] as $hora){
        echo "<button class='botonesHorario'>$hora</button>";
    }
    echo "</div>";

    echo "<div>";
    echo "<button><a href='{$pelicula['trailer']}' target='_blank'>Ver tráiler</a></button>";
    echo "<button><a href='detall.php?id={$pelicula['id']}'>Ver info</a></button>";
    echo "</div>";

    echo "</div>";
}

echo "</div>";
?>
