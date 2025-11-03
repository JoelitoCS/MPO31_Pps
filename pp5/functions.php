<?php
session_start();

if (!isset($_SESSION['personajes'])) {
    $_SESSION['personajes'] = 
    
    [
        "id" => 0,
        "nombre" => "Iron Man",
        "imagen" => "https://static.wikia.nocookie.net/mua/images/7/75/Img_0001_iron_man_mout.obj.png/revision/latest/thumbnail/width/360/height/360?cb=20200207025405",
        "poder" => "volar",
        "descripcion" => "Tony Stark en modo robot"
    ];
}

//FUNCION PARA AÑADIR PERSONAJE (CREATE EN BDO)
function agregarPersonaje($nombre, $img, $poder, $desc) {
    array_push($_SESSION['personajes'], 
    [
        "id" => $id,
        "nombre" => $nombre,
        "imagen" => $img,
        "poder" => $poder,
        "descripcion" => $desc
    ]
    );

}

//EDITAR PERSONAJE

function editarPersonaje($nombre, $imagen, $poder, $desc, $index) {
    //Comprobamos id
    if(isset($_SESSION['personajes'][id])){
        $_SESSION['personajes'][$id] = [
            "nombre" => $nombre,
            "imagen" => $imagen,
            "poder" => $poder,
            "descripcion" => $desc
        ];
    }

}

?>