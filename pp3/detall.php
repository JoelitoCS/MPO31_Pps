<?php

$cartelera = [
    [
        "nom" => "Una batalla tras otra",
        "imatge" => "https://www.ocinemagic.es/images/pelicules/8801.jpg", 
        "horaris" => ["16:00", "17:50", "19:00", "20:45", "22:00"],
        "sinopsi" => "Bob Ferguson, un ex revolucionario, debe rescatar a su hija secuestrada por un enemigo de su pasado. Con la ayuda de antiguos compañeros liderados por Sensei Sergio, enfrenta peligros y busca redención.",  
        "durada" => "161 min",
        "director" => "Paul Thomas Anderson",
        "repartiment" => ["Leonardo DiCaprio", "Benicio del Toro", "Teyana Taylor"],
        "qualificacio" => "+16",
        "genere" => "Acción / Comedia",
        "trailer" => "https://www.youtube.com/watch?v=U_wQ_20g8Jw"
    ],
    [
        "nom" => "Afterburn (Zona Cero)",
        "imatge" => "https://www.ocinemagic.es/images/pelicules/8908.jpg",  
        "horaris" => ["22:40"],
        "sinopsi" => "— Aquí iría la sinopsis de Afterburn (Zona Cero) —",
        "durada" => "105 min",
        "director" => "J.J. Perry",
        "repartiment" => ["Samuel L. Jackson", "Dave Bautista", "Olga Kurylenko"],
        "qualificacio" => "+16",
        "genere" => "Acción",
        "trailer" => "https://www.youtube.com/watch?v=yhCPdFOrFvI"
    ],
    [
        "nom" => "El cautivo",
        "imatge" => "https://www.ocinemagic.es/images/pelicules/8853.jpg",
        "horaris" => ["18:10", "22:15"],
        "sinopsi" => "Cuando su malvado enemigo resurge después de 16 años, una banda de exrevolucionarios se reúne para rescatar a la hija de uno de los suyos.",  
        "durada" => "133 min",
        "director" => "Alejandro Amenábar",
        "repartiment" => ["Julio Peña", "Alessandro Borghi", "José Manuel Poga"],
        "qualificacio" => "+12",  // según eCartelera aparece +12 :contentReference[oaicite:0]{index=0}
        "genere" => "Aventura",
        "trailer" => "https://www.youtube.com/watch?v=Zy4GBAoS7l4"
    ],
    [
        "nom" => "Maspalomas",
        "imatge" => "https://www.ocinemagic.es/images/pelicules/8925.jpg",
        "horaris" => ["22:40", "16:15", "20:30"],  // múltiple horarios
        "sinopsi" => "Tras romper con su pareja, Vicente, de 76 años, regresa a San Sebastián y se reencuentra con su hija, enfrentando su identidad y pasado.",  
        "durada" => "115 min",
        "director" => "Aitor Arregi, José Mari Goenaga",
        "repartiment" => ["José Ramón Soroiz", "Nagore Aranburu", "Kandido Uranga"],
        "qualificacio" => "+16",
        "genere" => "Drama",
        "trailer" => "https://www.youtube.com/watch?v=XZIkmRhRDEc"
    ],

    [
        "nom" => "Strangers: Capítulo 2",
        "imatge" => "https://image.tmdb.org/t/p/w500/…",
        "horaris" => ["15:50", "18:15", "20:15", "22:15"],
        "sinopsi" => "Una nueva entrega de la saga Strangers, donde los protagonistas enfrentan terrores desconocidos y revelaciones aterradoras.",  
        "durada" => "96 min",
        "director" => "Renny Harlin",
        "repartiment" => ["Madelaine Petsch", "Gabriel Basso", "Richard Brake"],
        "qualificacio" => "+16",
        "genere" => "Terror",
        "trailer" => "https://www.youtube.com/watch?v=Gb6QWwyw4dA"
    ],
];

if (isset($_GET['id'])){

    $i = $_GET['id'];
}


foreach($cartelera as $pelicula){

        echo "<h1>{$pelicula['nom']}</h1>";
        echo "<img src='{$pelicula['imatge']}' alt='{$pelicula['nom']}' width = '220px'></img>";

        echo "<div class='divBotones'>";

        foreach($pelicula['horaris'] as $hora){

        echo "<button class='botonesHorario'>$hora</button>";

        }
        echo "</div>";

        echo "<p>{$pelicula['sinopsi']}</p>";
        echo "<p>{$pelicula['durada']}</p>";
        echo "<p>{$pelicula['director']}</p>";
        foreach($pelicula['repartiment'] as $actor){
            echo $actor . ", ";
            echo $actor . "";
        }
        echo "<p>{$pelicula['qualificacio']}</p>";
        echo "<p>{$pelicula['genere']}</p>";

        echo "<button><a href='{$pelicula['trailer']}'>Ver tráiler</a></button>";
        echo "<button><a href='detall.php'>Ver info</a></button>";
}

?>


