<?php 
include 'config.php';
include 'data.php';

returnUserData();

echo " <table border='1' cellpadding='8' cellpacing='0'>";
echo " <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>email</th>
            <th>rol</th>
        </tr>";

foreach($resultUsers as $user){
    echo "<tr>";
    echo "<td>" . $user['id'] . "</td>";
    echo "<td>" . htmlspecialchars($user['nom']) . "</td>";
    echo "<td>" . htmlspecialchars($user['email']) . "</td>";
    echo "<td>" . htmlspecialchars($user['rol']) . "</td>";
    echo "</tr>";

}

echo "</table>";