<?php
//validacion del estado de la sesion, lo busque porque no sabia que error era
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require 'config.php'; // incluimos la conexión

?>

<header class="navigation fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="index.php"><img style="width: 100px; height:auto" src="images/logoOriginal.png" alt="Egen"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
      aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navigation">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Inicio</a>
        </li>

        <?php if (isset($_SESSION['user_rol']) && $_SESSION['user_rol'] === 'admin'): ?>
        <li class="nav-item">
          <a class="nav-link" href="adminPanel.php">Panel Admin</a>
        </li>
        <?php endif; ?>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Páginas</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="contact.html">Contacto</a>
            <a class="dropdown-item" href="noticias.php">Noticías</a>
            <a class="dropdown-item" href="portfolio.php">Portfolio</a></a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Iniciar sesión</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Regístrate</a>
        </li>
        <?php if (isset($_SESSION['user_rol']) && ($_SESSION['user_rol'] === 'user' || $_SESSION['user_rol'] === 'admin')): ?>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Cerrar Sesión</a>
        </li>
        <?php endif; ?>
        
      </ul>
    </div>
  </nav>
</header>