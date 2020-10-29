<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>DevFolio Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?php echo BASE; ?>/img/logo.png" rel="icon">
  <link href="<?php echo BASE; ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo BASE; ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo BASE; ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo BASE; ?>/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php echo BASE; ?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo BASE; ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo BASE; ?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo BASE; ?>/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="<?php echo BASE; ?>">Platform Factory</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?php echo BASE; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?php echo BASE; ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?php echo BASE; ?>">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?php echo BASE; ?>">Work</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?php echo BASE; ?>">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="<?php echo BASE; ?>">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div class="intro intro-single route bg-image" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4">Blog Details</h2>
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

  
  <!--/ Section Blog-Single Star /-->
  <section class="blog-wrapper sect-pt4" id="blog">
    <div class="container">
      <div class="row">

        <?php

        if(isset($explode[1])){

            $post = $explode[1];

            $sql = $pdo->prepare("SELECT * FROM `blog` WHERE `id` = ?");
            if($sql->execute(array($post))){
                if($sql->rowCount() == 0){
                    echo '<div class="col-md-8"><center><h3>Post not found</h3></center></div>';
                }else{
                $blog = $sql->fetchObject();

                $comentarios = $pdo->prepare("SELECT * FROM `blog_comments` WHERE `id_blog` = ?");
                $comentarios->execute(array($blog->id));
        ?>

        <div class="col-md-8">
          <div class="post-box">
            <div class="post-thumb">
              <img src="<?php echo BASE_ADM; ?>/uploads/<?php echo $blog->capa; ?>" class="img-fluid" alt="">
            </div>
            <div class="post-meta">
              <h1 class="article-title"><?php echo $blog->titulo; ?></h1>
              <ul>
                <li>
                  <span class="ion-ios-person"></span>
                  <a href="#"><?php echo $blog->autor; ?></a>
                </li>
                <li>
                  <span class="ion-pricetag"></span>
                  <a href="#"><?php echo $blog->categoria; ?></a>
                </li>
                <li>
                  <span class="ion-chatbox"></span>
                  <a href="#"><?php echo $comentarios->rowCount(); ?></a>
                </li>
              </ul>
            </div>
            <div class="article-content"><?php echo $blog->descricao; ?></div>
          </div>
          <div class="box-comments">
 
            <div class="title-box-2">
              <h4 class="title-comments title-left">Comments (<?php echo $comentarios->rowCount(); ?>)</h4>
            </div>
            <ul class="list-comments">
                <?php
                while($comentario = $comentarios->fetchObject()){
                    $dataComentario = new DateTime($comentario->created_at);
                ?>
              <li>
                <div class="comment-avatar">
                  <img src="<?php echo BASE; ?>/img/avatar.jpg" alt="">
                </div>
                <div class="comment-details">
                  <h4 class="comment-author"><?php echo $comentario->nome; ?></h4>
                  <span><?php echo $dataComentario->format('d M Y'); ?></span>
                  <p><?php echo $comentario->comment; ?></p>
                </div>
              </li>
                <?php } ?>
            </ul>
          </div>
          <div class="form-comments">
            <div class="title-box-2">
              <h3 class="title-left">
                Leave a Reply
              </h3>
            </div>
            <form action="<?php echo BASE; ?>/sys/comentarblog.php?id=<?php echo $blog->id; ?>&titulo=<?php echo $explode[2]; ?>" method="post" class="form-mf">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <input type="text" class="form-control input-mf" name="inputName" placeholder="Name *" required>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <input type="email" class="form-control input-mf" name="inputEmail" placeholder="Email *" required>
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <input type="url" class="form-control input-mf" name="inputUrl" placeholder="Website">
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <textarea id="textMessage" class="form-control input-mf" placeholder="Comment *" name="message"
                      cols="45" rows="8" required></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <!-- FIM DA AREA DO ARTIGO-->

        <?php
                }
            }else{
                echo '<div class="col-md-8"><center><h3>Something went wrong!</h3></center></div>';
            }
        }else{
            echo '<div class="col-md-8"><center><h3>Post not found</h3></center></div>';
        }
        ?>

        <div class="col-md-4">

          <div class="widget-sidebar">
            <h5 class="sidebar-title">Recent Post</h5>
            <div class="sidebar-content">
              <ul class="list-sidebar">
                <?php
                $recentsposts = $pdo->prepare("SELECT * FROM `blog` LIMIT 5");
                $recentsposts->execute();
                while($rp = $recentsposts->fetchObject()){
                ?>
                <li>
                  <a href="blog-single.php?post=<?php echo $rp->id; ?>"><?php echo $rp->titulo; ?></a>
                </li>
                <?php } ?>
               
              </ul>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Blog-Single End /-->

  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>Platform Factory</strong>. All Rights Reserved</p>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="<?php echo BASE; ?>/lib/jquery/jquery.min.js"></script>
  <script src="<?php echo BASE; ?>/lib/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo BASE; ?>/lib/popper/popper.min.js"></script>
  <script src="<?php echo BASE; ?>/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo BASE; ?>/lib/easing/easing.min.js"></script>
  <script src="<?php echo BASE; ?>/lib/counterup/jquery.waypoints.min.js"></script>
  <script src="<?php echo BASE; ?>/lib/counterup/jquery.counterup.js"></script>
  <script src="<?php echo BASE; ?>/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo BASE; ?>/lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?php echo BASE; ?>/lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="<?php echo BASE; ?>/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo BASE; ?>/js/main.js"></script>

</body>
</html>
