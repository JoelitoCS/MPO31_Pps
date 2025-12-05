<?php
session_start();

require 'config.php'; // incluimos la conexión


$stmt = $mysqli->query("SELECT * FROM noticies LIMIT 3");

if (!$stmt) {
  die("Error en la consulta: " . $mysqli->error);
}


$noticies = $stmt->fetch_all(MYSQLI_ASSOC); // obtenemos todos los resultados

$result = $mysqli->query("SELECT * FROM testimonis");
$testimonis = $result->fetch_all(MYSQLI_ASSOC);

$resultPortfolio = $mysqli->query("SELECT * FROM portfolio");

if (!$resultPortfolio) {
  die("Error en la consulta: " . $mysqli->error);
}
$portfolio = $resultPortfolio->fetch_all(MYSQLI_ASSOC);

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
  <title>PcDodo's</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- theme meta -->
  <meta name="theme-name" content="agen" />

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

  <!-- banner -->
  <section class="banner bg-cover position-relative d-flex justify-content-center align-items-center"
    data-background="images/banner/banner2.jpg">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="display-1 text-white font-weight-bold font-primary">PcDodo's</h1>
          <h2 class="text-white m-4 ">En esta web encontrarás las mejores ofertas en cuanto a tecnología de todo el mercado, ¿a que esperas?</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- /banner -->

  <section style="padding: 280px 0;">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto text-center">
          <h2>Portfolio</h2>
          <div class="section-border"></div>
        </div>
      </div>
      <div class="row">
        <?php foreach ($portfolio as $pf): ?>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <article class="card">
              <img src="<?= htmlspecialchars($pf['imatge']) ?>" alt="<?= htmlspecialchars($pf['titol']) ?>" class="card-img-top mb-2">
              <div class="card-body p-0">
                <p><?= htmlspecialchars($pf['categoria']) ?></p>
                <p class="h4 card-title d-block my-3 text-dark"><?= htmlspecialchars($pf['titol']) ?></p>
                <p><?= htmlspecialchars($pf['descripcio']) ?></p>
              </div>
            </article>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>




  <!-- call to action 
<section>
  <div class="container section-sm overlay-secondary-half bg-cover" data-background="images/backgrounds/cta-bg.jpg">
  <div class="row">
    <div class="col-lg-8 offset-lg-1">
      <h2 class="text-gradient-primary">Let's Start With Us!</h2>
      <p class="h4 font-weight-bold text-white mb-4">Lorem ipsum dolor sit amet, magna habemus ius ad</p>
      <a href="contact.html" class="btn btn-lg btn-primary">Let’s talk</a>
    </div>
  </div>
</div>
</section>
<!-- /call to action -->

  <!-- testimonial-slider -->
  <section class="section bg-secondary">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="text-white mb-5">Testimonios</h2>
        </div>
      </div>
      <div class="row bg-contain" data-background="images/banner/brush.png">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div id="slider" class="ui-card-slider bg-contain">
            <?php foreach ($testimonis as $testimoni): ?>
              <div class="slide">
                <div class="card text-center">
                  <div class="card-body px-5 py-4">
                    <img src="images/testimonial/user-1.jpg" alt="user-1" class="img-fluid rounded-circle mb-4">
                    <h4 class="text-secondary"><?= htmlspecialchars($testimoni['nom']) ?><br><?= htmlspecialchars($testimoni['cognom']) ?></h4>
                    <p><?= htmlspecialchars($testimoni['testimoni']) ?></p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /testimonial-slider -->
  <!-- 
     
    <div class="row">
      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <div class="card bottom-shape bg-secondary pt-4 pb-5">
          <div class="card-body text-center">
            <h4 class="text-white">Basic</h4>
            <p class="text-light mb-4">Besic and simple website</p>
            <p class="text-white mb-4">$ <span class="display-3 font-weight-bold vertical-align-middle">30</span></p>
            <ul class="list-unstyled mb-5">
              <li class="text-white mb-3">Mobile-Optimized Website</li>
              <li class="text-white mb-3">Powerful Website Metrics</li>
              <li class="text-white mb-3">Free Custom Domain</li>
              <li class="text-white mb-3">24/7 Customer Support</li>
              <li class="text-white mb-3">Fully Integrated E-Cormmerce</li>
              <li class="text-white mb-3">Sell unlimited Product</li>
            </ul>
            <a href="#" class="btn btn-outline-light">Try it now</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <div class="card bottom-shape bg-secondary pt-4 pb-5">
          <div class="card-body text-center">
            <h4 class="text-white">Basic</h4>
            <p class="text-light mb-4">Besic and simple website</p>
            <p class="text-white mb-4">$ <span class="display-3 font-weight-bold vertical-align-middle">30</span></p>
            <ul class="list-unstyled mb-5">
              <li class="text-white mb-3">Mobile-Optimized Website</li>
              <li class="text-white mb-3">Powerful Website Metrics</li>
              <li class="text-white mb-3">Free Custom Domain</li>
              <li class="text-white mb-3">24/7 Customer Support</li>
              <li class="text-white mb-3">Fully Integrated E-Cormmerce</li>
              <li class="text-white mb-3">Sell unlimited Product</li>
            </ul>
            <a href="#" class="btn btn-outline-light">Try it now</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
        <div class="card bottom-shape bg-secondary pt-4 pb-5">
          <div class="card-body text-center">
            <h4 class="text-white">Basic</h4>
            <p class="text-light mb-4">Besic and simple website</p>
            <p class="text-white mb-4">$ <span class="display-3 font-weight-bold vertical-align-middle">30</span></p>
            <ul class="list-unstyled mb-5">
              <li class="text-white mb-3">Mobile-Optimized Website</li>
              <li class="text-white mb-3">Powerful Website Metrics</li>
              <li class="text-white mb-3">Free Custom Domain</li>
              <li class="text-white mb-3">24/7 Customer Support</li>
              <li class="text-white mb-3">Fully Integrated E-Cormmerce</li>
              <li class="text-white mb-3">Sell unlimited Product</li>
            </ul>
            <a href="#" class="btn btn-outline-light">Try it now</a>
          </div>
        </div>
      </div>
    </div>
    -->
  </div>
  </section>
  <!-- /pricing -->

  <!-- blog -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto text-center">
          <h2>Últimas Notícias</h2>
          <div class="section-border"></div>
        </div>
      </div>
      <div class="row">
        <?php foreach ($noticies as $noticia): ?>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <article class="card">
              <img src="<?= htmlspecialchars($noticia['imatge']) ?>" alt="<?= htmlspecialchars($noticia['titol']) ?>" class="card-img-top mb-2">
              <div class="card-body p-0">
                <time><?= $noticia['data_publicacio'] ?></time>
                <a href="blog-single" class="h4 card-title d-block my-3 text-dark hover-text-underline"><?= htmlspecialchars($noticia['titol']) ?></a>
                <a href="detalle.php?id=<?= $noticia['id'] ?>" class="btn btn-transparent">Leer más</a>
              </div>
            </article>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- /blog -->

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