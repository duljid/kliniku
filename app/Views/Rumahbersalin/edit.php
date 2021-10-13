<?= $this->extend('template/index'); ?>

<?= $this->Section('content');?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<div class="container p-5">
    <a href="<?= base_url('barang'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Barang : <?= $barang->nama_pasien; ?></h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('Bersalin/update'); ?>">
                <div class="form-group">
                    <label for="">Nama Pasien</label>
                    <input type="text" value="<?= $barang->nama_pasien; ?>" name="nama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Umur Pasien</label>
                    <input type="number" value="<?= $barang->umur_pasien; ?>" name="umur" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" value="<?= $barang->alamat; ?>" name="alamat" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="date" value="<?= $barang->tgl; ?>" name="tgl" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Dokter Penangan</label>
                    <input type="text" value="<?= $barang->dokter; ?>" name="dokter" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" value="<?= $barang->status; ?>" name="status" required class="form-control">
                </div>
                <input type="hidden" value="<?= $barang->no_pasien; ?>" name="no_pasien">
                <button class="btn btn-success">Edit Data</button>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>