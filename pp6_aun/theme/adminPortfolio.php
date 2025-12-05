<?php

session_start();
require 'config.php';
if ($_SESSION['user_rol'] !== 'admin') exit("Sense permisos");
$result = $mysqli->query("SELECT * FROM portfolio");
$port = $result->fetch_all(MYSQLI_ASSOC);
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
        max-width: 1100px;
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
        table-layout: fixed;
    }

    th,
    td {
        padding: 12px 10px;
        border-bottom: 1px solid #414345;
        text-align: left;
        vertical-align: top;
        word-break: break-word;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    th {
        background: #232526;
        color: #38ef7d;
        font-weight: 700;
    }

    tr:hover {
        background: rgba(56, 239, 125, 0.07);
    }

    td.cuerpo {
        max-width: 220px;
    }
    td.imagen {
        max-width: 180px;
    }
    td.subtitulo {
        max-width: 140px;
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
<h1>Portfolio</h1>
<a class="add-btn" href="addPortfolio.php">+ Añadir Portfolio</a>
<div class="table-container">
    <table>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descripción</th>
            <th>Imagen</th>
            <th>Categoria</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($port as $p): ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['titol'] ?></td>
                <td class="subtitulo"><?= $p['descripcio'] ?></td>
                <td class="cuerpo"><?= $p['imatge'] ?></td>
                <td><?= $p['categoria'] ?></td>
                <td>
                    <a href="editPortfolio.php?id=<?= $p['id'] ?>">Editar</a> |
                    <a onclick="return confirm('¿Seguro?')" href="deletePortfolio.php?id=<?= $p['id'] ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>