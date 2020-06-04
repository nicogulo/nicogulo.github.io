<?php


  $conn = mysqli_connect("localhost", "himakast_himaka", "Informatikasatu", "himakast_berita");
mysqli_query($conn,"SET CHARACTER SET utf8");
  $result = mysqli_query($conn, "SELECT * FROM berita");
  

  // while ($brt = mysqli_fetch_assoc($result)){
  //   var_dump($brt);
  
 ?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Home</title>
  <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="images/Himaka.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css"
    href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CMuli:100,300,400,600,800">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
  .ie-panel {
    display: none;
    background: #212121;
    padding: 10px 0;
    box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
    clear: both;
    text-align: center;
    position: relative;
    z-index: 1;
  }

  html.ie-10 .ie-panel,
  html.lt-ie-10 .ie-panel {
    display: block;
  }
  </style>
</head>

<body>
  <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
        src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820"
        alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a>
  </div>
  <div class="preloader" id="loading">
    <div class="preloader-body">
      <div id="loading-center-object">
        <div class="object" id="object_four"></div>
        <div class="object" id="object_three"></div>
        <div class="object" id="object_two"></div>
        <div class="object" id="object_one"></div>
      </div>
    </div>
  </div>
  <div class="page">
    <!-- Page Header-->
    <header class="section page-header page-header-2">
      <section class="section parallax-container context-dark" data-parallax-img="images/gedung.jpg">
        <div class="parallax-content">
          <!-- RD Navbar-->
          <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
              data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed"
              data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static"
              data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static"
              data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="10px" data-xl-stick-up-offset="10px"
              data-xxl-stick-up-offset="10px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.php"><img class="brand-logo-dark"
                        src="images/HIMAKA.png" alt="" width="100" height="32" srcset="images/HIMAKA.png 2x" /><img
                        class="brand-logo-light" src="images/HIMAKA.png" alt="" width="100" height="32"
                        srcset="images/HIMAKA.png 2x" /></a></div>
                </div>
                <div class="rd-navbar-nav-wrap">
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">Home</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html">About Us</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="our-team.html">Our Team</a>
                    </li>

                    <li class="rd-nav-item"><a class="rd-nav-link" href="contact-us.html">Contact Us</a>
                    </li>
                  </ul>
                  <div class="rd-navbar-dummy"></div>
                </div>
            </nav>
          </div>
          <!-- FScreen-->
          <div class="page-header-2-inner">
            <div class="container">
              <div class="block-custom">
                <h4 class="text-default wow clipInLeft" data-wow-delay=".1s">Selamat Datang di Website.</h4>
                <h2 class="font-weight-extra-black wow clipInLeft" data-wow-delay=".1s">Himpunan Mahasiswa Teknik
                  Informatika</h2>
                <div class="group-xl group-middle">
                  <div><a class="button button-md button-white button-shadow button-winona wow clipInLeft"
                      href="about-us.html" data-wow-delay=".2s">Read more</a></div>
                  <div><a class="button button-md button-primary button-shadow button-winona wow clipInLeft"
                      href="contact-us.html" data-wow-delay=".2s">Contact us</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </header>
    <!-- Service-->
    <section class="section section-md bg-gray-100 text-center">
      <div class="container">
        <div class="badge wow fadeIn" id="ourservice">Our Services</div>
        <h3 class="wow fadeIn">Laboratorium Kompouter</h3>
        <div class="row row-30 row-xl-60">
          <div class="col-sm-12">

            <!-- Owl Carousel-->
            <div class="owl-carousel owl-carousel_type-1" data-items="1" data-dots="true" data-nav="false"
              data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false">


              <!-- LAB DASAR-->
              <article class="box-modern wow fadeIn" data-anime="circles-2">
                <div class="box-modern-media">
                  <div class="box-modern-icon "><img class="brand-logo-dark" src="images/lab-dasar.png" alt=""
                      width="1000" height="1000" srcset="images/lab-dasar.png 2x"></div>
                  <div class="box-modern-circle box-modern-circle-1"></div>
                </div>
                <p class="box-modern-title">Laboratorium Komputer Dasar</p>
                <div class="box-modern-text">
                  <p>Merupakan laboratorium yang dirancang untuk dapat menerapkan model praktek pembelajaran dasar
                    algoritma pemrograman, serta sistem basis data.</p>
                </div>
              </article>

              <!--LAB LANJUT-->
              <article class="box-modern wow fadeIn" data-anime="circles-2">
                <div class="box-modern-media">
                  <div class="box-modern-icon "><img class="brand-logo-dark" src="images/lab-lanjut.png" alt=""
                      width="100" height="100" srcset="images/lab-lanjut.png 2x"></div>
                  <div class="box-modern-circle box-modern-circle-1"></div>
                </div>
                <p class="box-modern-title">Laboratorium Komputer Lanjut</p>
                <div class="box-modern-text">
                  <p>Merupakan laboratorium yang dirancang untuk dapat menerapkan model praktek pembelajaran algoritma
                    pemrograman tingkat lanjut.</p>
                </div>
              </article>

              <!--LAB LINUX-->
              <article class="box-modern wow fadeIn" data-anime="circles-2">
                <div class="box-modern-media">
                  <div class="box-modern-icon "><img class="brand-logo-dark" src="images/lab-linux.png" alt=""
                      width="100" height="100" srcset="images/lab-linux.png 2x"></div>
                  <div class="box-modern-circle box-modern-circle-1"></div>
                </div>
                <p class="box-modern-title">Laboratorium Komputer Open Source</p>
                <div class="box-modern-text">
                  <p>Merupakan Laboratorium yang fokus pada penerapan pembelajaran Jaringan pada komputer dan Paralel
                    processing.</p>
                </div>
              </article>

              <!-- LAB MULTI-->

              <article class=" box-modern wow fadeIn" data-anime="circles-2">
                <div class="box-modern-media">

                  <div class="box-modern-icon "><img class="brand-logo-dark" src="images/lab-multi.png" alt=""
                      width="100" height="100" srcset="images/lab-multi.png 2x"></div>
                  <div class="box-modern-circle box-modern-circle-1"></div>
                </div>
                <p class="box-modern-title">Laboratorium Komputer Multimedia</p>
                <div class="box-modern-text">
                  <p>Merupakan laboratorium yang berfokus pada pembelajaran design.</p>
                </div>
              </article>

              <!-- LAB SIMPEL-->
              <article class="box-modern wow fadeIn" data-anime="circles-2">
                <div class="box-modern-media">
                  <div class="box-modern-icon "><img class="brand-logo-dark" src="images/lab-simpel.png" alt=""
                      width="200" height="200" srcset="images/lab-simpel.png 2x"></div>
                  <div class="box-modern-circle box-modern-circle-1"></div>
                </div>
                <p class="box-modern-title">Laboratorium Komputer Simulasi dan Pemodelan </p>
                <div class="box-modern-text">
                  <p>Merupakan laboratorium yang dirancang untuk dapat menerapkan model praktek pembelajaran dari
                    simulasi
                    permodelan.</p>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>
  <!-- About App-->
  <section class="section section-md bg-accent">
    <div class="container">
      <div class="row row-50 justify-content-center flex-md-row-reverse align-items-center justify-content-md-between">
        <div class="col-sm-10 col-md-5 wow fadeInRightSmall">
          <div class="badge">Seputar Himaka</div>
          <h3>Apa itu HIMAKA?</h3>
          <p class="big inset-2">HIMAKA adalah organisasi yang didirikan dan diresmikan oleh seluruh mahasiswa teknik
            informatika pada tanggal 19 Agustus 1999. BPH HIMAKA Merupakan badan pengurus harian yang berfungsi untuk
            menjalankan program kerja yang telah ditetapkan serta melakukan fungsi kontrol, koordinasi, pengembangan
            dan
            komunikasi hubungan antara internal dan eksternal HIMAKA.</p>
          <!-- non -->
          <!-- <ul class="list-marked">
                        <li>Quality research & analysis</li>
                        <li>Business advisory experience</li>
                        <li>Reliable company management</li> -->
          <!-- akhir none -->
          </ul><a class="button button-primary button-shadow button-winona font-weight-sbold" href="about-us.html">Read
            more</a>
        </div>
        <div class="col-sm-10 col-md-6 wow fadeInLeftSmall">
          <div class="thumbnail-classy">
            <div class="thumbnail-classy-image bg-image" style="background-image: url(images/HIMAKA-LOGO.png);"></div>
            <div class="thumbnail-classy-caption"><a class="thumbnail-classy-button mdi mdi-play"
                href="https://www.youtube.com/watch?v=hR7XHqyZOu0&t=41s" data-lightgallery="item">
                <svg class="thumbnail-classy-button-shape" width="86" height="86" viewbox="0 0 88 88"
                  xmlns="http://www.w3.org/2000/svg" shape-rendering="crispEdges">
                  <rect x="1" y="1" width="86" height="86" rx="6" ry="6"></rect>
                </svg></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Features-->
  <!-- Owl Carousel-->
  <div class="owl-carousel owl-carousel_type-1" data-items="1" data-dots="true" data-nav="false" data-stage-padding="0"
    data-loop="true" data-margin="30" data-mouse-drag="false">
    <!-- 1 -->

    <?php while ( $row = mysqli_fetch_assoc($result)): ?>
    <section class="section section-md">
      <div class="container">
        <div class="row row-50">
          <div class="col-sm-10 col-md-5 wow fadeInRightSmall">
            <div class="badge" id="news">Ada Apa Hari ini?</div>
            <h4><?php echo $row["judul"]; ?>
            </h4>
            <p class="big inset-2" style="letter-spacing: .025em"><?php echo $row["isi"]; ?></p>
        
            
            <ul class="list-marked">
              <th>You can find us on</th>
              <li>Instagram : <a href="https://instagram.com/himaka_sttpln">himaka_sttpln</a> </li>
              <li>Twitter : <a href="https://twiter.com/himakasttpln">himakasttpln</a> </li>
              <li>Line : @zgp5782s</li>
              <li>Youtube : <a href="https://youtube.com/himaka-sttpln">HIMAKA STTPLN</a> </li>
              <li>Email : <a href="mailto:#">himaka@sttpln.ac.id</a></li>

            </ul>
          </div>
          <div class="col-sm-10 col-md-7 wow fadeInLeftSmall  text-center">
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-carousel" data-items="1" data-dots="true" data-nav="false"
              data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="false">

              <div class="thumbnail-classy-caption"><img class="img-custom" src="images/berita/<?php echo $row["gambar"]; ?>"
                  alt="" width="400" height="500" />
              </div>
              <div class="thumbnail-classy">
                <div class="thumbnail-classy-image bg-image" style="background-image: url(images/HIMAKA-LOGO.png); ">
                </div>
                <div class="thumbnail-classy-caption"><a class="thumbnail-classy-button mdi mdi-play"
                    href="https://www.youtube.com/watch?v=yOXUU5mBq6M" data-lightgallery="item">
                    <svg class="thumbnail-classy-button-shape" width="86" height="86" viewbox="0 0 88 88"
                      xmlns="http://www.w3.org/2000/svg" shape-rendering="crispEdges">
                      <rect x="1" y="1" width="86" height="86" rx="6" ry="6"></rect>
                    </svg></a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <br>
      <h5 style="text-align:center;">Swipe Left</h5>
    </section>
<?php endwhile;  ?>
    <!-- akhir 1 -->
    <!-- 2 -->

    <section class="section section-md">
      <div class="container">
        <div
          class="row row-50 justify-content-center flex-md-row-reverse align-items-center justify-content-md-between">
          <div class="col-sm-10 col-md-5 wow fadeInRightSmall">
            <div class="badge">Ada Apa Hari Ini?</div>
            <h3>Apa itu HIMAKA?</h3>
            <p class="big inset-2">HIMAKA adalah organisasi yang didirikan dan diresmikan oleh seluruh mahasiswa
              teknik
              informatika pada tanggal 19 Agustus 1999. BPH HIMAKA Merupakan badan pengurus harian yang berfungsi
              untuk
              menjalankan program kerja yang telah ditetapkan serta melakukan fungsi kontrol, koordinasi,
              pengembangan
              dan
              komunikasi hubungan antara internal dan eksternal HIMAKA.</p>
            </ul><a class="button button-primary button-shadow button-winona font-weight-sbold"
              href="about-us.html">Read
              more</a>
          </div>
          <div class="col-sm-10 col-md-6 wow fadeInLeftSmall">
            <div class="thumbnail-classy">
              <div class="thumbnail-classy-image bg-image" style="background-image: url(images/HIMAKA-LOGO.png);">
              </div>
              <div class="thumbnail-classy-caption"><a class="thumbnail-classy-button mdi mdi-play"
                  href="https://www.youtube.com/watch?v=hR7XHqyZOu0&t=41s" data-lightgallery="item">
                  <svg class="thumbnail-classy-button-shape" width="86" height="86" viewbox="0 0 88 88"
                    xmlns="http://www.w3.org/2000/svg" shape-rendering="crispEdges">
                    <rect x="1" y="1" width="86" height="86" rx="6" ry="6"></rect>
                  </svg></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  </div>
  <!-- akhir -->
  <br>
  <!-- About our messenger-->
  <section class="section parallax-container section-md bg-accent" data-parallax-img="images/1920x553.jpg"
    id="about-us">
    <div class="parallax-content">
      <div class="container">
        <div class="row row-50 justify-content-end">
          <div class="col-md-8 col-md-7 col-xl-6">
            <div class="block-5 wow clipInLeft">
              <div class="badge wow clipInLeft">What We Work On</div>
              <h3 class="wow clipInLeft" data-wow-delay=".1s"><span>Kumpulan Dokumentasi</span><br><span>Dari
                  kegiatan
                  Program Kerja
                </span></h3>
              <p class="big wow clipInLeft inset-3" data-wow-delay=".2s">Selama ini telah banyak Program Kerja dari
                Kabinet Serasi yang telah berjalan .</p><a
                class="button button-white button-winona wow clipInLeft font-weight-sbold" href="about-us.html"
                data-wow-delay=".3s">View Gallery</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- People Ready to Change the World-->
  <section class="section section-md text-center bg-white">
    <div class="container">
      <div class="badge">Meet our team</div>
      <h3>Our Professional Team</h3>
      <!-- Owl Carousel-->
      <div class="owl-carousel owl-carousel_profile_modern_type-1" data-items="1" data-sm-items="2" data-md-items="3"
        data-xl-items="4" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="true" data-margin="30"
        data-mouse-drag="false">
        <!-- KAHIM -->
        <article class="profile-modern">
          <figure class="profile-modern-figure"><img class="profile-modern-image"
              src="images/our-team/our team/266x227/KAHIM.png" alt="" width="369" height="315" />
          </figure>
          <div class="profile-modern-main">
            <div class="profile-modern-main-item profile-modern-main-item_primary">
              <h4 class="profile-modern-name">Givari Fairus F. Deu</h4>
              <p class="profile-modern-position">Ketua HIMAKA</p>
            </div>
            <div class="profile-modern-main-item profile-modern-main-item_secondary">
              <h4 class="profile-modern-main-title">Get in Touch</h4>
              <ul class="list-inline list-inline-xs">
                <li><a class="icon icon-md mdi mdi-facebook" href="https://facebook.com/iyandeu"></a></li>
                <li><a class="icon icon-md mdi mdi-twitter" href="https://twitter.com/rdeuuu"></a></li>
                <li><a class="icon icon-md mdi mdi-instagram" href="https://instagram.com/deuuuuu_"></a></li>
              </ul>
              <div class="profile-modern-toggle mdi mdi-arrow-top-right"></div>
            </div>
          </div>
        </article> <!-- WAKAHIM-->
        <article class="profile-modern">
          <figure class="profile-modern-figure"><img class="profile-modern-image"
              src="images/our-team/our team/266x227/WAKAHIM.png" alt="" width="369" height="315" />
          </figure>
          <div class="profile-modern-main">
            <div class="profile-modern-main-item profile-modern-main-item_primary">
              <h4 class="profile-modern-name">Ilham Julian Syahputra</h4>
              <p class="profile-modern-position">Wakil HIMAKA</p>
            </div>
            <div class="profile-modern-main-item profile-modern-main-item_secondary">
              <h4 class="profile-modern-main-title">Get in Touch</h4>
              <ul class="list-inline list-inline-xs">
                <li><a class="icon icon-md mdi mdi-facebook" href="#"></a></li>
                <li><a class="icon icon-md mdi mdi-twitter" href="#"></a></li>
                <li><a class="icon icon-md mdi mdi-instagram" href="https://instagram.com/ilham_julians"></a></li>
              </ul>
              <div class="profile-modern-toggle mdi mdi-arrow-top-right"></div>
            </div>
          </div>
        </article>
        <!-- SEKRETARIS UMUM-->
        <article class="profile-modern">
          <figure class="profile-modern-figure"><img class="profile-modern-image"
              src="images/our-team/our team/266x227/SEKERTARIS UMUM.png" alt="" width="369" height="315" />
          </figure>
          <div class="profile-modern-main">
            <div class="profile-modern-main-item profile-modern-main-item_primary">
              <h4 class="profile-modern-name">Ni Made Ayu Astiti W</h4>
              <p class="profile-modern-position">Sekretaris Umum</p>
            </div>
            <div class="profile-modern-main-item profile-modern-main-item_secondary">
              <h4 class="profile-modern-main-title">Get in Touch</h4>
              <ul class="list-inline list-inline-xs">
                <li><a class="icon icon-md mdi mdi-facebook" href="https://facebook.com/ayu.astiti.9"></a></li>
                <li><a class="icon icon-md mdi mdi-twitter" href="https://twitter.com/ay_astiti16"></a></li>
                <li><a class="icon icon-md mdi mdi-instagram" href="https://instagram.com/ayuastiti166"></a></li>
              </ul>
              <div class="profile-modern-toggle mdi mdi-arrow-top-right"></div>
            </div>
          </div>
        </article> <!-- BENDUM-->
        <article class="profile-modern">
          <figure class="profile-modern-figure"><img class="profile-modern-image"
              src="images/our-team/our team/266x227/BENDUM.png" alt="" width="369" height="315" />
          </figure>
          <div class="profile-modern-main">
            <div class="profile-modern-main-item profile-modern-main-item_primary">
              <h4 class="profile-modern-name">Ramdhati 'Ulya</h4>
              <br>
              <p class="profile-modern-position">Bendahara Umum</p>
            </div>
            <div class="profile-modern-main-item profile-modern-main-item_secondary">
              <h4 class="profile-modern-main-title">Get in Touch</h4>
              <ul class="list-inline list-inline-xs">
                <li><a class="icon icon-md mdi mdi-facebook" href="https://facebook.com/ramdhati.ulya"></a></li>
                <li><a class="icon icon-md mdi mdi-twitter" href="https://twitter.com/Ramdhatiulya"></a></li>
                <li><a class="icon icon-md mdi mdi-instagram" href="https://instagram.com/ramdhatiulya"></a></li>
              </ul>
              <div class="profile-modern-toggle mdi mdi-arrow-top-right"></div>
            </div>
          </div>
        </article> <!-- SEKRETARIS 1-->
        <article class="profile-modern">
          <figure class="profile-modern-figure"><img class="profile-modern-image"
              src="images/our-team/our team/266x227/SEKERTARIS 1.png" alt="" width="369" height="315" />
          </figure>
          <div class="profile-modern-main">
            <div class="profile-modern-main-item profile-modern-main-item_primary">
              <h4 class="profile-modern-name">Sekar Novianing L.</h4>
              <p class="profile-modern-position">Sekretaris 1</p>
            </div>
            <div class="profile-modern-main-item profile-modern-main-item_secondary">
              <h4 class="profile-modern-main-title">Get in Touch</h4>
              <ul class="list-inline list-inline-xs">
                <li><a class="icon icon-md mdi mdi-facebook" href="https://web.facebook.com/sekar.letawati"></a>
                </li>
                <li><a class="icon icon-md mdi mdi-twitter" href="https://twitter.com/sekarnovianing"></a></li>
                <li><a class="icon icon-md mdi mdi-instagram" href="https://instagram.com/sekarnovianing"></a></li>
              </ul>
              <div class="profile-modern-toggle mdi mdi-arrow-top-right"></div>
            </div>
          </div>
        </article><!-- SEKRETARIS 2-->
        <article class="profile-modern">
          <figure class="profile-modern-figure"><img class="profile-modern-image"
              src="images/our-team/our team/266x227/SEKERTARIS 2.png" alt="" width="369" height="315" />
          </figure>
          <div class="profile-modern-main">
            <div class="profile-modern-main-item profile-modern-main-item_primary">
              <h4 class="profile-modern-name">Dinda Aulia Yashinta</h4>
              <p class="profile-modern-position">Sekretaris 2</p>
            </div>
            <div class="profile-modern-main-item profile-modern-main-item_secondary">
              <h4 class="profile-modern-main-title">Get in Touch</h4>
              <ul class="list-inline list-inline-xs">
                <li><a class="icon icon-md mdi mdi-facebook" href="#"></a></li>
                <li><a class="icon icon-md mdi mdi-twitter" href="https://twitter.com/diindauliia"></a></li>
                <li><a class="icon icon-md mdi mdi-instagram" href="https://instagram.com/dindaauliay"></a></li>
              </ul>
              <div class="profile-modern-toggle mdi mdi-arrow-top-right"></div>
            </div>
          </div>
        </article>
        <!-- BENDUM 1-->
        <article class="profile-modern">
          <figure class="profile-modern-figure"><img class="profile-modern-image"
              src="images/our-team/our team/266x227/BENDUM 1.png" alt="" width="369" height="315" />
          </figure>
          <div class="profile-modern-main">
            <div class="profile-modern-main-item profile-modern-main-item_primary">
              <h4 class="profile-modern-name">Oktaviani Dana Iswara</h4>
              <p class="profile-modern-position">Bendahara 1</p>
            </div>
            <div class="profile-modern-main-item profile-modern-main-item_secondary">
              <h4 class="profile-modern-main-title">Get in Touch</h4>
              <ul class="list-inline list-inline-xs">
                <li><a class="icon icon-md mdi mdi-facebook" href="https://facebook.com/oktaviani.dis"></a></li>
                <li><a class="icon icon-md mdi mdi-twitter" href="https://twitter.com/Odis_30"></a></li>
                <li><a class="icon icon-md mdi mdi-instagram" href="https://instagram.com/oktavianidanaiswara"></a>
                </li>
              </ul>
              <div class="profile-modern-toggle mdi mdi-arrow-top-right"></div>
            </div>
          </div>
        </article>
        <!-- BENDUM 2-->
        <article class="profile-modern">
          <figure class="profile-modern-figure"><img class="profile-modern-image"
              src="images/our-team/our team/266x227/BENDUM 2.png" alt="" width="369" height="315" />
          </figure>
          <div class="profile-modern-main">
            <div class="profile-modern-main-item profile-modern-main-item_primary">
              <h4 class="profile-modern-name">Ratu Triya Gemasih</h4>
              <p class="profile-modern-position">Bendahara 2</p>
            </div>
            <div class="profile-modern-main-item profile-modern-main-item_secondary">
              <h4 class="profile-modern-main-title">Get in Touch</h4>
              <ul class="list-inline list-inline-xs">
                <li><a class="icon icon-md mdi mdi-facebook" href="#"></a></li>
                <li><a class="icon icon-md mdi mdi-twitter" href="https://twitter.com/ratutiyagmsihh"></a></li>
                <li><a class="icon icon-md mdi mdi-instagram" href="https://instagram.com/ratutriyagmsih"></a></li>
              </ul>
              <div class="profile-modern-toggle mdi mdi-arrow-top-right"></div>
            </div>
          </div>
        </article>
        <!-- KABIRO-->
        <article class="profile-modern">
          <figure class="profile-modern-figure"><img class="profile-modern-image"
              src="images/our-team/our team/266x227/biro.png" alt="" width="369" height="315" />
          </figure>
          <div class="profile-modern-main">
            <div class="profile-modern-main-item profile-modern-main-item_primary">
              <h4 class="profile-modern-name">Faizal Ansyori</h4>
              <p class="profile-modern-position">KABIRO Media dan Informasi</p>
            </div>
            <div class="profile-modern-main-item profile-modern-main-item_secondary">
              <h4 class="profile-modern-main-title">Get in Touch</h4>
              <ul class="list-inline list-inline-xs">
                <li><a class="icon icon-md mdi mdi-facebook" href="#"></a></li>
                <li><a class="icon icon-md mdi mdi-twitter" href="#"></a></li>
                <li><a class="icon icon-md mdi mdi-instagram" href="https://instagram.com/ansyorifz"></a></li>
              </ul>
              <div class="profile-modern-toggle mdi mdi-arrow-top-right"></div>
            </div>
          </div>
        </article>
        <!-- KABID KHS-->
        <article class="profile-modern">
          <figure class="profile-modern-figure"><img class="profile-modern-image"
              src="images/our-team/our team/266x227/KABID KHS.png" alt="" width="369" height="315" />
          </figure>
          <div class="profile-modern-main">
            <div class="profile-modern-main-item profile-modern-main-item_primary">
              <h4 class="profile-modern-name">Habib Bhasamala</h4>
              <p class="profile-modern-position">KABID KHS</p>
            </div>
            <div class="profile-modern-main-item profile-modern-main-item_secondary">
              <h4 class="profile-modern-main-title">Get in Touch</h4>
              <ul class="list-inline list-inline-xs">
                <li><a class="icon icon-md mdi mdi-facebook" href="https://web.facebook.com/habibdansei"></a></li>
                <li><a class="icon icon-md mdi mdi-twitter" href="https://twitter.com/bhasamala"></a></li>
                <li><a class="icon icon-md mdi mdi-instagram" href="https://instagram.com//bhasamala"></a></li>
              </ul>
              <div class="profile-modern-toggle mdi mdi-arrow-top-right"></div>
            </div>
          </div>
        </article>
        <!-- KABID AEK-->
        <article class="profile-modern">
          <figure class="profile-modern-figure"><img class="profile-modern-image"
              src="images/our-team/our team/266x227/KABID AEK.png" alt="" width="369" height="315" />
          </figure>
          <div class="profile-modern-main">
            <div class="profile-modern-main-item profile-modern-main-item_primary">
              <h4 class="profile-modern-name">Muhammad Ihza Alhafiz</h4>
              <p class="profile-modern-position">KABID AEK</p>
            </div>
            <div class="profile-modern-main-item profile-modern-main-item_secondary">
              <h4 class="profile-modern-main-title">Get in Touch</h4>
              <ul class="list-inline list-inline-xs">
                <li><a class="icon icon-md mdi mdi-facebook" href="#"></a></li>
                <li><a class="icon icon-md mdi mdi-twitter" href="#"></a></li>
                <li><a class="icon icon-md mdi mdi-instagram" href="https://instagram.com/mhdzaafiz"></a></li>
              </ul>
              <div class="profile-modern-toggle mdi mdi-arrow-top-right"></div>
            </div>
          </div>
        </article>
        <!--KABID PPM-->
        <article class="profile-modern">
          <figure class="profile-modern-figure"><img class="profile-modern-image"
              src="images/our-team/our team/266x227/KABID PPM.png" alt="" width="369" height="315" />
          </figure>
          <div class="profile-modern-main">
            <div class="profile-modern-main-item profile-modern-main-item_primary">
              <h4 class="profile-modern-name">Febriansyah Ardi</h4>
              <p class="profile-modern-position">KABID PPM</p>
            </div>
            <div class="profile-modern-main-item profile-modern-main-item_secondary">
              <h4 class="profile-modern-main-title">Get in Touch</h4>
              <ul class="list-inline list-inline-xs">
                <li><a class="icon icon-md mdi mdi-facebook" href="https://facebook.com/febriansyah.ardi.3"></a>
                </li>
                <li><a class="icon icon-md mdi mdi-twitter" href="https://twitter.com/Febrif04"></a></li>
                <li><a class="icon icon-md mdi mdi-instagram" href="https://instagram.com.com/febriansyah.f04"></a>
                </li>
              </ul>
              <div class="profile-modern-toggle mdi mdi-arrow-top-right"></div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>
  <!-- Media about us
  <section class="section section-md text-center bg-accent" id="media">
    <div class="container">
      <div class="badge">Who We Work With</div>
      <h3>Our Partners</h3>
      <div class="owl-carousel owl-carousel-centered" data-items="2" data-sm-items="3" data-md-items="4"
        data-md-items="5" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="true" data-margin="30"
        data-mouse-drag="false">
        <div class="wow clipInLeft"><a class="link-image-1" href="#"><img src="images/partners-1-88x77.png" alt=""
              width="88" height="77" /></a></div>
        <div class="wow clipInLeft" data-wow-delay=".1s"><a class="link-image-2" href="#"><img
              src="images/partners-2-73x78.png" alt="" width="73" height="78" /></a></div>
        <div class="wow clipInLeft" data-wow-delay=".2s"><a class="link-image-2" href="#"><img
              src="images/partners-3-96x62.png" alt="" width="96" height="62" /></a></div>
        <div class="wow clipInLeft" data-wow-delay=".3s"><a class="link-image-2" href="#"><img
              src="images/partners-4-78x80.png" alt="" width="78" height="80" /></a></div>
        <div class="wow clipInLeft" data-wow-delay=".4s"><a class="link-image-2" href="#"><img
              src="images/partners-5-87x76.png" alt="" width="87" height="76" /></a></div>
      </div>
    </div>
  </section> -->
  <footer class="section footer-classic">
    <div class="footer-classic-main">
      <div class="container">
        <div class="row row-50 justify-content-md-between">
          <div class="col-sm-7 col-md-3 col-xl-2"><a class="brand" href="index.php"><img class="brand-logo-dark"
                src="images/HIMAKA.png" alt="" width="165" height="32" srcset="images/HIMAKA.png 2x" /></a>
            <p><span style="max-width: 250px;">Organisasi ini bernama Himpunan Mahasiswa Teknik Informatika
                disingkat
                dengan HIMAKA.</span></p>
          </div>
          <div class="col-sm-5 col-md-3 col-xl-2">
            <h4 class="footer-classic-title">Who We Are</h4>
            <ul class="list footer-classic-list">
              <li><a href="about-us.html">About Us</a></li>
              <li><a href="our-team.html">Our Team</a></li>
            </ul>
          </div>
          <div class="col-sm-7 col-md-5 col-xl-3">
            <h4 class="footer-classic-title">Quck Links</h4>
            <ul class="list footer-classic-list footer-classic-list_2-cols">
              <li><a href="#news">News</a></li>
              <li><a href="#ourservice">Features</a></li>
              <!-- <li><a href="#">FAQ</a></li> -->
              <li><a href="contact-us.html">Contacts</a></li>
            </ul>
          </div>
          <div class="col-sm-5 col-md-9 col-xl-2">
            <h4 class="footer-classic-title">Get in Touch</h4>
            <div class="row row-20 row-sm-35">
              <div class="col-6 col-sm-12 col-md-8 col-xl-12">
                <div class="row row-10 text-default">
                  <div class="col-md-6 col-xl-12"><a href="mailto:#">himaka@sttpln.ac.id</a></div>
                  <!-- <div class="col-md-6 col-xl-12"><a class="big" href="tel:#">+11212121212</a></div> -->
                </div>
              </div>
              <div class="col-6 col-sm-12 col-md-4 col-xl-12 text-right text-sm-left">
                <div class="group group-xs"><a class="link link-social-1 mdi mdi-twitter"
                    href="https://twitter.com/himakaSTTPLN"></a><a class="link link-social-1 mdi mdi-youtube-play"
                    href="https://www.youtube.com/himaka-sttpln"></a><a class="link link-social-1 mdi mdi-instagram"
                    href="https://www.instagram.com/himaka_sttpln/"></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-classic-aside">
      <div class="container">
        <p class="rights"><span>&copy;&nbsp;</span><span
            class="copyright-year"></span><span>&nbsp;</span><span>Copyright</span><span>.&nbsp;</span><a
            href="privacy-policy.html">Privacy Policy</a>. Design&nbsp;by&nbsp;<a
            href="http://instagram.com/_xnfvk">Nic</a></p>
      </div>
    </div>
  </footer>
  </div>
  <div class="snackbars" id="form-output-global"></div>
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>