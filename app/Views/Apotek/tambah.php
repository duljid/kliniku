<?= $this->extend('template/index'); ?>

<?= $this->Section('content');?>
<?php $no = 1; ?>
<div class="m-4 apotek">
    <section>
        <h1 class="h3 mb-4 text-gray-800">Tambah Data Obat</h1>
    </section>
    <div class="card">
        <div class="card-body">
            <form action="<?= base_url('apotek/insert'); ?>" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Kode Obat</label>
                            <input type="text" class="form-control" name="kode_obat" value="<?= $kodeOtomatis; ?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="form-group">
                            <label>Nama Obat</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama_obat')) ? 'is-invalid' : ''; ?>" name="nama_obat" value="<?= old('nama_obat'); ?>" autofocus>
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_obat'); ?> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="form-group">
                            <label>Satuan Obat</label>
                            <select class="form-control <?= ($validation->hasError('satuan_obat')) ? 'is-invalid' : ''; ?>" name="satuan_obat">
                                <option selected disabled>-- Pilih Satuan Obat --</option>
                                <option value="Botol">Botol</option>
                                <option value="Pcs">Pcs</option>
                                <option value="Strip">Strip</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('satuan_obat'); ?> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label>Jenis Obat</label>
                            <select class="form-control <?= ($validation->hasError('jenis_obat')) ? 'is-invalid' : ''; ?>" name="jenis_obat">
                                <option selected disabled>-- Pilih Jenis Obat --</option>
                                <option value="Kapsul">Kapsul</option>
                                <option value="Sirup">Sirup</option>
                                <option value="Tablet">Tablet</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('jenis_obat'); ?> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label>Stok Minimal</label>
                            <input type="number" class="form-control <?= ($validation->hasError('stok_obat')) ? 'is-invalid' : ''; ?>" name="stok_obat" value="<?= old('stok_obat'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('stok_obat'); ?> 
                            </div>
                            <small>Stok Minimal 10 Obat</small>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <label>Tanggal Kadaluarasa</label>
                            <input type="date" class="form-control <?= ($validation->hasError('tgl_exp')) ? 'is-invalid' : ''; ?>" name="tgl_exp" value="<?= old('tgl_exp'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('tgl_exp'); ?> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="form-group">
                            <label>Kegunaan</label>
                            <textarea class="form-control" name="kegunaan" rows="5"><?= old('kegunaan'); ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="float-end">
                    <button type="button" class="btn btn-secondary" onclick="history.back()">Cancel</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>