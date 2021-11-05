<html lang="en">

<head>
    <title>Kliniku</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Tooplate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url('image/icon.png')?>">
    
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('fontawesome/css/all.css')?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('hmm.css')?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= base_url('js/datatables/dataTables.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('bootstrap5/css/bootstrap.min.css') ?>">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('css/sb-admin-2.min.css')?>" rel="stylesheet">
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    
    <!-- Jquery UI -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- Template Landingpage -->
    <link rel="stylesheet" href="<?php echo base_url('css/animate.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('css/owl.carousel.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('css/owl.theme.default.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('css/tooplate-style.css')?>">

    <!-- Jquery UI -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

    <style>
        .mati{
            color: red !important;
            background-color: red !important;
        }
    </style>

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
    <section class="preloader">
        <div class="spinner"><span class="spinner-rotate"></span></div>
    </section>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <p>Selamat Datang Di Website Kami</p>
                </div>
                <div class="col-md-8 col-sm-7 text-align-right"><span class="phone-icon"><i
                            class="fa fa-phone"></i>0853-6137-0409</span><span class="date-icon"><i
                            class="fa fa-calendar-plus-o"></i>08:00 - 21:00 (Senin-Sabtu)</span><span
                        class="email-icon"><i class="fa fa-envelope-o"></i><a href="#">info :
                            kliniku@gmail.com</a></span></div>
            </div>
        </div>
    </header>
    <nav class="navbar shadow-sm navbar-expand-lg navbar-light sticky-top" style="border-bottom: 1px solid #f2f2f2; background-color: #ffffff">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>/Home"><img width=120 src="<?php echo base_url("image/Asset 3.png") ?>" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item px-3" style="font-size:13px"><a href="<?= base_url('Home') ?>" class="smoothScroll">Home</a></li>
                    <?php if(logged_in()):?>
                        <?php if(in_groups("Pasien")):?><li class="nav-item px-3" style="font-size:13px"><a href="<?= base_url("Home/daftar") ?>">Daftar
                                Berobat</a></li>
                        <li class="nav-item px-3" style="font-size:13px"><a href="<?= base_url("home/antrian_saya") ?>">Antrian Saya</a></li>
                        <?php endif ?><?php endif ?>
                            <?php if(logged_in()):?>
                                <?php if(in_groups("Administrator")):?><li class="nav-item px-3" style="font-size:13px"><a href="<?= base_url("Admin") ?>"
                                        class="smoothScroll">Dashboard</a></li>
                                <?php elseif(in_groups("Pendaftaran")): ?><li class="nav-item px-3" style="font-size:13px"><a href="<?= base_url("Pendaftaran") ?>"
                                        class="smoothScroll">Dashboard</a>
                                </li>
                                <?php elseif(in_groups("Dokter")): ?><li class="nav-item px-3" style="font-size:13px"><a href="<?= base_url("Dokter") ?>"
                                        class="smoothScroll">Dashboard</a></li>
                                <?php elseif(in_groups("Apotek")): ?><li class="nav-item px-3" style="font-size:13px"><a href="<?= base_url("Apotek") ?>"
                                        class="smoothScroll">Dashboard</a></li>
                                <?php elseif(in_groups("Rumah Bersalin")): ?><li class="nav-item px-3" style="font-size:13px"><a
                                        href="<?= base_url("Rumahbersalin") ?>" class="smoothScroll">Dashboard</a>
                                </li><?php endif ?><li class="nav-item px-3" style="font-size:13px"><a href="<?= route_to('logout') ?>"
                                        class="smoothScroll">Logout</a></li><?php else:?><li class="nav-item px-3" style="font-size:13px"><a
                                        href="<?= route_to('login')?>" class="smoothScroll">Login</a></li>
                                <li class="nav-item px-3" style="font-size:13px"><a href="<?= route_to('register') ?>" class="smoothScroll">Register</a></li>
                                <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <footer data-stellar-background-ratio="5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="footer-thumb">
                        <h4 class="wow fadeInUp" data-wow-delay="0.4s">
                            Hubungi Kami</h4>
                        <p>Jadi orang yang pertama tahu info & promosi
                            kesehatan terbaru dari Kliniku. Gratis.</p>
                        <div class="contact-info">
                            <p><i class="fa fa-phone"></i>0853-6137-0409</p>
                            <p><i class="fa fa-envelope"></i><a href="#">Kliniku@gmail.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="footer-thumb">
                        <div class="opening-hours">
                            <h4 class="wow fadeInUp" data-wow-delay="0.4s">
                                Jam Operasional</h4>
                            <p>Senin - Jumat <span>06:00 - 22:00 </span></p>
                            <p>Sabtu <span>09:00 - 20:00 </span></p>
                            <p>Minggu <span>Tutup</span></p><img src="<?php echo base_url('image/kmkes.jpg')?>"
                                class="img-responsive" alt="">
                        </div>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 border-top">
                    <div class="col-md-4 col-sm-6">
                        <div class="copyright-text">
                            <p>Copyright &copy;
                                2021 kliniku.informatika19.com</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="footer-link"><a href="#">Laboratory
                                Tests</a><a href="#">Departments</a><a href="#">Insurance Policy</a><a
                                href="#">Careers</a></div>
                    </div>
                    <div class="col-md-2 col-sm-2 text-align-center">
                        <div class="angle-up-btn"><a href="#top" class="smoothScroll wow fadeInUp"
                                data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        <script src="<?php echo base_url('js/jquery.js') ?>"></script>
        </script>
        <script src="<?php echo base_url('js/jquery.sticky.js') ?>">
        </script>
        <script src="<?php echo base_url('js/jquery.stellar.min.js') ?>">
        </script>
        <script src="<?php echo base_url('js/wow.min.js') ?>"></script>
        <script src="<?php echo base_url('js/smoothscroll.js') ?>"></script>
        <script src="<?php echo base_url('js/owl.carousel.min.js') ?>">
        </script>
        <script src="<?php echo base_url('js/custom.js') ?>"></script>
        <!-- < Start of Tawk.to Script -->
            <script type="text/javascript">
                var Tawk_API = Tawk_API || {}

                    ,
                    Tawk_LoadStart = new Date();

                (function () {
                        var s1 = document.createElement("script"),
                            s0 = document.getElementsByTagName("script")[0];
                        s1.async = true;
                        s1.src =
                            'https://embed.tawk.to/6148b633d326717cb6826f22/1fg20ffpo';
                        s1.charset = 'UTF-8';
                        s1.setAttribute('crossorigin', '*');
                        s0.parentNode.insertBefore(s1, s0);
                    }

                )();
            </script>
            <End of Tawk.to Script-->

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('js/sb-admin-2.min.js') ?>"></script>

    <!-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script> -->
    <script type="text/javascript" charset="utf8" src="<?= base_url('js/dataTables/jquery.dataTables.js')?>"></script>

    <script>
    $(document).ready(function() {
        $('#data-list').DataTable();
    });
    </script>
</body>

</html>