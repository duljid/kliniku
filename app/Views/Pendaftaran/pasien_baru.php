<?= $this->extend('template/index'); ?>

<?= $this->Section('content');?>
<div class="m-4 pendaftaran">
<section>
        <div>
            <h1 class="h3 mb-4 text-gray-800">Pendaftaran Pasien Baru</h1>
            <div class="text-center">
                <?= view('Myth\Auth\Views\_message_block') ?>
            </div>
        </div>
        <div class="kotak p-5" style="background-color: white">
            <form action="<?= base_url('/pendaftaran/attempt_pasien_baru') ?>" method="post">
                <?= csrf_field() ?>
                <h1 class="h5 mb-4 text-gray-800">Kode Pasien <span class="text-info"><?= $kode_pasien?></span></h1>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 form-floating">
                            <input type="text"
                                class="form-control <?php if(session('errors.nama_pasien')) : ?>is-invalid<?php endif ?>"
                                id="floatingInput" name="nama_pasien" placeholder="Nama"
                                value="<?= old('nama_pasien') ?>">
                            <label for="floatingInput">Nama Pasien</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <input type="date"
                                class="form-control <?php if(session('errors.tanggal_lahir')) : ?>is-invalid<?php endif ?>"
                                id="floatingInput" name="tanggal_lahir" placeholder="Tanggal Lahir"
                                value="<?= old('tanggal_lahir') ?>">
                            <label for="floatingInput">Tanggal Lahir</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <select class="form-select" name="jenis_kelamin" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option value="Laki - laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <label for="floatingSelect">Jenis Kelamin</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 form-floating">
                            <input type="text"
                                class="form-control <?php if(session('errors.phone')) : ?>is-invalid<?php endif ?>"
                                id="floatingInput" name="phone" placeholder="No Telepon" value="<?= old('phone') ?>">
                            <label for="floatingInput">No Telepon</label>
                        </div>
                        <div class="mb-3 form-floating">
                            <textarea class="form-control  <?php if(session('errors.alamat')) : ?>is-invalid<?php endif ?>" name="alamat" placeholder="Alamat Anda" id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Alamat</label>
                        </div>
                        <button class="btn btn-info" style="width: 100%; height: 55px" type="submit" role="button">Daftar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>