<?php
  require 'config.php';

  $id = $_GET['id']; // seguridad básica

  $stmt = $mysqli->prepare("SELECT * FROM noticies WHERE id = ?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();
  $noticies = $result->fetch_assoc(); // un solo registro
  $stmt->close();

  

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
        <?php foreach($noticies as $noticia): ?>
        <div class="col-lg-10 mx-auto">
          <h3 class="font-tertiary mb-5"><?= htmlspecialchars($noticia['titol']) ?></h3>
          <img src="<?= htmlspecialchars($noticia['imatge']) ?>" alt="post-thumb" class="img-fluid w-100 mb-3">
          <p class="float-left mr-4"><?= htmlspecialchars($noticia['autor']) ?></p>
          <p><?= $noticia['data_publicacio'] ?></p>
          <div class="content">
            <p><?= $noticia['cos']?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div class="p-5 mb-4">
          <div class="media border-bottom py-4">
            <img src="images/user-1.jpg" class="img-fluid align-self-start mr-3" alt="">
            <div class="media-body">
              <h5 class="mb-0 text-secondary">Carole Marvin.</h5>
              <span class="mr-3">15 january 2015 At 10:30 pm</span>
              <a href="#" class="btn btn-transparent py-1 px-2 "><i class="ti-share-alt"></i> Reply</a>
              <p>Ne erat velit invidunt his. Eum in dicta veniam interesset, harum fuisset te nam ea cu lupta
                definitionem.</p>
              <div class="media my-5">
                <img src="images/user-2.jpg" class="img-fluid align-self-start mr-3" alt="">
                <div class="media-body">
                  <h5 class="mb-0 text-secondary">Jaquan Rolfson.</h5>
                  <span class="mr-3">15 january 2015 At 10:30 pm</span>
                  <a href="#" class="btn btn-transparent py-1 px-2 "><i class="ti-share-alt"></i> Reply</a>
                  <p>Ne erat velit invidunt his. Eum in dicta veniam interesset, harum fuisset te nam ea cu lupta
                    definitionem.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="media py-4">
            <img src="images/user-1.jpg" class="img-fluid align-self-start mr-3" alt="">
            <div class="media-body">
              <h5 class="mb-0 text-secondary">Bruce Bernier.</h5>
              <span class="mr-3">15 january 2015 At 10:30 pm</span>
              <a href="#" class="btn btn-transparent py-1 px-2 "><i class="ti-share-alt"></i> Reply</a>
              <p>Ne erat velit invidunt his. Eum in dicta veniam interesset, harum fuisset te nam ea cu lupta
                definitionem.</p>
            </div>
          </div>
        </div>
        <h4 class="mb-3 pb-3 text-secondary">Leave a Comment</h4>
        <form action="#" class="row">
          <div class="col-12">
            <textarea name="comment" id="comment" placeholder="Message" class="form-control mb-4 border"></textarea>
          </div>
          <div class="col-md-5">
            <input type="text" name="name" id="name" class="form-control mb-4 mb-lg-0 border" placeholder="Name">
          </div>
          <div class="col-md-5">
            <input type="email" name="Email" id="Email" class="form-control mb-4 mb-lg-0 border" placeholder="Email">
          </div>
          <div class="col-md-2">
            <button type="submit" class="btn btn-secondary rounded-0">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- blog -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 mx-auto text-center">
        <h2>Latest News</h2>
        <div class="section-border"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <article class="card">
          <img src="images/blog/post-1.jpg" alt="post-thumb" class="card-img-top mb-2">
          <div class="card-body p-0">
            <time>January 15, 2018</time>
            <a href="blog-single" class="h4 card-title d-block my-3 text-dark hover-text-underline">How These Different
              Book Covers Reflect the Design</a>
            <a href="#" class="btn btn-transparent">Read more</a>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <article class="card">
          <img src="images/blog/post-2.jpg" alt="post-thumb" class="card-img-top mb-2">
          <div class="card-body p-0">
            <time>January 15, 2018</time>
            <a href="blog-single" class="h4 card-title d-block my-3 text-dark hover-text-underline">How These Different
              Book Covers Reflect the Design</a>
            <a href="#" class="btn btn-transparent">Read more</a>
          </div>
        </article>
      </div>
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <article class="card">
          <img src="images/blog/post-3.jpg" alt="post-thumb" class="card-img-top mb-2">
          <div class="card-body p-0">
            <time>January 15, 2018</time>
            <a href="blog-single" class="h4 card-title d-block my-3 text-dark hover-text-underline">How These Different
              Book Covers Reflect the Design</a>
            <a href="#" class="btn btn-transparent">Read more</a>
          </div>
        </article>
      </div>
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