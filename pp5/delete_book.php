<?php

session_start();

include_once "functions.php";
//BORRAR libro (DELETE EN BDO)

function borrarLibro($id) {
    //Comprobamos id
    if(isset($_SESSION['libros'][id])){
        //unset sirve para borrar, en este caso, elimina el libro con el id indicado
        unset($_SESSION['libros'][$id]);
    }

}

header("Location: home.php");
exit();


?>