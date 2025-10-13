<header> 
<?php

    if (isset($_POST['nom']) && isset($_POST['foto'])){

        $nombre = $_POST['nom'];
        $foto =  $_POST['foto'];

    }

    echo "<h3>¡Buenas, $nombre!</h3>";
    echo "<img src='$foto' alt='$foto'>";
    
?>
</header>



