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
                <div class="row">
                    <div class="col">
                        <div class="mb-4">
                            <h5>Kode Pasien <h4 class="text-info"><?= $kode_pasien ?></h4></h5>
                        </div>
                        <div class="mb-4">
                            <h5>Nama Pasien</h5>
                            <h6><?= user()->fullname ?></h6>
                        </div>
                        <div class="mb-4">
                            <h5>Jenis Kelamin</h5>
                            <h6><?= user()->jenis_kelamin ?></h6>
                        </div>
                        <div class="mb-4">
                            <h5>Umur Pasien</h5>
                            <h6><?= $umur ?> Tahun</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-4">
                            <h5>Tanggal Lahir</h5>
                            <h6><?= user()->tanggal_lahir ?></h6>
                        </div>
                        <div class="mb-4">
                            <h5>Telepon Pasien</h5>
                            <h6><?= user()->phone ?></h6>
                        </div>
                        <div class="mb-4">
                            <h5>Alamat Pasien</h5>
                            <h6><?= user()->alamat ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header">
                <h1 class="h4 text-gray-800">Daftar Poli</h1>
            </div>
            <div class="card-body">
                <form action="<?= base_url('/pendaftaran/attempt_poli') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3 form-floating">
                                <select class="form-select" name="poli_berobat" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option value="Poli Anak">Poli Anak</option>
                                    <option value="Poli Umum">Poli Umum</option>
                                    <option value="Poli Gigi">Poli Gigi</option>
                                </select>
                                <label for="floatingSelect">Jenis Poli</label>
                            </div>
                            <div class="mb-3 form-floating">
                                <select class="form-select" name="dokter_berobat" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option value="Abdul Majid">Abdul Majid</option>
                                    <option value="Jamaludin">Jamaludin</option>
                                </select>
                                <label for="floatingSelect">Dokter Poli</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3 form-floating" id="tanggal_lahir">
                                <input type="date"
                                    class="form-control <?php if(session('errors.tanggal_lahir')) : ?>is-invalid<?php endif ?>"
                                    id="input_tanggal" name="tanggal_berobat" placeholder="Tanggal Lahir"
                                    value="<?= old('tanggal_lahir') ?>">
                                    <input type="hidden" name="kode_pasien" value="<?= $kode_pasien ?>">
                                    <input type="hidden" name="tipe_daftar" value="Online">
                                <label for="floatingInput">Tanggal Berobat</label>
                            </div>
                            <button class="btn btn-info text-light" style="width: 100%; height: 55px" type="submit"
                                role="button">Daftar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>