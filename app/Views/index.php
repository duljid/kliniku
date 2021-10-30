<?= $this->extend('template/template_home'); ?>

<?= $this->Section('content');?>
<section id="home" class="slider" data-stellar-background-ratio="0.5">
     <div class="row">
          <div class="owl-carousel owl-theme">
               <div class="item item-first">
                    <div class="caption">
                         <div class="col-md-10 offset-md-1">
                              <h3>Sehat & Kebahagiaan</h3>
                              <h1>Anda Prioritas Kami</h1><a href="#team"
                                   class="section-btn btn btn-default smoothScroll">Layanan</a>
                         </div>
                    </div>
               </div>
               <div class="item item-second">
                    <div class="caption">
                         <div class="col-md-10 offset-md-1">
                              <h3>Kami Peduli Akan Pentingnya.</h3>
                              <h1>Kesehatan Anda</h1><a href="#about"
                                   class="section-btn btn btn-default btn-gray smoothScroll">About
                                   Us</a>
                         </div>
                    </div>
               </div>
               <div class="item item-third">
                    <div class="caption">
                         <div class="col-md-10 offset-md-1">
                              <h3>Kami ada sebagai sahabat dalam.</h3>
                              <h1>Pengobatan & Konsultasi Kesehatan Anda</h1><a href="#news"
                                   class="section-btn btn btn-default btn-blue smoothScroll">Read
                                   Stories</a>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>
<section id="about">
     <div class="container">
          <div class="row">
               <div class="col-md-6 col-sm-6">
                    <div class="about-info">
                         <h2 class="wow fadeInUp" data-wow-delay="0.6s">Selamat Datang Di
                              </i>Kliniku</h2>
                         <div class="wow fadeInUp" data-wow-delay="0.8s">
                              <p>Daftar Klinik menjadi lebih mudah dan cepat karna dapat dilakukan
                                   dimanapun dan kapanpun,
                                   tanpa harus mengantri,
                                   apalagi mengambil nomor antrian.</p>
                         </div>
                         <figure class="profile wow fadeInUp" data-wow-delay="1s"><img
                                   src="<?php echo base_url('image/author-image.jpg')?>" class="img-responsive" alt="">
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
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s"><img
                              src="<?php echo base_url('image/team-image1.jpg')?>" class="img-responsive" alt="">
                         <div class="team-info">
                              <h3>Prof. dr. Wiwien Heru Wiyono,
                                   Sp.P(K),
                                   Ph.D</h3>
                              <p>Dokter Spesialis Paru</p>
                              <div class="team-contact-info">
                                   <p><i class="fa fa-phone"></i>0878-3492-5434</p>
                                   <p><i class="fa fa-envelope-o"></i><a href="#">Wiwien Heru
                                             Wiyono@gmail.com</a></p>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                   <li><a href="#" class="fa fa-envelope-o"></a></li>
                              </ul>
                         </div>
                    </div>
               </div>
               <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s"><img
                              src="<?php echo base_url('image/team-image2.jpg')?>" class="img-responsive" alt="">
                         <div class="team-info">
                              <h3>Prof. dr. Zubairi Djoerban,
                                   Sp.PD-KHOM</h3>
                              <p>Dokter Spesialis Penyakit Dalam</p>
                              <div class="team-contact-info">
                                   <p><i class="fa fa-phone"></i>0853-5434-7809</p>
                                   <p><i class="fa fa-envelope-o"></i><a href="#">Zubairi
                                             Djoerban@gmail.com</a></p>
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
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s"><img
                              src="<?php echo base_url('image/team-image3.jpg')?>" class="img-responsive" alt="">
                         <div class="team-info">
                              <h3>Utami Trie Wahyuni,
                                   S.Psi,
                                   M.Psi</h3>
                              <p>Psikolog</p>
                              <div class="team-contact-info">
                                   <p><i class="fa fa-phone"></i>0877-3888-0100</p>
                                   <p><i class="fa fa-envelope-o"></i><a href="#">Utami Trie
                                             Wahyuni@gmail.com</a></p>
                              </div>
                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-envelope-o"></a></li>
                              </ul>
                         </div>
                    </div>
               </div><br><br>
          </div>
     </div>
</section>
<?= $this->endSection(); ?>