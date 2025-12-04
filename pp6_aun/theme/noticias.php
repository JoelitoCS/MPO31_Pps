<?php
require 'config.php'; // incluimos la conexión

// Consulta a la tabla noticias
$sql = ""; // ordeno por fecha de publicación descendente


$stmt = $mysqli->query("SELECT * FROM noticies ORDER BY data_publicacio DESC LIMIT 3");


$noticias = $stmt->fetch_all(MYSQLI_ASSOC); // obtenemos todos los resultados
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <?php include 'footer.php';?>
</body>
</html>





