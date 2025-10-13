<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <?php
    
    include_once("header.php");
    include_once("productos.php");
    include_once("funciones.php");
    

    generarTablaProductos($productos);
    muestraInfoContacto($nombre, $telefono, $foto);

    ?>

    <?php include("footer.php"); ?>
    
</body>
</html>