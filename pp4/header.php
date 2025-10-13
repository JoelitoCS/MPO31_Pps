<header> 
<?php

    if (isset($_GET['nom']) && isset($_GET['foto'])){

        $nombre = $_GET['nom'];
        $foto =  $_GET['foto'];

    }

    echo "<h3>¡Buenas, $nombre!</h3>";
    echo "<img src='$foto' alt='$foto'>";
    
?>
</header>



