<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kliniku</title>
    <link rel="stylesheet" href="<?php echo base_url('bootstrap5/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('hmm.css') ?>">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="<?php echo base_url('fontawesome/css/all.css') ?>">
</head>
<body style="background-image: url('<?php echo base_url("image/bg.jpg") ?>'); backkground-repeat: no-repeat;background-size: cover;">
    <section class="login d-flex justify-content-center ">
        <div class="kotak">
            <div class="row" style="background-color: rgba(255, 255, 255, 0.8)">
                <div class="col text-center" style="margin-top: 50px">
                    <img style="width: 300px;"src="<?php echo base_url("image/logo klinik.png") ?>" alt="">
                </div>
                <div class="col" style="height: 400px">
                    <div class="text-center mt-5">
                        <h3>Login</h3>
                    </div>
					<form action="<?= route_to('login') ?>" method="post" class="p-5">
						<?= csrf_field() ?>
                        
<?php if ($config->validFields === ['email']): ?>
						<div class="mb-3">
							<input type="email" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.email')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
<?php else: ?>
						<div class="mb-3">
							<input type="text" class="form-control <?php if(session('errors.login')) : ?>is-invalid<?php endif ?>"
								   name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
<?php endif; ?>

                        <div class="mb-3">
                            <input type="password" class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="password" >
                            <div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
                        </div>
                        <button class="btn" id="tombol" type="submit" role="button">Login</button>
                    </form>
                    <?php if ($config->allowRegistration) : ?>
                        <div class="text-center mt-2">
                            <small>Belum Punya akun ? <a href="<?= route_to('register') ?>">Daftar Akun</a></small>
                        </div>
                    <?php endif; ?>
                    <?php if ($config->activeResetter): ?>
                            <div class="text-center mt-2">
                                <small><a href="<?= route_to('reset') ?>">Lupa Password?</a></small>
                            </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>