<?= $this->extend('template/template_home'); ?>

<?= $this->Section('content');?>
<section id="home" class="slider" data-stellar-background-ratio="0.5">
     <div class="row">
          <div class="owl-carousel owl-theme">
               <div class="item item-first">
                    <div class="caption">
                         <div class="col-md-10 offset-md-1" style="margin-top: 300px">
                              <h3>Sehat & Kebahagiaan</h3>
                              <h1>Anda Prioritas Kami</h1><a href="#team"
                                   class="section-btn btn btn-default smoothScroll">Layanan</a>
                         </div>
                    </div>
               </div>
               <div class="item item-second">
                    <div class="caption">
                         <div class="col-md-10 offset-md-1" style="margin-top: 300px">
                              <h3>Kami Peduli Akan Pentingnya.</h3>
                              <h1>Kesehatan Anda</h1><a href="#about"
                                   class="section-btn btn btn-default btn-gray smoothScroll">About
                                   Us</a>
                         </div>
                    </div>
               </div>
               <div class="item item-third">
                    <div class="caption">
                         <div class="col-md-10 offset-md-1" style="margin-top: 300px">
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
<section id="about" style="margin-bottom: -100px">
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
                         <h2 class="wow fadeInUp" data-wow-delay="0.1s">Dokter Kami</h2>
                    </div>
               </div>
               <div class="clearfix"></div>
               <?php $i = 0; foreach ($dokter as $user ) : ?>
               <?php $i++; if($i == 4){ break; }; ?>
               <div class="col-md-4 col-sm-6">
                    <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s"><img
                              src="<?= base_url()?>/image/user_image/<?= $user->user_image ?>" class="img-responsive" alt="" style="height: 300px; width: 100%; object-fit: cover">
                         <div class="team-info">
                              <h3><?= $user->fullname ?></h3>
                              <p><?= $user->jenis_dokter ?></p>
                              <div class="team-contact-info">
                                   <p><i class="fa fa-phone"></i><?= $user->phone ?></p>
                                   <p><i class="fa fa-envelope-o"></i><a href="#"><?= $user->email ?></a></p>
                              </div>
                         </div>
                    </div>
               </div>
               <?php endforeach; ?>
          </div>
     </div>
</section>
<?= $this->endSection(); ?>