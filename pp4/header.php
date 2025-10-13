<header> 
<?php
    //Le decimos que si nom y foto siendo POST existen, entonces les asignamos unas variabbles para luego más  tarde enseñarlo  por pantalla
    if (isset($_POST['nom']) && isset($_POST['foto'])){

        $nombre = $_POST['nom'];
        $foto =  $_POST['foto'];

    }

    echo "<h3>¡Buenas, $nombre!</h3>";
    echo "<img src='$foto' alt='$foto'>";
    
?>
</header>



