<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <style>
        header{
            background-color:lightgreen;
            padding:20px;
            display:flex;
            justify-content:space-between;
        }

        header img{
            width:50px;
            height:50px;

        }

        header h3{
            font-size:20px;
        }
    </style>
</head>
<body>

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

</body>
</html>


