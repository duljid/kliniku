<?= $this->extend('template/index'); ?>

<?= $this->Section('content');?>
<div class="m-4">
    <section class="admin">
        <div>
            <h1 class="h3 mb-4 text-gray-800">Buat Akun</h1>
            <div class="text-center">
                <?= view('Myth\Auth\Views\_message_block') ?>
            </div>
        </div>
        <div class="kotak p-5" style="background-color: white">
            <form action="<?= route_to('register') ?>" method="post">
                <?= csrf_field() ?>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 form-floating">
                            <select class="form-select" name="roles" id="akun"
                                aria-label="Floating label select example">
                                <option value="Perawat">Perawat</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Pendaftaran">Pendaftaran</option>
                                <option value="Apotek">Apotek</option>
                                <option value="Rumah Bersalin">Rumah Bersalin</option>
                            </select>
                            <label for="floatingSelect">Jenis Akun</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text"
                                class="form-control <?php if(session('errors.fullname')) : ?>is-invalid<?php endif ?>"
                                id="floatingInput" name="fullname" placeholder="Nama Lengkap"
                                value="<?= old('fullname') ?>">
                            <label for="floatingInput" id="fullname">Nama Lengkap</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="text"
                                class="form-control <?php if(session('errors.phone')) : ?>is-invalid<?php endif ?>"
                                id="floatingInput" name="phone" placeholder="No Telepon" value="<?= old('phone') ?>">
                            <label for="floatingInput">No Telepon</label>
                        </div>
                        <div class="mb-3 form-floating" id="jenis_kelamin">
                            <select class="form-select" name="jenis_kelamin" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option value="Laki - laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <label for="floatingSelect">Jenis Kelamin</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                            name="alamat" id=></textarea>
                            <label for="floatingTextarea">Alamat</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 form-floating" id="tanggal_lahir">
                            <input type="date"
                                class="form-control <?php if(session('errors.tanggal_lahir')) : ?>is-invalid<?php endif ?>"
                                id="input_tanggal" name="tanggal_lahir" placeholder="Tanggal Lahir"
                                value="<?= old('tanggal_lahir') ?>">
                            <label for="floatingInput">Tanggal Lahir</label>
                        </div>
                        <div class="mb-3 form-floating form-floating">
                            <input type="text"
                            class="form-control <?php if(session('errors.username')) : ?>is-invalid<?php endif ?>"
                            id="floatingInput" name="username" placeholder="<?=lang('Auth.username')?>"
                            value="<?= old('username') ?>">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="email"
                                class="form-control <?php if(session('errors.email')) : ?>is-invalid<?php endif ?>"
                                    id="floatingInput" name="email" placeholder="Alamat Email" value="<?= old('email') ?>">
                            <label for="floatingInput">Alamat Email</label>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="mb-3 form-floating">
                                    <input type="password"
                                            class="form-control <?php if(session('errors.password')) : ?>is-invalid<?php endif ?>"
                                                id="floatingPassword" name="password" placeholder="Password" autocomplete="off">
                                    <label for="floatingPassword">Password</label>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3 form-floating">
                                    <input type="password"
                                    class="form-control <?php if(session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                    name="pass_confirm" placeholder="Konfirmasi Password" id="floatingPassword"
                                    autocomplete="off">
                                    <label for="floatingPassword">Konfirmasi Password</label>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-info" style="width: 100%; height: 55px" type="submit" role="button">Daftar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

<script>
    $(document).ready(function(){
        $('#akun').on('change', function() {
            if($(this).val() == 'Dokter'){
                document.getElementById('fullname').innerHTML = 'Nama Dokter';
                $('#jenis_kelamin, #tanggal_lahir').css("visibility" , "visible").css("position" , "inherit");
                $('#jenis_kelamin, #tanggal_lahir').css("visibility" , "visible").css("position" , "inherit");
            }else if($(this).val() == 'Apotek'){
                // ganti place holder
                document.getElementById('fullname').innerHTML = 'Nama Apotek';

                // ngilangin tanggal lahir
                $('#jenis_kelamin, #tanggal_lahir').css("visibility" , "hidden").css("position" , "absolute");
                
                // default tanggal
                var now = new Date();
                var day = ("0" + now.getDate()).slice(-2);
                var month = ("0" + (now.getMonth() + 1)).slice(-2);
                var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
                $('#input_tanggal').val(today);

            }else if($(this).val() == 'Rumah Bersalin'){
                document.getElementById('fullname').innerHTML = 'Nama Rumah Bersalin';
                $('#jenis_kelamin, #tanggal_lahir').css("visibility" , "hidden").css("position" , "absolute");

                // default tanggal
                var now = new Date();
                var day = ("0" + now.getDate()).slice(-2);
                var month = ("0" + (now.getMonth() + 1)).slice(-2);
                var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
                $('#input_tanggal').val(today);
            }else{
                document.getElementById('fullname').innerHTML = 'Nama Lengkap';
                $('#jenis_kelamin, #tanggal_lahir').css("visibility" , "visible").css("position" , "inherit");
            }
        });
    });
</script>
<?= $this->endSection(); ?>