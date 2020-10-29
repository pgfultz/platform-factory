<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Platform Factory</title>
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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-180297708-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-180297708-1');
</script>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top"><img src="img/logo.png" alt="Logo"></a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#methodology">MVP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/bg3.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">Platform Factory</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Creating Digital Products,Web Development,Apps,Innovation,Digital transformation,Video Editing,Animation,Platforms</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->


  <!--/ Section Services Star /-->
  <section id="service" class="services-mf route mt-5">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Services
            </h3>
            <p class="subtitle-a">
              We offer the best Web development for  Startups and entrepreneurs  who wish to offer digital customer experiences for their clients . We promise  excellent value and best prices.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-monitor"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Sites</h2>
              <p class="s-description text-center">
                We work with web development (front-end and back-end) from landing pages to web portals.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-code-working"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Platforms</h2>
              <p class="s-description text-center">
                Development of web platforms, e-commerce, marketplace, portals, MVP of innovative solutions.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-ico">
              <span class="ico-circle"><i class="ion-android-phone-portrait"></i></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Mobile</h2>
              <p class="s-description text-center">
                developing applications for Android and iOS. We use best development practices.
              </p>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!--/ Section Services End /-->

  <div class="section-counter paralax-mf bg-image mt-5" style="background-image: url(img/counters-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container" style="padding: 0;">
      <div class="row row-book-call">
        <button class="button button-a button-big button-rouded" id="btn-book-call" onclick="handleBookFreeCall()">Book a Free Call</button>
      </div>
    </div>
  </div>

  <!--/ Section Portfolio Star /-->
  <section id="work" class="portfolio-mf sect-pt4 route">

    <div class="container">
        <div class="a-detalhes-projeto">
            
        </div>
        
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Portfolio
            </h3>
            <p class="subtitle-a">
              Check out our portfolio. We are specialists in developing modern and creative websites, applications and platforms.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        
        <?php
        $projects = $pdo->prepare("SELECT * FROM `projects` ORDER BY `id` DESC");
        $projects->execute();
        if($projects->rowCount() > 0){
            while($project = $projects->fetchObject()){
        ?>
        <div class="col-md-4">
          <div class="work-box">
            <div onclick="getProjectDetails(<?php echo $project->id?>)">
              <div class="work-img" id="capa-projeto" style="background-image: url(<?php echo BASE_ADM."/uploads/".$project->logo; ?>)"></div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title"><?php echo $project->name; ?></h2>
                    <div class="w-more">
                      <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
            }
        }else{
            echo '<h1>Nenhum projeto encontrado!</h1>';
        }
        ?>
     
      </div>
    </div>
  </section>
  <!--/ Section Portfolio End /-->

  <!--/ Section Testimonials Star /-->
  <div class="testimonials paralax-mf bg-image" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="testimonial-mf" class="owl-carousel owl-theme">
            <div class="testimonial-box">
              <div class="author-test">
                <img src="img/testimonial-1.jpg" alt="" class="rounded-circle b-shadow-a">
                <span class="author">Graciane Martins</span>
                <i>Busco Sócio Founder</i>
              </div>
              <div class="content-test">
                <p class="description lead">
                  Working with Platform Factory was an incredible experience, they showed me  it is possible to develop a quality and affordable software with an excellent final result. They helped me from idea to final development of the solution.
                </p>
                <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
            <div class="testimonial-box">
              <div class="author-test">
                <img src="img/testimonial-1.jpg" alt="" class="rounded-circle b-shadow-a">
                <span class="author">Graciane Martins</span>
                <i>Bookfly Founder</i>
              </div>
              <div class="content-test">
                <p class="description lead">
                  Working with Platform Factory was an incredible experience, they showed me  it is possible to develop a quality and affordable software with an excellent final result. They helped me from idea to final development of the solution.
                </p>
                <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--/ Section methodology Star /-->
  <section id="methodology" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              MVP
            </h3>
            <p class="subtitle-a">
              A minimum viable product (MVP) is a version of a product with just enough features to satisfy early customers and provide feedback for future product development.

              We divided the MVP development process into 4 stages:
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="methodology-box">
            <div class="service-ico">
              <span class="ico-circle"><b>1</b></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Definition</h2>
              <p class="s-description text-center">
                The first step is to define all the necessary steps for the MVP development. We can work with the data that the customer already has or we can carry out the validation of the problem, solution and business model.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="methodology-box">
            <div class="service-ico">
              <span class="ico-circle"><b>2</b></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">UI / UX</h2>
              <p class="s-description text-center">
                In this step, we create all the screens for the system according to the scope in the previous step. We make low-fidelity and high-fidelity prototypes.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="methodology-box">
            <div class="service-ico">
              <span class="ico-circle"><b>3</b></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Implementation</h2>
              <p class="s-description text-center">
                With the designs  approved by the client, we start front-end and back-end programming of the MVP. 
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="methodology-box">
            <div class="service-ico">
              <span class="ico-circle"><b>4</b></span>
            </div>
            <div class="service-content">
              <h2 class="s-title">Tests</h2>
              <p class="s-description text-center">
                We carry out all the necessary tests so  the APP / Platform can be launched successfully.
              </p>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!--/ Section methodology End /-->

  <!--/ Section Blog Star /-->
  <section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Blog
            </h3>
            <p class="subtitle-a">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
      
      <?php
      $blog = $pdo->prepare("SELECT * FROM `blog` ORDER BY `id` DESC LIMIT 3");
      $blog->execute();
      if($blog->rowCount() > 0){
        while($artigo = $blog->fetchObject()){
          $dataArtigo = new DateTime($artigo->created_at);

          $titulo_link = preg_replace('/[ -]+/', '-', $artigo->titulo);
      ?>
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="<?php echo BASE; ?>/blog/<?php echo $artigo->id; ?>/<?php echo $titulo_link; ?>">
                <div id="capa-mini-blog" style="background-image: url('<?php echo BASE_ADM; ?>/uploads/<?php echo $artigo->capa; ?>')" alt="capa" class="img-fluid"></div>
              </a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category"><?php echo $artigo->categoria; ?></h6>
                </div>
              </div>
              <h3 class="card-title"><a href="<?php echo BASE; ?>/blog/<?php echo $artigo->id; ?>/<?php echo $titulo_link; ?>"><?php echo $artigo->titulo; ?></a></h3>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <b>
                  <span class="author"><?php echo $artigo->autor; ?></span>
                </b>
              </div>
              <div class="post-date">
                <span class="ion-ios-clock-outline"></span> <?php echo $dataArtigo->format('d M Y'); ?>
              </div>
            </div>
          </div>
        </div>
      <?php
        }
      }else{
        echo "<center><h3>We don't have any posts yet :(</h3></center>";
      }
      ?>

      </div>
    </div>
  </section>
  <!--/ Section Blog End /-->

  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Contact us
                    </h5>
                  </div>
                  <div>
                      <form action="" method="post" id="form-contact-us">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage">An error has occurred</div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name_contactus" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required="required" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email_contactus" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required="required" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject_contactus" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required="required" />
                              <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" id="message_contactus" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required="required"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      We’re here to help and answer any question you might have. We look forward to hearing from you 🙂
                    </p>
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span> New Road 57A, Chippenham, SN151ES - United Kingdom</li>
                      <li><span class="ion-ios-telephone"></span> +44 7917-288150</li>
                      <li><span class="ion-email"></span> contact@platformfactory.co.uk</li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href="https://www.linkedin.com/company/platform-factory/" target="blank"><span class="ico-circle"><i class="ion-social-linkedin"></i></span></a></li>
                      <li><a href="https://www.instagram.com/platformfactory/" target="blank"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                    </ul>

                    <button class="button button-a button-big button-rouded mt-5" onclick="handleBookFreeCall()">Book a Free Call</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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

  <!-- Mini chat -->

  <div class="a-mini-chat">
      <div class="mini-chat">
        <div class="btn-open-close-mini-chat" onclick="handleMiniChat()">
          <i class="fa fa-chevron-up"></i>
        </div>

        <div class="body-mini-chat">
          <div class="mini-chat-step1">
            <h5>What service do you need?</h5>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="service-needed" id="exampleRadios1" value="Develop a website or App" checked>
              <label class="form-check-label" for="exampleRadios1">
                Develop a website or App
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="service-needed" id="exampleRadios2" value="Develop a platform">
              <label class="form-check-label" for="exampleRadios2">
                Develop a platform
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="service-needed" id="exampleRadios3" value="Develop an e-commerce">
              <label class="form-check-label" for="exampleRadios3">
                Develop an e-commerce
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="service-needed" id="exampleRadios4" value="Develop a marketplace">
              <label class="form-check-label" for="exampleRadios4">
                Develop a marketplace
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="service-needed" id="exampleRadios5" value="Validate an idea">
              <label class="form-check-label" for="exampleRadios5">
                Validate an idea
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="service-needed" id="exampleRadios6" value="Other">
              <label class="form-check-label" for="exampleRadios6">
                Other
              </label>
            </div>

            <input type="text" name="other-service-needed" id="other-service-needed" placeholder="Please write here..." style="margin-top: 5px; width: 100%; display: none;" />
            <button type="button" class="btn btn-primary btn-continue-step" id="btn-continue-step1" onclick="goToStepTwo()">Continue</button>
          </div>

          <div class="mini-chat-step2">
            <div class="btn-back-mini-chat" onclick="backStepMiniChat(1)"><i class="fa fa-arrow-left"></i></div>
            <h5>Briefly describe your project</h5>

            <textarea name="service-needed-describe" id="service-needed-describe" placeholder="Describe your project here"></textarea>
            <button type="button" class="btn btn-primary btn-continue-step" id="btn-continue-step1" onclick="goToStepThree()">Continue</button>
          </div>

          <div class="mini-chat-step3">
            <div class="btn-back-mini-chat" onclick="backStepMiniChat(2)"><i class="fa fa-arrow-left"></i></div>
            <h5>What is your contact?</h5>

            <input type="text" name="name-service-needed" id="name-service-needed" placeholder="Name" style="margin-top: 25px; width: 100%;" />
            <input type="email" name="email-service-needed" id="email-service-needed" placeholder="Email" style="margin-top: 5px; width: 100%;" />
            <input type="tel" name="tel-service-needed" id="tel-service-needed" placeholder="Telephone" style="margin-top: 5px; width: 100%;" />
            <button type="button" class="btn btn-primary btn-continue-step" id="btn-continue-step1" onclick="goToStepFour()">Continue</button>
          </div>

          <div class="mini-chat-step4">
            <div class="btn-back-mini-chat" onclick="backStepMiniChat(3)"><i class="fa fa-arrow-left"></i></div>
            <h5>Book a free call with one of our experts to get more information about how we can help you</h5>
            
            <button type="button" class="btn btn-primary btn-continue-step" id="btn-continue-step1" onclick="goToStepFive()">Book a free call</button>
          </div>

          <div class="mini-chat-step5">
            <h5>Thank you! We will contact you as soon as possible.</h5>
          </div>

        </div>
      </div>
  </div>

  <a href="https://wa.me/447917288150" target="_blank" class="whatsapp-link"><i class="fa fa-whatsapp"></i></a>
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
  <script src="<?php echo BASE; ?>//contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="<?php echo BASE; ?>/js/main.js"></script>
  <script src="<?php echo BASE; ?>/js/slider-portfolio.js"></script>

</body>
</html>