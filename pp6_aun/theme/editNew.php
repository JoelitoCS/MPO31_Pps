<?php
session_start();
require 'config.php';
if ($_SESSION['user_rol'] !== 'admin') exit("Sense permisos");
$id = (int) $_GET['id'];
$result = $mysqli->query("SELECT * FROM noticies WHERE id = $id");
$noticia = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titol = $_POST['titol'];
    $subtitol = $_POST['subtitol'];
    $cos = $_POST['cos'];
    $imatge = $_POST['imatge'];
    $autor = $_POST['autor'];

    $stmt = $mysqli->prepare(
        "UPDATE noticies SET titol=?, subtitol=?, cos=?, imatge=?, autor=? WHERE id=?"
    );
    $stmt->bind_param("sssssi", $titol, $subtitol, $cos, $imatge, $autor, $id);
    $stmt->execute();
    header("Location: adminNews.php");
    exit;
}
?>
<style>
    body {
        background: linear-gradient(135deg, #232526 0%, #414345 100%);
        min-height: 100vh;
        margin: 0;
        font-family: 'Segoe UI', 'Roboto', Arial, sans-serif;
        color: #fff;
    }

    .form-container {
        max-width: 500px;
        margin: 60px auto;
        background: rgba(34, 40, 49, 0.97);
        border-radius: 18px;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.25);
        padding: 40px 30px;
        text-align: left;
    }

    .form-container label {
        font-weight: 600;
        color: #38ef7d;
        margin-bottom: 6px;
        display: block;
    }

    .form-container input[type="text"],
    .form-container textarea {
        width: 100%;
        padding: 10px 12px;
        margin-bottom: 18px;
        border: none;
        border-radius: 7px;
        background: #232526;
        color: #fff;
        font-size: 1rem;
        box-shadow: 0 2px 8px rgba(56, 239, 125, 0.08);
        transition: background 0.2s, box-shadow 0.2s;
    }

    .form-container input[type="text"]:focus,
    .form-container textarea:focus {
        background: #414345;
        outline: none;
        box-shadow: 0 4px 16px rgba(56, 239, 125, 0.18);
    }

    .form-container textarea {
        min-height: 80px;
        resize: vertical;
    }

    .form-container input[type="submit"] {
        width: 100%;
        padding: 12px 0;
        background: linear-gradient(90deg, #11998e 0%, #38ef7d 100%);
        color: #fff;
        font-size: 1.1rem;
        font-weight: 700;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        box-shadow: 0 2px 8px rgba(56, 239, 125, 0.15);
        transition: background 0.2s, transform 0.2s;
    }

    .form-container input[type="submit"]:hover {
        background: linear-gradient(90deg, #38ef7d 0%, #11998e 100%);
        color: #232526;
        transform: translateY(-2px) scale(1.03);
    }
</style>
<div class="form-container">
    <form method="POST">
        <label>Títol:</label><br>
        <input type="text" name="titol" value="<?= $noticia['titol'] ?>"
            required><br><br>

        <label>Subtítol:</label><br>
        <input type="text" name="subtitol" value="<?= $noticia['subtitol'] ?>"><br><br>

        <label>Cos:</label><br>
        <textarea name="cos"><?= $noticia['cos'] ?></textarea><br><br>

        <label>Imatge:</label><br>
        <input type="text" name="imatge" value="<?= $noticia['imatge'] ?>"
            required><br><br>

        <label>Autor:</label><br>
        <input type="text" name="autor" value="<?= $noticia['autor'] ?>"
            required><br><br>

        <input type="submit" value="Guardar Cambios">
    </form>
</div>