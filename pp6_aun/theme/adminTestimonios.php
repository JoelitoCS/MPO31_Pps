<?php

session_start();
require 'config.php';
if ($_SESSION['user_rol'] !== 'admin') exit("Sense permisos");
$result = $mysqli->query("SELECT * FROM testimonis");
$test = $result->fetch_all(MYSQLI_ASSOC);
?>

<style>
    body {
        background: linear-gradient(135deg, #232526 0%, #414345 100%);
        min-height: 100vh;
        margin: 0;
        font-family: 'Segoe UI', 'Roboto', Arial, sans-serif;
        color: #fff;
    }

    h1 {
        text-align: center;
        margin-top: 40px;
        font-size: 2.2rem;
        color: #38ef7d;
        letter-spacing: 1px;
        font-weight: 700;
    }

    .add-btn {
        display: block;
        width: 220px;
        margin: 30px auto 40px auto;
        padding: 14px 0;
        background: linear-gradient(90deg, #11998e 0%, #38ef7d 100%);
        color: #fff;
        text-align: center;
        text-decoration: none;
        font-size: 1.1rem;
        font-weight: 600;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(56, 239, 125, 0.15);
        transition: background 0.2s, transform 0.2s;
    }

    .add-btn:hover {
        background: linear-gradient(90deg, #38ef7d 0%, #11998e 100%);
        color: #232526;
        transform: translateY(-2px) scale(1.03);
    }

    .table-container {
        max-width: 900px;
        margin: 0 auto 60px auto;
        background: rgba(34, 40, 49, 0.97);
        border-radius: 16px;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.25);
        padding: 36px 28px;
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background: transparent;
        color: #fff;
        font-size: 1rem;
    }

    th,
    td {
        padding: 12px 10px;
        border-bottom: 1px solid #414345;
        text-align: left;
    }

    th {
        background: #232526;
        color: #38ef7d;
        font-weight: 700;
    }

    tr:hover {
        background: rgba(56, 239, 125, 0.07);
    }

    a {
        color: #38ef7d;
        text-decoration: none;
        font-weight: 600;
        transition: color 0.2s;
    }

    a:hover {
        color: #11998e;
        text-decoration: underline;
    }
</style>

<h1>Testimonios</h1>
<a class="add-btn" href="addTestimonio.php">+ Añadir Testimonio</a>
<div class="table-container">
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Testimonio</th>
            <th>Imagen</th>
            <th>Fecha de publicación</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($test as $t): ?>
            <tr>
                <td><?= $t['id'] ?></td>
                <td><?= $t['nom'] ?></td>
                <td><?= $t['cognom'] ?></td>
                <td><?= $t['testimoni'] ?></td>
                <td><?= $t['imatge'] ?></td>
                <td><?= $t['data'] ?></td>
                <td>
                    <a href="editTestimonio.php?id=<?= $t['id'] ?>">Editar</a> |
                    <a onclick="return confirm('¿Seguro?')" href="deleteTestimonio.php?id=<?= $t['id'] ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>