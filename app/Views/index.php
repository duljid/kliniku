<!DOCTYPE html>
<html lang="en">

<head>

     <title>Kliniku</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css')?>">
     <link rel="stylesheet" href="<?php echo base_url('fontawesome/css/all.css')?>">
     <link rel="stylesheet" href="<?php echo base_url('css/animate.css')?>">
     <link rel="stylesheet" href="<?php echo base_url('css/owl.carousel.css')?>">
     <link rel="stylesheet" href="<?php echo base_url('css/owl.theme.default.min.css')?>">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="<?php echo base_url('css/tooplate-style.css')?>">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Selamat Datang Di Website Kami</p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> 0853-6137-0409</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 08:00  - 21:00 
                              (Senin-Sabtu)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a
                                   href="#">info : kliniku@gmail.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="Home" class="navbar-brand"><img width=120 src="<?php echo base_url("image/Asset 3.png") ?>" alt=""></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About Us</a></li>
                         <li><a href="#team" class="smoothScroll">Doctors</a></li>
                         <li><a href="<?= route_to('login')?>" class="smoothScroll">Login</a></li>
                         <li><a href="<?= route_to('register') ?>" class="smoothScroll">Register</a></li>
                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Sehat & Kebahagiaan</h3>
                                        <h1>Anda Prioritas Kami</h1>
                                        <a href="#team" class="section-btn btn btn-default smoothScroll">Layanan</a>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Kami Peduli Akan Pentingnya.</h3>
                                        <h1>Kesehatan Anda</h1>
                                        <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">
                                             About Us</a>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Kami ada sebagai sahabat dalam.</h3>
                                        <h1>Pengobatan & Konsultasi Kesehatan Anda</h1>
                                        <a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Read
                                             Stories</a>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Selamat Datang Di  </i>Kliniku</h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>Daftar Klinik menjadi lebih mudah dan cepat karna dapat dilakukan dimanapun dan kapanpun, tanpa harus mengantri, apalagi mengambil nomor antrian.</p>
                                  
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="<?php echo base_url('image/author-image.jpg')?>" class="img-responsive" alt="">
                                   <figcaption>
                                        <h3>Dr. Bayu Anggara</h3>
                                        <p>Dokter Umum</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">LAYANAN</h2>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="<?php echo base_url('image/team-image1.jpg')?>" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>Prof. dr. Wiwien Heru Wiyono, Sp.P(K), Ph.D</h3>
                                   <p>Dokter Spesialis Paru</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> 0878-3492-5434</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">Wiwien Heru Wiyono@gmail.com</a></p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                        <li><a href="#" class="fa fa-envelope-o"></a></li>
                                   </ul>
                              </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="<?php echo base_url('image/team-image2.jpg')?>" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>Prof. dr. Zubairi Djoerban, Sp.PD-KHOM</h3>
                                   <p>Dokter Spesialis Penyakit Dalam</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> 0853-5434-7809</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">Zubairi Djoerban@gmail.com</a></p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-facebook-square"></a></li>
                                        <li><a href="#" class="fa fa-envelope-o"></a></li>
                                        <li><a href="#" class="fa fa-flickr"></a></li>
                                   </ul>
                              </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="<?php echo base_url('image/team-image3.jpg')?>" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>Utami Trie Wahyuni, S.Psi, M.Psi</h3>
                                   <p>Psikolog</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> 0877-3888-0100</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">Utami Trie Wahyuni@gmail.com</a></p>
                                   </div>
                                   <ul class="social-icon">
                                        <li><a href="#" class="fa fa-twitter"></a></li>
                                        <li><a href="#" class="fa fa-envelope-o"></a></li>
                                   </ul>
                              </div>

                         </div>
                    </div>
                    <br><br>

      <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Promo Terbaru</h2>
                         </div>
                    </div>


                    <div class="clearfix"></div>
                    <div class="col-md-3 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="<?php echo base_url('image/pcrswab.PNG')?>" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>PCR Swap</h3>
                                   <p>Swap PCR TEST COVID-19 (Hasil 1-Hari)</p>
                                   <div class="team-contact-info">
                                        <p> Mulai dari</p>
                                        <h3>RP.495.000</h3>
                                   </div>
                              </div>

                         </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="<?php echo base_url('image/rapitt.jpg')?>" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>Rapit Antigen</h3>
                                   <p>Rapit Swap Antigen Test</p>
                                   <div class="team-contact-info">
                                        <p style="text-decoration: line-through">Rp.125.000</p><p>30%</p>
                                        <h3>RP.88.000</h3>
                                   </div>
                              </div>

                         </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="<?php echo base_url('image/medical.jpg')?>" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>Medical Check</h3>
                                   <p>Medical Check Up (MCU)</p>
                                   <div class="team-contact-info">
                                        <p>Mulai dari</p><br>
                                        <h3>Rp 9.999.000</h3>
                                   </div>
                              </div>

                         </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="<?php echo base_url('image/home.jpg')?>" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>Home Service</h3>
                                   <p>Visit Dokter (Home Service)</p>
                                   <div class="team-contact-info">
                                        <p>Mulai dari</p><br>
                                        <h3>Rp 600.000</h3>
                                   </div>
                              </div>

                         </div>
                    </div>
               
                   

               </div>
          </div>
     </section>
     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Hubungi Kami</h4>
                              <p>Jadi orang yang pertama tahu info & promosi kesehatan terbaru dari Kliniku. Gratis.</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> 0853-6137-0409</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">Kliniku@gmail.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">JAM OPERASIONAL</h4>
                                   <p>Senin - Jumat <span>06:00  - 22:00 </span></p>
                                   <p>Sabtu <span>09:00 - 20:00 </span></p>
                                   <p>Minggu <span>Tutup</span></p>
                                   <img src="<?php echo base_url('image/kmkes.jpg')?>" class="img-responsive" alt="">
                              </div>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text">
                                   <p>Copyright &copy; 2021 kliniku.informatika19.com</p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link">
                                   <a href="#">Laboratory Tests</a>
                                   <a href="#">Departments</a>
                                   <a href="#">Insurance Policy</a>
                                   <a href="#">Careers</a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn">
                                   <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i
                                             class="fa fa-angle-up"></i></a>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.sticky.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/custom.js"></script>
<!-- < Start of Tawk.to Script -->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6148b633d326717cb6826f22/1fg20ffpo';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

<End of Tawk.to Script-->
</body>

</html>