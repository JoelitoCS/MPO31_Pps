<?php
require 'config.php';

$id = $_GET['id'];

$result = $mysqli->query("SELECT * FROM noticies WHERE id=$id");
$noticies = $result->fetch_assoc();

$resultDeComentarios = $mysqli->query("SELECT * FROM comentaris WHERE id_noticia = $id");
$comentaris = $resultDeComentarios->fetch_assoc();


?>

<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Detalle Notícia</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- venobox css -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">
  <!-- card slider -->
  <link rel="stylesheet" href="plugins/card-slider/css/style.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>
  

<?php include 'header.php'; ?>

<!-- page-title -->
<section class="page-title bg-cover" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="display-1 text-white font-weight-bold font-primary">Detalle Notícia</h1>
      </div>
    </div>
  </div>
</section>
<!-- /page-title -->



<section class="section">
  
    <div class="container">
      <div class="row">
        
          <div class="col-lg-10 mx-auto">
            <h3 class="font-tertiary mb-5"><?= htmlspecialchars($noticies['titol']) ?></h3>
            <img src="<?= htmlspecialchars($noticies['imatge']) ?>" alt="post-thumb" style="width: 400px; display:flex; margin-bottom:20px; margin-left:auto; margin-right:auto;">
            <p style=" display:flex; margin-bottom:20px; margin-left:auto; margin-right:auto; text-align:center; justify-content:center;"><?= htmlspecialchars($noticies['autor']) ?></p>
            <p style=" display:flex; margin-bottom:20px; margin-left:auto; margin-right:auto; text-align:center; justify-content:center;"><?= $noticies['data_publicacio'] ?></p>
            <div style=" display:flex; margin-bottom:20px; margin-left:auto; margin-right:auto; text-align:center; justify-content:center;">
              <p><?= $noticies['cos']?></p>
            </div>
          </div>
       
      </div>
    </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="p-5 mb-4">
          <div class="media border-bottom py-4">
            <img src="images/user-1.jpg" class="img-fluid align-self-start mr-3" alt="user">
            <div class="media-body">
              <h5 class="mb-0 text-secondary"><?= htmlspecialchars($noticies['autor']) ?></h5>
              <span class="mr-3"><?= htmlspecialchars($comentaris['data']) ?></span>
              <a href="#" class="btn btn-transparent py-1 px-2 "><i class="ti-share-alt"></i> Responder</a>
              <p><?= htmlspecialchars($comentaris['comentari'])?></p>
            </div>
          </div>
        </div>
        <h4 class="mb-3 pb-3 text-secondary">Pon un comentario</h4>
        <form action="#" class="row">
          <div class="col-12">
            <textarea name="comment" id="comment" placeholder="Mensaje" class="form-control mb-4 border"></textarea>
          </div>
          <div class="col-md-5">
            <input type="text" name="name" id="name" class="form-control mb-4 mb-lg-0 border" placeholder="Nombre">
          </div>
          <div class="col-md-5">
            <input type="email" name="Email" id="Email" class="form-control mb-4 mb-lg-0 border" placeholder="Email">
          </div>
          <div class="col-md-2">
            <button type="submit" class="btn btn-secondary rounded-0">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>



<?php include 'footer.php'; ?>

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- venobox -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- shuffle -->
<script src="plugins/shuffle/shuffle.min.js"></script>
<!-- apear js -->
<script src="plugins/counto/apear.js"></script>
<!-- counter -->
<script src="plugins/counto/counTo.js"></script>
<!-- card slider -->
<script src="plugins/card-slider/js/card-slider-min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>