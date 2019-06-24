<?php

function get_CURL($url)
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true);
}

//Instagram API
$clientID = '1731dfd6ae5b4236b1c0791a550e344a';
$accessToken = '1820664604.1731dfd.fb778f67629f404c827d8efa41347aec';

$result = get_CURL('https://api.instagram.com/v1/users/self/?access_token=1820664604.1731dfd.fb778f67629f404c827d8efa41347aec');

$usernameIG = $result['data']['username'];
$profilePicIG = $result['data']['profile_picture'];
$followersIG = $result['data']['counts']['followed_by'];





//latest IG post
$result = get_CURL('https://api.instagram.com/v1/users/self/media/recent/?access_token=1820664604.1731dfd.fb778f67629f404c827d8efa41347aec&count=2');

$photos = [];
foreach ($result['data'] as $photo) {
  $photos[] = $photo['images']['standard_resolution']['url'];
}
//var_dump($photos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Three Studio</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo-s.jpg" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
<!-- <<<<<<< HEAD
  ======= -->
  <link rel="manifest" href="manifest.json">
<!-- >>>>>>> c67f8285d60d9bf179ca71a1d16a6803fd4deb8d
-->
<script src="push.js"></script>

<style type="text/css">
.tengah{
  text-align: center;
}
.jarak{
  margin-top: 10px;
  margin-bottom: 10px;
}
</style>

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
    ======================================================= -->
  </head>

  <body>
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a id="notify-button" class="twitter"><i class="fa fa-twitter"></i></a>
          <a id="notify-button2" class="facebook"><i class="fa fa-facebook"></i></a>
          <a id="notify-button3" class="linkedin"><i class="fa fa-linkedin"></i></a>
          <a id="notify-button4" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="#intro" class="scrollto"><span>ThreeStudio</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#footer">Contact Us</a></li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
    ============================-->
    <section id="intro" class="clearfix">
      <div class="container d-flex h-100">
        <div class="row justify-content-center align-self-center">
          <div class="col-md-6 intro-info order-md-first order-last">
            <h2>ThreeStudio Solutions<br>for Your <span>Photography!</span></h2>
            <div>
              <button class="install_app btn-get-started" >
                Install App
              </button>
              <!-- <a href="#about" class="btn-get-started scrollto">Let's Go</a> -->
            </div>
          </div>
          
          <div class="col-md-6 intro-img order-md-last order-first">
            <img src="img/intro-img.svg" alt="" class="img-fluid">
          </div>
        </div>

      </div>
    </section><!-- #intro -->

    <main id="main">

    <!--==========================
      About Us Section
      ============================-->
      <section id="about">

        <div class="container">
          <div class="row">

            <div class="col-lg-5 col-md-6">
              <div class="about-img">
                <?php foreach ($photos as $photo) : ?>
                  <img src="<?= $photo; ?>">
                <?php endforeach;?>
              </div>
            </div>

            <div class="col-lg-7 col-md-6">
              <div class="about-content">
                <h2>About Us</h2>
                <h3><span>Three Studio</span> - <br>Surabaya Professional Photography Service</h3>
                <p>Three Studio merupakan sebuah usaha jasa yang bergerak dibidang layanan video, foto, fotografi, dan studio foto. Usaha ini dibangun semenjak Juni 2019 oleh mahasiswa Petra diperuntukan sebagai dummy dalam sebuah tugas project Aplikasi Mobile Berbasis Web. Usaha kami didukung oleh para fotografer surabaya dan juru kamera yang handal dibidangnya masing-masing.</p>
                <p>Usaha ini dibangun tidak semata-mata untuk mencari materi dan menyalurkan hobi dibidang seni fotografy, namun diperuntukan untuk nilai tugas kami.</p>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->


    <!--==========================
      Services Section
      ============================-->
      <section id="services" class="section-bg">
        <div class="container">

          <header class="section-header">
            <h3>Services</h3>
            <p>Beberapa Layanan yang disediakan oleh ThreeStudio adalah sebagai berikut.</p>
          </header>

          <div class="row">

            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
              <div class="box">
                <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                <h4 class="title"><a href="">Fashion Photography</a></h4>
                <p class="description">Fashion Photography merupakan pelayanan yang disediakan oleh ThreeStudio untuk para customer yang ingen melakukan photo dengan pakaian yang kekinian.</p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
              <div class="box">
                <div class="icon" style="background: #fff0da;"><i class="ion-ios-bookmarks-outline" style="color: #e98e06;"></i></div>
                <h4 class="title"><a href="">Food Photography</a></h4>
                <p class="description">Food Photography merupakan pelayanan yang disediakan oleh ThreeStudio untuk para customer yang ingen melakukan photo di tempat makan yang keren dan kekinian.</p>
              </div>
            </div>

            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
              <div class="box">
                <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                <h4 class="title"><a href="">Journalism Photography</a></h4>
                <p class="description">Journalism Photography merupakan pelayanan yang disediakan oleh ThreeStudio untuk para customer yang ingen melakukan photo di tempat-tempat yang keren dan kekinian.</p>
              </div>
            </div>
          </div>
        </div>
      </section><!-- #services -->

    <!--==========================
      Why Us Section
      ============================-->
      <section id="why-us" class="wow fadeIn">
        <div class="container-fluid">

          <header class="section-header">
            <h3>Why choose us?</h3>
            <p>Alasan customer memilih kami karena kami menyediakan beberapa hal seperti :</p>
          </header>

          <div class="row">

            <div class="col-lg-6">
              <div class="why-us-img">
                <img src="img/why-us.jpg" alt="" class="img-fluid">
              </div>
            </div>

            <div class="col-lg-6">
              <div class="why-us-content">
                <p>Three Studio sudah cukup dikenal oleh banyak kalangan.</p>
                <p>
                  Beberapa hal yang membuat Three Studio menjadi terkenal dan banyak dicari oleh para customer adalah seperti berikut ini :
                </p>

                <div class="features wow bounceInUp clearfix">
                  <i class="fa fa-diamond" style="color: #f058dc;"></i>
                  <h4>Harga yang Terjangkau</h4>
                  <p>Dengan harga dibawah 1 juta kita bisa merasakan sensa berfoto dengan photografer yang terkenal dan berpengalaman.</p>
                </div>

                <div class="features wow bounceInUp clearfix">
                  <i class="fa fa-object-group" style="color: #ffb774;"></i>
                  <h4>Paket Foto yang jelas dan menarik</h4>
                  <p>Paket - paket yang teredia sangat jelas dan sesuai kebutuhan customer pada umumnya, sehingga saat melakukan pemesanan customer tidak perlu bingung.</p>
                </div>
                
                <div class="features wow bounceInUp clearfix">
                  <i class="fa fa-language" style="color: #589af1;"></i>
                  <h4>Hasil yang memuaskan</h4>
                  <p>Dengan pengalaman dan jam terbang yang tinggi hasil dari foto yang dilakukan tidak akan mengecewakan para customer, tetap para customer malah akan semakin tertarik untuk memesan lagi.</p>
                </div>
                
              </div>

            </div>

          </div>

        </div>

        <div class="container">
          <div class="row counters">

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">274</span>
              <p>Clients</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">421</span>
              <p>Projects</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">1,364</span>
              <p>Hours Of Support</p>
            </div>

            <div class="col-lg-3 col-6 text-center">
              <span data-toggle="counter-up">18</span>
              <p>Hard Workers</p>
            </div>
            
          </div>

        </div>
      </section>

    <!--==========================
      Call To Action Section
      ============================-->
      <section id="call-to-action" class="wow fadeInUp">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 text-center text-lg-left">
              <h3 class="cta-title">Call To Action</h3>
              <p class="cta-text"> call to action call to action call to action call to action call to action call to action call to action call to action call to action call to action call to action call to action call to action call to action call to action call to action call to action call to action call to action call to action call to action.</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a class="cta-btn align-middle" href="#">Call To Action</a>
            </div>
          </div>

        </div>
      </section>

    <!--==========================
      Portfolio Section
      ============================-->
      <section id="portfolio" class="section-bg">
        <div class="container">

          <header class="section-header">
            <h3 class="section-title">Our Portfolio</h3>
          </header>

          <div class="row">
            <div class="col-lg-12">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">Fashion Photography</li>
                <li data-filter=".filter-card">Food Photography</li>
                <li data-filter=".filter-web">Journalism Photography</li>
              </ul>
            </div>
          </div>

          <div class="row portfolio-container">

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">

                <?php foreach ($photos as $photo) : ?>
                  <img src="<?= $photo; ?>" class="img-fluid" alt="">
                <?php endforeach;?>

                <div class="portfolio-info">
                  <h4><a href="#">Fashion 1</a></h4>
                  <p>Fashion</p>
                  <div>
                    <?php foreach ($photos as $photo) : ?>
                      <a href="<?= $photo; ?>" data-lightbox="portfolio" data-title="Fashion 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                    <?php endforeach;?>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
              <div class="portfolio-wrap">
                <img src="img/portfolio/jour3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><a href="#">Journalism 3</a></h4>
                  <p>Journalism</p>
                  <div>
                    <a href="img/portfolio/jour3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Journalism 3" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
              <div class="portfolio-wrap">
                <img src="img/portfolio/fas2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><a href="#">Fashion 2</a></h4>
                  <p>Fashion</p>
                  <div>
                    <a href="img/portfolio/fas2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Fashion 2" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="img/portfolio/food2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><a href="#">Food 2</a></h4>
                  <p>Food</p>
                  <div>
                    <a href="img/portfolio/food2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Food 2" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
              <div class="portfolio-wrap">
                <img src="img/portfolio/jour2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><a href="#">Journalism 2</a></h4>
                  <p>Journalism</p>
                  <div>
                    <a href="img/portfolio/jour2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Journalism 2" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
              <div class="portfolio-wrap">
                <img src="img/portfolio/fas3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><a href="#">Fashion 3</a></h4>
                  <p>Fashion</p>
                  <div>
                    <a href="img/portfolio/fas3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Fashion 3" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="img/portfolio/food1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><a href="#">Food 1</a></h4>
                  <p>Food</p>
                  <div>
                    <a href="img/portfolio/food1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Food 1" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
              <div class="portfolio-wrap">
                <img src="img/portfolio/food3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><a href="#">Food 3</a></h4>
                  <p>Food</p>
                  <div>
                    <a href="img/portfolio/food3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Food 3" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
              <div class="portfolio-wrap">
                <img src="img/portfolio/jour1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><a href="#">Journalism 1</a></h4>
                  <p>Journalism</p>
                  <div>
                    <a href="img/portfolio/jour1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Journalism 1" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!--==========================
      Clients Section
      ============================-->
      <section id="testimonials">
        <div class="container">

          <header class="section-header">
            <h3>Testimonials</h3>
          </header>

          <div class="row justify-content-center">
            <div class="col-lg-8">

              <div class="owl-carousel testimonials-carousel wow fadeInUp">

                <div class="testimonial-item">
                  <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
                  <h3>Zachary Osborn</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    Ga ada Obat.
                  </p>
                </div>
                
                <div class="testimonial-item">
                  <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
                  <h3>Nicky Ong</h3>
                  <h4>Designer</h4>
                  <p>
                    Bakal Pesen Lagi.
                  </p>
                </div>
                
                <div class="testimonial-item">
                  <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
                  <h3>Alexander</h3>
                  <h4>Store Owner</h4>
                  <p>
                    Nagihhh banget.
                  </p>
                </div>
                
                <div class="testimonial-item">
                  <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
                  <h3>Kevin Oktov</h3>
                  <h4>Freelancer</h4>
                  <p>
                    Keren Parah.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><!-- #testimonials -->

    <!--==========================
      Team Section
      ============================-->
      <section id="team" class="section-bg">
        <div class="container">
          <div class="section-header">
            <h3>Team</h3>
            <p>team dalam ThreeStudio ini adalah berikut ini :</p>
          </div>

          <div class="row">

            <div class="col-lg-4 col-md-6 wow fadeInUp">
              <div class="member">
                <img src="img/team-1.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Lucky Alexandre</h4>
                    <span>Chief Executive Officer</span>
                    <div class="social">
                      <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-google-plus"></i></a>
                      <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="member">
                <img src="img/team-2.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Michael C. Wujaya</h4>
                    <span>Product Manager</span>
                    <div class="social">
                      <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-google-plus"></i></a>
                      <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
              <div class="member">
                <img src="img/team-3.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <<<<<<< HEAD
                    <h4>Riscky M. Mailoa</h4>
                    =======
                    <h4>Rescky M. Mailoa</h4>
                    >>>>>>> c67f8285d60d9bf179ca71a1d16a6803fd4deb8d
                    <span>CTO</span>
                    <div class="social">
                      <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-google-plus"></i></a>
                      <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </section><!-- #team -->

    <!--==========================
      Clients Section
      ============================-->
      <section id="clients" class="wow fadeInUp">
        <div class="container">

          <header class="section-header">
            <h3>Our Clients</h3>
          </header>

          <div class="owl-carousel clients-carousel">
            <img src="img/clients/client-1.png" alt="">
            <img src="img/clients/client-2.png" alt="">
            <img src="img/clients/client-3.png" alt="">
            <img src="img/clients/client-4.png" alt="">
            <img src="img/clients/client-5.png" alt="">
            <img src="img/clients/client-6.png" alt="">
            <img src="img/clients/client-7.png" alt="">
            <img src="img/clients/client-8.png" alt="">
          </div>

        </div>
      </section><!-- #clients -->


    <!--==========================
      Pricing Section
      ============================-->
      <section id="pricing" class="wow fadeInUp section-bg">

        <div class="container">

          <header class="section-header">
            <h3>Pricing</h3>
            <p>Harga Paket untuk ThreeStudio Foto</p>
          </header>

          <div class="row flex-items-xs-middle flex-items-xs-center">

            <!-- Basic Plan  -->
            <div class="col-xs-12 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h3><span class="currency">IDR</span>250k<span class="period"></span></h3>
                </div>
                <div class="card-block">
                  <h4 class="card-title"> 
                    1. Fashion <br>Photography
                  </h4>
                </div>
              </div>
            </div>
            
            <!-- Regular Plan  -->
            <div class="col-xs-12 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h3><span class="currency">IDR</span>500k<span class="period"></span></h3>
                </div>
                <div class="card-block">
                  <h4 class="card-title"> 
                    2. Food <br>Photography
                  </h4>
                </div>
              </div>
            </div>
            
            <!-- Premium Plan  -->
            <div class="col-xs-12 col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h3><span class="currency">IDR</span>750k<span class="period"></span></h3>
                </div>
                <div class="card-block">
                  <h4 class="card-title"> 
                    3. Journalism <br>Photography
                  </h4>
                </div>
              </div>
            </div>

            <!-- WEB WORKER -->
            <form>
              <div>
                <br>
                <label for="number1">Jenis Paket : </label>    
                <input type="text" class="form-control jarak" id="number1" value="0">
              </div>
              <div>
                <label for="number2">Lama Sewa  : </label>   
                <input type="text" class="form-control jarak" id="number2" value="0">
              </div>
              <div>
                <p class="result">Rp. 0</p>
              </div>
            </form>
          </div>
          <script src="main.js"></script>
        </div>
      </section>



    <!--=============================
      Frequently Asked Questions Section
      ==============================-->
      <section id="faq">
        <div class="container">
          <header class="section-header">
            <h3>Frequently Asked Questions</h3>
            <p>Pertanyaan yang sering ditanyakan.</p>
          </header>

          <ul id="faq-list" class="wow fadeInUp">
            <li>
              <a data-toggle="collapse" class="collapsed" href="#faq1">Berapa harga paket yang tersedia? <i class="ion-android-remove"></i></a>
              <div id="faq1" class="collapse" data-parent="#faq-list">
                <p>
                  Liat di Pricing.
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#faq2" class="collapsed">Siapa saja anggota kelompok? <i class="ion-android-remove"></i></a>
              <div id="faq2" class="collapse" data-parent="#faq-list">
                <p>
                  Liat di Team.
                </p>
              </div>
            </li>

            <li>
              <a data-toggle="collapse" href="#faq3" class="collapsed">Untuk apa web ini dibuat? <i class="ion-android-remove"></i></a>
              <div id="faq3" class="collapse" data-parent="#faq-list">
                <p>
                 Liat di About US.
               </p>
             </div>
           </li>

           <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Service apa saja yang disediakan? <i class="ion-android-remove"></i></a>
            <div id="faq4" class="collapse" data-parent="#faq-list">
              <p>
                Liat di Service.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Dimana kita bisa melihat ulasan customer sebelumnya? <i class="ion-android-remove"></i></a>
            <div id="faq5" class="collapse" data-parent="#faq-list">
              <p>
                Liat di Testimonials.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">Dimana kita bisa malakukan pemesanan paket? <i class="ion-android-remove"></i></a>
            <div id="faq6" class="collapse" data-parent="#faq-list">
              <p>
                Liat di Contact US
              </p>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </main>

  <!--==========================
    Footer
    ============================-->
    <footer id="footer" class="section-bg">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="row">
                <div class="col-sm-6">
                  <div class="footer-info">
                    <h2>ThreeStudio</h2>
                    <p>sering-sering kunjungi ThreeStudio yaa. kami memiliki paket yang bagus dan menarik, photographer yang terkenal dan punya jam terbang yang tinggi.</p>
                  </div>

                  <div class="footer-newsletter">
                    <h4>Our Newsletter</h4>
                    <p>sering-sering kunjungi ThreeStudio yaa. kami memiliki paket yang bagus dan menarik, photographer yang terkenal dan punya jam terbang yang tinggi. kami juga punya rekomendasi tempat-tempat yang menarik loohhhhh.</p>
                    <form action="" method="post">
                      <input type="email" name="email"><input type="submit" tabindex="0" value="Subscribe">
                    </form>
                  </div>
                </div>

                <div class="col-sm-6">
                  <div class="footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                      <li><a href="#">Home</a></li>
                      <li><a href="#">About us</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Terms of service</a></li>
                      <li><a href="#">Privacy policy</a></li>
                    </ul>
                  </div>

                  <div class="footer-links">
                    <h4>Contact Us</h4>
                    <p>
                      Siwalankerto 8 <br>
                      Surabaya, Jawa Timur<br>
                      Indonesia <br>
                      <strong>Phone : </strong> +62 811 2345 6789<br>
                      <strong>Email : </strong> info@example.com<br>
                    </p>
                  </div>
                  <div class="social-links">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form">
                <h4>Send us a message</h4>
                <p>Kirim kami kritik dan saran kami kesepian.</p>
                <form action="" method="post" role="form" class="contactForm">
                  <div class="form-group">
                    <input type="text" name="name" tabindex="4s" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" tabindex="1" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" tabindex="2" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" tabindex="3" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>

                  <div id="sendmessage">Your message has been sent. Thank you!</div>
                  <div id="errormessage"></div>

                  <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong>ThreeStudio</strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="https://bootstrapmade.com/">ThreeStudio</a>
        </div>
      </div>
    </footer><!-- #footer -->

    <script>
      if ('serviceWorker' in navigator) { 
        window.addEventListener('load', () => { 
         navigator.serviceWorker.register('service-worker.js')
         .then((reg) => { 
          console.log('Service worker registered.', reg);
        })
       })
      };
    </script>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/mobile-nav/mobile-nav.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->

    <script>
      let deferredPrompt;
      let btnAdd = document.querySelector('.install_app');

      window.addEventListener('beforeinstallprompt', (e) => {
        e.preventDefault();
        deferredPrompt = e;
        btnAdd.style.display = 'block';
      });

      btnAdd.addEventListener('click', (e) => {
        btnAdd.style.display = 'none';
        deferredPrompt.prompt();
        deferredPrompt.userChoice
        .then((choiceResult) => {
          if (choiceResult.outcome === 'accepted') {
            console.log('User accepted the A2HS prompt');
          } else {
            console.log('User dismissed the A2HS prompt');
          }
          deferredPrompt = null;
        });
      });

    </script>

    <script>
      $("#notify-button").click(function(){
        Push.create("Welcome!",{
          body: "Three Studio",
          icon: '/asd.jpg',
          timeout: 2000,
          onClick: function () {
            window.focus();
            this.close();
          }
        });
      });
      $("#clear-button").click(function(){ 
       Push.clear();
     });
      $("#check-button").click(function(){ 
        console.log(Push.Permission.has());
      });
    </script>
    <script>
      $("#notify-button2").click(function(){
        Push.create("Welcome!",{
          body: "Three Studio",
          icon: '/asd.jpg',
          timeout: 2000,
          onClick: function () {
            window.focus();
            this.close();
          }
        });
      });
      $("#clear-button").click(function(){ 
       Push.clear();
     });
      $("#check-button").click(function(){ 
        console.log(Push.Permission.has());
      });
    </script>
    <script>
      $("#notify-button3").click(function(){
        Push.create("Welcome!",{
          body: "Three Studio",
          icon: '/asd.jpg',
          timeout: 2000,
          onClick: function () {
            window.focus();
            this.close();
          }
        });
      });
      $("#clear-button").click(function(){ 
       Push.clear();
     });
      $("#check-button").click(function(){ 
        console.log(Push.Permission.has());
      });
    </script>
    <script>
      $("#notify-button4").click(function(){
        Push.create("Welcome!",{
          body: "Three Studio",
          icon: '/asd.jpg',
          timeout: 2000,
          onClick: function () {
            window.focus();
            this.close();
          }
        });
      });
      $("#clear-button").click(function(){ 
       Push.clear();
     });
      $("#check-button").click(function(){ 
        console.log(Push.Permission.has());
      });
    </script>
    <script src="js/main.js"></script>

  </body>
  </html>
