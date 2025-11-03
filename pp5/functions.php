<?php
session_start();


if (!isset($_SESSION['libros'])) {
    $_SESSION['libros'] = 
    
    [
        "id" => 0,
        "titulo" => "Don Quijote de la Mancha",
        "autor" => "Miguel de Cervantes",
        "imagen" => "https://m.media-amazon.com/images/I/91CIwR3QU1L._UF1000,1000_QL80_.jpg",
        "descripcion" => "Don Quijote de la Mancha en busca de aventuras con su fiel acompañante Sancho Panza."
    ];
}

//FUNCION PARA AÑADIR libro (CREATE EN BDO)
function agregarLibro($titulo, $autor, $img, $desc, $id) {
    array_push($_SESSION['libros'], 
    [
        "id" => $id,
        "titulo" => $titulo,
        "autor" => $autor,
        "imagen" => $img,
        "descripcion" => $desc
    ]
    );

}

//EDITAR libro (UPDATE EN BDO)

function editarLibro($titulo, $autor, $img, $desc, $id) {
    //Comprobamos id
    if(isset($_SESSION['libros'][id])){
        $_SESSION['libros'][$id] = [
            "titulo" => $titulo,
            "autor" => $autor,
            "imagen" => $img,
            "descripcion" => $desc
        ];
    }

}



?>