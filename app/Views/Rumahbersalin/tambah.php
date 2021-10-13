<?= $this->extend('template/index'); ?>

<?= $this->Section('content');?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<div class="container p-5">
    <a href="<?= base_url('bersalin'); ?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data Barang</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('Bersalin/add'); ?>">
                <div class="form-group">
                    <label for="">Nama Pasien</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Umur Pasien</label>
                    <input type="number" name="umur" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" name="alamat" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Tanggal</label>
                    <input type="date" name="tgl" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Dokter</label>
                    <input type="text" name="dokter" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <input type="text" name="status" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>