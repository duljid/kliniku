<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('bootstrap5/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('hmm.css') ?>">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Open+Sans:wght@300&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="<?php echo base_url('fontawesome/css/all.css') ?>">
</head>

<body
    style="background-image: url('<?php echo base_url("image/bg.jpg") ?>'); backkground-repeat: no-repeat;background-size: cover;">
    <section class="regist d-flex justify-content-center ">
        <div class="kotak col-lg-8 mb-5" style="background-color: rgba(255, 255, 255, 0.8)">
            <form action="<?= route_to('register') ?>" method="post" class="px-5 pt-4 mb-5">
                <?= csrf_field() ?>
                <div class="row text-center">
                    <h3 style="padding-top: 30px">Buat Akun Anda</h3>
                    <div class="text-center pt-3 px-5">
                        <?= view('Myth\Auth\Views\_message_block') ?>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 form-floating">
                            <input type="text"
                                class="form-control <?php if(session('errors.fullname')) : ?>is-invalid<?php endif ?>"
                                id="floatingInput" name="fullname" placeholder="Nama Lengkap" value="<?= old('fullname') ?>">
                            <label for="floatingInput">Nama Lengkap</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="date"
                                class="form-control <?php if(session('errors.tanggal_lahir')) : ?>is-invalid<?php endif ?>"
                                id="floatingInput" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= old('tanggal_lahir') ?>">
                            <label for="floatingInput">Tanggal Lahir</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <select class="form-select" name="jenis_kelamin" id="floatingSelect" aria-label="Floating label select example">
                                <option value="Laki - laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <label for="floatingSelect">Jenis Kelamin</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text"
                                class="form-control <?php if(session('errors.phone')) : ?>is-invalid<?php endif ?>"
                                id="floatingInput" name="phone" placeholder="No Telepon" value="<?= old('phone') ?>">
                            <label for="floatingInput">No Telepon</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="alamat" id=></textarea>
                            <label for="floatingTextarea">Alamat</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3 form-floating form-floating">
                            <input type="text"
                                class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>" id="floatingInput"
                                name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                                <label for="floatingInput">Username</label>
                        </div>
                        <!-- <div class="mb-3 form-floating form-floating">
                            <input type="text"
                                class="form-control <?php if(session('errors.roles')) : ?>is-invalid<?php endif ?>" id="floatingInput"
                                name="roles" placeholder="<?=lang('Auth.roles')?>" value="<?= old('roles') ?>">
                                <label for="floatingInput">roles</label>
                        </div> -->
                        <div class="mb-3 form-floating">
                            <input type="email"
                                class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>" id="floatingInput"
                                name="email" placeholder="Alamat Email" value="<?= old('email') ?>">
                                <label for="floatingInput">Alamat Email</label>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="mb-3 form-floating">
                                    <input type="password"
                                        class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>" id="floatingPassword"
                                        name="password" placeholder="Password" autocomplete="off">
                                        <label for="floatingPassword">Password</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="mb-3 form-floating">
                                        <input type="password"
                                        class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                            name="pass_confirm" placeholder="Konfirmasi Password" id="floatingPassword" autocomplete="off">
                                            <label for="floatingPassword">Konfirmasi Password</label>
                                        </div>
                                    </div>
                        </div>
                        <button class="btn" id="tombol" type="submit" role="button">Daftar</button>
                        <div class="text-center mt-4">
                            <small>Punya akun ? <a href="<?= route_to('login') ?>">Login</a></small>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>

</html>