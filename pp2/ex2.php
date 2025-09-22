<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 2: Taules de multiplicar </title>
</head>
<body>
</body>
    <h1>Taules de multiplicar de l'1 a l'11</h1>
    <?php
    for ($i = 1; $i <= 11; $i++) {
        echo "<div style='display:inline-block; margin:10px; padding:10px; border:1px solid #333; background:#f9f9f9; min-width:120px;'>";
        
        echo "<h3>Taula del $i</h3>";
        echo "<ul style='list-style:none; padding:0;'>";
        for ($j = 1; $j <= 10; $j++) {
            $resultat = $i * $j;
            echo "<li style='text-align:left;'>$i x $j = $resultat</li>";
        }
        echo "</ul>";
        echo "</div>";
    }
    ?>
</body>
</html>