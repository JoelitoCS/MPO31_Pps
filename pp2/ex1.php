<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 1: Nombres parells entre 50 i 500</title>
    <style>

        body {
            background: #f9f9f9;
            font-family: Arial, sans-serif;
            margin: 0;
        }

        h1{
            text-align: center;
            margin-top: 20px;
            color: #333;
        }
        
        .contenedorBucle {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 16px auto;
            max-width: 900px;

        }

        .bucle {
            background: #3498db;
            color: #fff;
            padding: 0.6rem 1.0rem;
            border-radius: 10px;
            font-size: 12px;
            text-align: center;
        }

    </style>
</head>
<body>
    <h1>Numeros parejos entre 50 y 500</h1>

    <div class="contenedorBucle">
        <?php
        for ($i = 50; $i <= 500; $i = $i + 2) {
            echo "<div class='bucle'>$i</div>";
        }
        ?>
    </div>
</body>
</html>