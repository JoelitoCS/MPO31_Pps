<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 3: Nombre aleatori parell o senar</title>
    <style>

        body{
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
        }

        .parell {
            background-color: green;
            color: #222;
            padding: 30px;
            margin: 30px auto;
            width: 200px;
            border-radius: 10px;
            font-size: 2em;
            font-weight: bold;
        }

        .senar {
            background-color: red;
            color: #222;
            padding: 30px;
            margin: 30px auto;
            width: 200px;
            border-radius: 10px;
            font-size: 2em;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Nombre aleatori parell o senar</h1>

    <?php

    $num = rand(0, 100);
    if($num % 2 == 0){
        echo "<div class='parell'>$num és <strong>parell</strong></div>";
    }else{
        echo "<div class='senar'>$num és <strong>senar</strong></div>";
    }

    ?>
</body>
</html>