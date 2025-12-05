<?php

session_start();
require 'config.php';

if ($_SESSION['user_rol'] !== 'admin') exit("Sense permisos");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $cognom = $_POST['cognom'];
    $testimoni = $_POST['testimoni'];
    $imatge = $_POST['imatge'];

    $stmt = $mysqli->prepare("INSERT INTO testimonis (nom, cognom, testimoni, data, imatge) VALUES (?, ?, ?, NOW(), ?)");
    $stmt->bind_param("ssss", $nom, $cognom, $testimoni, $imatge);
    $stmt->execute();
    header("Location: adminTestimonios.php");
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
        max-width: 420px;
        margin: 60px auto;
        background: rgba(34, 40, 49, 0.97);
        border-radius: 16px;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.25);
        padding: 36px 28px;
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
        <label>Nombre:</label><br>
        <input type="text" name="nom" required><br><br>

        <label>Apellido:</label><br>
        <input type="text" name="cognom"><br><br>

        <label>Testimonio:</label><br>
        <textarea name="testimoni" required></textarea><br><br>

        <label>Imagen:</label><br>
        <input type="text" name="imatge"><br><br>

        <input type="submit" value="Añadir Testimonio">
    </form>
</div>