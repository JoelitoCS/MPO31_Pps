<?php

    include_once("productos.php");

    function generarTablaProductos($productos){


        echo "<table class='tabla-productos'>
        <tr>
            <th>Nombre</th>
            <th>Precio (€)</th>
            <th>Disponibilidad</th>
        </tr>";

        foreach($productos as $producto){

        $disponibilidad = $producto['disponibilidad'];

        if($disponibilidad === true){

            $disponibilidad = "Disponible";

        }else{
            
            $disponibilidad = "No disponible";

        };

        echo "
            <tr>
                <td>{$producto['nombre']}</td>
                <td>{$producto['precio']}</td>
                <td>{$disponibilidad}</td>
            </tr>
            
        ";

        }

        echo "</table>";

    };

    function muestraInfoContacto($nombre, $telefono, $foto){
        //compprobamos que tengamos un parametro nom, footo y telefon que este pasado mediante GET y entonces les definimos unas variables
        if (isset($_GET['nom']) && isset($_GET['foto']) && isset($_GET['telefon'])){

        $nombre = $_GET['nom'];
        $foto =  $_GET['foto'];
        $telefono = $_GET['telefon'];

        }

        echo "<h3>Nombre: $nombre</h3>";
        echo "<h3>Teléfono: $telefono</h3>";
        echo "<h3>Foto: $foto</h3>";


    };




?>