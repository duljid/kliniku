<?= $this->extend('template/index'); ?>

<?= $this->Section('content');?>
<div class="m-4 pendaftaran">
    <section>
        <div>
            <h1 class="h3 mb-4 text-gray-800">Data Dokter</h1>
            <div class="text-center">
                <?= view('Myth\Auth\Views\_message_block') ?>
            </div>
        </div>
        <div class="kotak p-5" style="background-color: white">
            <form action="<?= base_url('/Dokter/simpan_dokter') ?>" method="post"
                style="visibility: <?= $tidaklengkap ?>">
                <?= csrf_field() ?>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <h5>Nama Dokter</h5>
                            <h6><?= user()->fullname ?></h6>
                            <input type="hidden" name="id_dokter" value="<?= user()->id?>">
                        </div>
                        <div class="mb-3 form-floating">
                            <select class="form-select" name="jenis_dokter" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option value="Dokter Umum">Dokter Umum</option>
                                <option value="Dokter Anak">Dokter Anak</option>
                                <option value="Dokter Gigi">Dokter Gigi</option>
                            </select>
                            <label for="floatingSelect">Jenis Dokter</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 form-floating">
                            <select class="form-select" name="jadwal_praktek" id="floatingSelect"
                                aria-label="Floating label select example">
                                <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jum'at">Jum'at</option>
                            </select>
                            <label for="floatingSelect">Jadwal Praktek</label>
                        </div>
                        <button class="btn btn-info" style="width: 100%; height: 55px" type="submit"
                            role="button">Simpan</button>
                    </div>
                </div>
            </form>
            <div class="row" style="visibility : <?= $lengkap ?>">
                    <div class="col">
                        <div class="mb-3">
                            <h5>Nama Dokter</h5>
                            <h6><?= user()->fullname ?></h6>
                        </div>
                        <div class="mb-3">
                            <h5>Poli</h5>
                            <h6><?= $poli ?></h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <h5>Jadwal Praktek</h5>
                            <h6>Senin</h6>
                        </div>
                        <div class="mb-3">
                            <h5>No Telepon</h5>
                            <h6><?= user()->phone ?> </h6>
                        </div>
                    </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>