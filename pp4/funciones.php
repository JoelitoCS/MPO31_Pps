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
        
        //cogemos la  disponibiliidad de nuestro array productos, y solo habran trues o falses, segúnn si es true o no le diremos que esta dispoible oo no y ya luego recorremos la tabla y ya fuera del bucle la cerramos

        if ($producto['disponibilidad']) {

            $colorRojo = "white";

        } else {

            $colorRojo = "red";
            
        }

        $disponibilidad = $producto['disponibilidad'];

        if($disponibilidad === true){

            $disponibilidad = "Disponible";

        }else{
            
            $disponibilidad = "No disponible";

        };

        echo "
            <tr style='background-color:$colorRojo;'>
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
        if (isset($_POST['nom']) && isset($_POST['foto']) && isset($_POST['telefon'])){

        $nombre = $_POST['nom'];
        $foto =  $_POST['foto'];
        $telefono = $_POST['telefon'];

        }

        echo "<h3>Nombre: $nombre</h3>";
        echo "<h3>Teléfono: $telefono</h3>";
        echo "<img src='$foto' alt='$foto'>";


    };




?>