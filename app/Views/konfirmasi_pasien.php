<?= $this->extend('template/template_home'); ?>

<?= $this->Section('content');?>
<div class="m-4">
    <section class="pendaftaran container">
        <div>
            <h1 class="h3 mb-4 text-gray-800">Daftar Berobat</h1>
            <div class="text-center">
                <?= view('Myth\Auth\Views\_message_block') ?>
            </div>
        </div>
        <div class="card" style="background-color: white">
            <div class="card-header">
                <h1 class="h4 text-gray-800">Biodata Pasien</h1>
            </div>
            <div class="card-body">
                <form action="<?= base_url('/pendaftaran/attempt_pasien_baru') ?>" method="post" class="row">
                    <div class="col">
                        <div class="mb-4">
                            <h5>Nama Pasien</h5>
                            <h6><?= user()->fullname ?></h6>
                            <input type="hidden" name="nama_pasien" value="<?= user()->fullname ?>">
                            <input type="hidden" name="tipe_daftar" value="Online">
                            
                        </div>
                        <div class="mb-4">
                            <h5>Jenis Kelamin</h5>
                            <h6><?= user()->jenis_kelamin ?></h6>
                            <input type="hidden" name="jenis_kelamin" value="<?= user()->jenis_kelamin ?>">
                        </div>
                        <div class="mb-4">
                            <h5>Tanggal Lahir</h5>
                            <h6><?= user()->tanggal_lahir ?></h6>
                            <input type="hidden" name="tanggal_lahir" value="<?= user()->tanggal_lahir ?>">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-4">
                            <h5>Telepon Pasien</h5>
                            <h6><?= user()->phone ?></h6>
                            <input type="hidden" name="phone" value="<?= user()->phone ?>">
                        </div>
                        <div class="mb-4">
                            <h5>Alamat Pasien</h5>
                            <h6><?= user()->alamat ?></h6>
                            <input type="hidden" name="alamat" value="<?= user()->alamat ?>">
                        </div>
                        <button class="btn btn-info text-light" style="width: 100%; height: 55px" type="submit"
                        role="button">Konfirmasi</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>