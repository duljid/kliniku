<?= $this->extend('template/index'); ?>

<?= $this->Section('content');?>
<div class="m-4">
    <section class="pendaftaran">
        <div>
            <h1 class="h3 mb-4 text-gray-800">Pendaftaran Poli Pasien</h1>
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
                            <h5>Nama Pasien</h5>
                            <h6><?= $nama_pasien ?></h6>
                        </div>
                        <div class="mb-4">
                            <h5>Jenis Kelamin</h5>
                            <h6><?= $jenis_kelamin ?></h6>
                        </div>
                        <div class="mb-4">
                            <h5>Umur Pasien</h5>
                            <h6><?= $umur_pasien ?> Tahun</h6>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-4">
                            <h5>Tanggal Lahir</h5>
                            <h6><?= $tanggal_lahir ?></h6>
                        </div>
                        <div class="mb-4">
                            <h5>Telepon Pasien</h5>
                            <h6><?= $telepon_pasien ?></h6>
                        </div>
                        <div class="mb-4">
                            <h5>Alamat Pasien</h5>
                            <h6><?= $alamat_pasien ?></h6>
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
                            <div class="mb-4">
                                <h5>Tanggal Daftar</h5>
                                <h6 id="tanggal"></h6>
                                <input type="hidden" id="val_tanggal" name="tanggal_berobat">
                                <input type="hidden" name="kode_pasien" value=<?= $kode_pasien ?>>
                            </div>
                            <button class="btn btn-info" style="width: 100%; height: 55px" type="submit"
                                role="button">Daftar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<script>
    $(document).ready(function(){
        var now = new Date();
        var day = ("0" + now.getDate()).slice(-2);
        var month = ("0" + (now.getMonth() + 1)).slice(-2);
        var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
        $('#tanggal').text(today);
        $('#val_tanggal').val(today);
    });
</script>
    <?= $this->endSection(); ?>